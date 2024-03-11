const pool = require('../config/database');

const Site = {
    // Créer un site
    create(data, callback) {
        pool.query(
        `INSERT INTO site (ville_site, service_site) VALUES (?, ?)`,
        [data.ville_site, data.service_site],
        callback
        );
    },

    // Lire tous les sites
    findAll(callback) {
        pool.query(`SELECT * FROM site`, [], callback);
    },

    // Lire un site par son ID
    findById(id, callback) {
        pool.query(`SELECT * FROM site WHERE id_site = ?`, [id], callback);
    },

    // Mettre à jour un site
    update(id, data, callback) {
        pool.query(
        `UPDATE site SET ville_site = ?, service_site = ? WHERE id_site = ?`,
        [data.ville_site, data.service_site, id],
        callback
        );
    },

    // Supprimer un site
    delete(id, callback) {
        pool.query(`DELETE FROM site WHERE id_site = ?`, [id], callback);
    }
};

module.exports = Site;