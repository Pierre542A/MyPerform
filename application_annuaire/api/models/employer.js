const pool = require('../config/database');
const bcrypt = require('bcrypt');
const saltRounds = 10;

const Employer = {
    // Créer un employer
    async create(data, callback) {
        const hashedPassword = await bcrypt.hash(data.password_employer, saltRounds);
        pool.query(
        `INSERT INTO employer (nom_employer, prenom_employer, telephone_fixe_employer, telephone_port_employer, email_employer, password_employer, role_employer, service_employer, site_employer) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)`,
        [data.nom_employer, data.prenom_employer, data.telephone_fixe_employer, data.telephone_port_employer, data.email_employer, hashedPassword, data.role_employer, data.service_employer, data.site_employer],
        callback
        );
    },

    // Lire tous les employers
    findAll(callback) {
        pool.query(`SELECT * FROM employer`, [], callback);
    },

    // Lire un employer par son ID
    findById(id, callback) {
        pool.query(`SELECT * FROM employer WHERE id_employer = ?`, [id], callback);
    },

    // Mettre à jour un employer
    async update(id, data, callback) {
        const hashedPassword = await bcrypt.hash(data.password_employer, saltRounds);
        pool.query(
        `UPDATE employer SET nom_employer = ?, prenom_employer = ?, telephone_fixe_employer = ?, telephone_port_employer = ?, email_employer = ?, password_employer = ?, role_employer = ?, service_employer = ?, site_employer = ? WHERE id_employer = ?`,
        [data.nom_employer, data.prenom_employer, data.telephone_fixe_employer, data.telephone_port_employer, data.email_employer, hashedPassword, data.role_employer, data.service_employer, data.site_employer, id],
        callback
        );
    },

    // Supprimer un employer
    delete(id, callback) {
        pool.query(`DELETE FROM employer WHERE id_employer = ?`, [id], callback);
    }
};

module.exports = Employer;