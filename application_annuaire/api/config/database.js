const mysql = require('mysql');

const pool = mysql.createPool({
  connectionLimit: 10,
  host: 'localhost',
  user: 'admin',
  password: 'root',
  database: 'application_annuaire'
});

module.exports = pool;
