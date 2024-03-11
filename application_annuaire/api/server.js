require('dotenv').config();
const express = require('express');
const app = express();
const PORT = process.env.PORT || 3000;

app.use(express.json()); // Pour parser les requêtes JSON

// Importation des routes
const employerRoutes = require('./routes/employer');
const serviceRoutes = require('./routes/service');
const siteRoutes = require('./routes/site');

app.use('/employer', employerRoutes);
app.use('/service', serviceRoutes);
app.use('/site', siteRoutes);

app.get('/', (req, res) => {
  res.send('Bienvenue sur mon serveur Express !');
});

// Démarrage du serveur
//node server.js <-- Pour lancer le serveur

app.listen(PORT, () => {
  console.log(`Serveur démarré sur le port ${PORT}`);
});