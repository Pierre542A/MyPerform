const jwt = require('jsonwebtoken');
const pool = require('../config/database');

const secretKey = process.env.JWT_SECRET_KEY;

const verifyAdmin = (req, res, next) => {
  const token = req.headers['authorization'];

  if (!token) {
    return res.status(403).json({ message: "Un token est requis pour l'authentification" });
  }

  try {
    const decoded = jwt.verify(token, secretKey);
    pool.query(`SELECT role_employer FROM employer WHERE id_employer = ?`, [decoded.id_employer], (error, results) => {
      if (error) throw error;

      if (results.length > 0 && results[0].role_employer) {
        next();
      } else {
        res.status(403).json({ message: "Accès refusé : Vous n'avez pas les droits administrateur." });
      }
    });
  } catch (err) {
    return res.status(401).json({ message: "Token invalide ou expiré" });
  }
};

module.exports = verifyAdmin;
