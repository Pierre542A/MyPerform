const express = require('express');
const router = express.Router();
const { body, validationResult, check } = require('express-validator');
const Service = require('../models/service');
const verifyAdmin = require('../middleware/verifyAdmin');

// Définition des règles de validation
const serviceValidationRules = [
  body('nom_service').trim().not().isEmpty().withMessage('Le nom du service est requis.'),
  check('*').custom((value, { req }) => {
    const keys = Object.keys(req.body);
    // Assurez-vous que seuls 'nom_service' est présent
    if (keys.length > 1 || !keys.includes('nom_service')) {
      throw new Error('La requête contient des champs non autorisés.');
    }
    return true;
  })
];

router.post('/', verifyAdmin, serviceValidationRules, (req, res) => {
  const errors = validationResult(req);
  if (!errors.isEmpty()) {
    return res.status(400).json({ errors: errors.array() });
  }

  Service.create(req.body, (error, results) => {
    if (error) {
      console.error(error); // Pour le débogage
      return res.status(500).json({ message: "Erreur lors de la création du service", details: error.message });
    }
    res.status(201).json({ message: "Service ajouté avec succès", id: results.insertId });
  });
  });

  // Lire tous les services
  router.get('/', (req, res) => {
    Service.findAll((error, results) => {
      if (error) throw error;
      res.status(200).json(results);
    });
  });

  // Lire un service par ID
  router.get('/:id', (req, res) => {
    Service.findById(req.params.id, (error, results) => {
      if (error) throw error;
      res.status(200).json(results);
    });
  });

  // Mettre à jour un service par son ID [ADMIN ONLY]
  router.put('/:id', verifyAdmin, (req, res) => {
    const { id } = req.params; // Récupère l'ID du service depuis l'URL
    const data = { ...req.body, id_service: id }; // Combine les données envoyées avec l'ID

    Service.update(data, (error, results) => {
      if (error) {
        res.status(500).json({ error: "Erreur lors de la mise à jour du service" });
      } else if (results.affectedRows === 0) {
        // Si aucun enregistrement n'a été mis à jour, cela signifie que l'ID n'existe pas
        res.status(404).json({ message: "Service non trouvé" });
      } else {
        res.status(200).json({ message: "Service modifié avec succès" });
      }
    });
  });

  // Supprimer un service [ADMIN ONLY]
  router.delete('/:id', verifyAdmin, (req, res) => {
    Service.delete(req.params.id, (error, results) => {
      if (error) throw error;
      res.status(200).send(`Service supprimé avec succès`);
    });
});

module.exports = router;
