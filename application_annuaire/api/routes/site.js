const express = require('express');
const router = express.Router();
const { body, validationResult, check } = require('express-validator');
const Site = require('../models/site');
const verifyAdmin = require('../middleware/verifyAdmin');

// Définition des champs attendus pour un site
const expectedFields = ['ville_site', 'service_site'];
const validateSiteFields = expectedFields.map(field => 
  body(field).trim().not().isEmpty().withMessage(`${field} est requis.`)
);

router.post('/', verifyAdmin, validateSiteFields, [
    check('*').custom((value, { req }) => {
        const keys = Object.keys(req.body);
        if (keys.length !== expectedFields.length || !keys.every(key => expectedFields.includes(key))) {
        throw new Error("La requête contient des champs non autorisés ou manquants.");
        }
        return true;
    })
    ], (req, res) => {
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
        return res.status(400).json({ errors: errors.array() });
    }

    Site.create(req.body, (error, results) => {
        if (error) {
        return res.status(500).json({ error });
        }
        res.status(201).json({ message: "Site ajouté avec succès", id: results.insertId });
    });
    });

    // Lire tous les sites
    router.get('/', (req, res) => {
    Site.findAll((error, results) => {
        if (error) {
        return res.status(500).json({ error });
        }
        res.status(200).json(results);
    });
    });

    // Lire un site par son ID
    router.get('/:id', (req, res) => {
    Site.findById(req.params.id, (error, result) => {
        if (error) {
        return res.status(500).json({ error });
        }
        res.status(200).json(result);
    });
    });

    // Mettre à jour un site [ADMIN ONLY]
    router.put('/:id', verifyAdmin, (req, res) => {
    const { id } = req.params;
    Site.update(id, req.body, (error, results) => {
        if (error) {
        return res.status(500).json({ error });
        }
        res.status(200).json({ message: "Site mis à jour avec succès" });
    });
    });

    // Supprimer un site [ADMIN ONLY]
    router.delete('/:id', verifyAdmin, (req, res) => {
    Site.delete(req.params.id, (error, results) => {
        if (error) {
        return res.status(500).json({ error });
        }
        res.status(200).json({ message: "Site supprimé avec succès" });
    });
});

module.exports = router;
