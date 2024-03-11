const express = require('express');
const router = express.Router();
const { body, validationResult } = require('express-validator');
const Employer = require('../models/employer');
const jwt = require('jsonwebtoken');
const bcrypt = require('bcrypt');
const pool = require('../config/database');
const verifyAdmin = require('../middleware/verifyAdmin');

const secretKey = process.env.JWT_SECRET_KEY;

// Middleware pour valider les données d'entrée lors de la création ou mise à jour d'un employé
const employerValidationRules = [
    body('nom_employer').trim().not().isEmpty().withMessage('Le nom est requis.'),
    body('prenom_employer').trim().not().isEmpty().withMessage('Le prénom est requis.'),
    body('telephone_fixe_employer').trim().not().isEmpty().withMessage('Le téléphone fixe est requis.'),
    body('telephone_port_employer').trim().not().isEmpty().withMessage('Le téléphone portable est requis.'),
    body('email_employer').isEmail().withMessage('Un email valide est requis.'),
    body('password_employer').trim().not().isEmpty().withMessage('Le mot de passe est requis.'),
    body('role_employer').isInt({ min: 0, max: 1 }).withMessage('Le rôle est invalide.'),
    body('service_employer').trim().not().isEmpty().withMessage('L\'ID du service est requis.'),
    body('site_employer').trim().not().isEmpty().withMessage('L\'ID du site est requis.'),
];

// Route de login pour les employés
router.post('/login', (req, res) => {
    const { email_employer, password_employer } = req.body;
    // Recherche de l'employé par email
    pool.query(`SELECT * FROM employer WHERE email_employer = ?`, [email_employer], async (error, results) => {
        if (error) {
            return res.status(500).json({ error });
        }
        if (results.length === 0) {
            return res.status(401).json({ message: "Email ou mot de passe incorrect" });
        }
        const user = results[0];

        // Comparaison du mot de passe fourni avec celui hashé en base
        const match = await bcrypt.compare(password_employer, user.password_employer);
        if (!match) {
            return res.status(401).json({ message: "Email ou mot de passe incorrect" });
        }

        // Génération d'un token JWT si l'authentification réussit
        const token = jwt.sign({ id_employer: user.id_employer }, secretKey, { expiresIn: '600s' });
        res.json({ token });
    });
});

// Route pour créer un employé (accès restreint aux admins)
router.post('/', verifyAdmin, employerValidationRules, async (req, res) => {
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
        return res.status(400).json({ errors: errors.array() });
    }

    const hashedPassword = await bcrypt.hash(req.body.password_employer, 10); // Hashage du mot de passe
    const employerData = { ...req.body, password_employer: hashedPassword };

    // Création de l'employé avec le mot de passe hashé
    Employer.create(employerData, (error, results) => {
        if (error) return res.status(500).json({ error });
        res.status(201).json({ message: "Employer ajouté avec succès", id: results.insertId });
    });
    });

    // Lire tous les employers
    router.get('/', (req, res) => {
    Employer.findAll((error, results) => {
        if (error) return res.status(500).json({ error });
        res.status(200).json(results);
    });
    });

    // Lire un employer par son ID
    router.get('/:id', (req, res) => {
    Employer.findById(req.params.id, (error, result) => {
        if (error) return res.status(500).json({ error });
        res.status(200).json(result);
    });
    });

    // Mettre à jour un employer [ADMIN ONLY]
    router.put('/:id', verifyAdmin, (req, res) => {
    Employer.update(req.params.id, req.body, (error, results) => {
        if (error) return res.status(500).json({ error });
        res.status(200).json({ message: "Employer mis à jour avec succès" });
    });
    });

    // Supprimer un employer [ADMIN ONLY]
    router.delete('/:id', verifyAdmin, (req, res) => {
    Employer.delete(req.params.id, (error, results) => {
        if (error) return res.status(500).json({ error });
        res.status(200).json({ message: "Employer supprimé avec succès" });
    });
});

module.exports = router;