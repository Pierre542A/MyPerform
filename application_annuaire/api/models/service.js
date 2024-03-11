const pool = require('../config/database');

const Service = {
    // Créer un service
    create(data, callback) {
        pool.query(
        `INSERT INTO service (nom_service) VALUES (?)`,
        [data.nom_service],
        callback
        );
    },

    // Lire tous les services
    findAll(callback) {
        pool.query(`SELECT * FROM service`, [], callback);
    },

    // Lire un service par ID
    findById(id, callback) {
        pool.query(`SELECT * FROM service WHERE id_service = ?`, [id], callback);
    },
    
    // Mettre à jour un service
    update(data, callback) {
        pool.query(
        `UPDATE service SET nom_service = ? WHERE id_service = ?`,
        [data.nom_service, data.id_service],
        callback
        );
    },

    // Supprimer un service
    delete(id, callback) {
        pool.query(`DELETE FROM service WHERE id_service = ?`, [id], callback);
    }
};

module.exports = Service;