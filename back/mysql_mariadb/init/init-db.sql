-- Création de la base de données
CREATE DATABASE IF NOT EXISTS application_annuaire;
USE application_annuaire;

-- Attribution des privilèges complets à l'utilisateur 'admin'
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;

CREATE TABLE service (
  id_service INT AUTO_INCREMENT PRIMARY KEY,
  nom_service VARCHAR(255)
);

CREATE TABLE site (
  id_site INT AUTO_INCREMENT PRIMARY KEY,
  ville_site VARCHAR(255),
  service_site VARCHAR(255)
);

CREATE TABLE employer (
  id_employer INT AUTO_INCREMENT PRIMARY KEY,
  nom_employer VARCHAR(255),
  prenom_employer VARCHAR(255),
  telephone_fixe_employer VARCHAR(20),
  telephone_port_employer VARCHAR(20),
  email_employer VARCHAR(255),
  password_employer VARCHAR(255),
  role_employer BOOLEAN,
  service_employer INT,
  site_employer INT,
  FOREIGN KEY (service_employer) REFERENCES service(id_service),
  FOREIGN KEY (site_employer) REFERENCES site(id_site)
);

-- Insertion de valeurs dans la table service
INSERT INTO service (id_service, nom_service) VALUES
(1, 'Comptabilité'),
(2, 'Production'),
(3, 'Accueil'),
(4, 'Informatique'),
(5, 'Commercial');

-- Insertion de valeurs dans la table site
INSERT INTO site (id_site, ville_site, service_site) VALUES
(1, 'Paris', 'Siège Administratif'),
(2, 'Nantes', 'Site de Production'),
(3, 'Toulouse', 'Site de Production'),
(4, 'Nice', 'Site de Production'),
(5, 'Lille', 'Site de Production');

-- Insertion de valeurs dans la table employer
INSERT INTO employer (id_employer, nom_employer, prenom_employer, telephone_fixe_employer, telephone_port_employer, email_employer, password_employer, role_employer, service_employer, site_employer) VALUES
(1, 'Pierre', 'SPREDER', '0102030405', '0601020304', 'spreder.pierre@gmail.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 1, 1, 1),
(2, 'Petit', 'Thomas', '0102030406', '0601020305', 'thomas.petit@example.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 0, 2, 2),
(3, 'Bernard', 'Lucie', '0102030407', '0601020306', 'lucie.bernard@example.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 0, 3, 3),
(4, 'Roux', 'Mathieu', '0102030408', '0601020307', 'mathieu.roux@example.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 0, 4, 4),
(5, 'Moreau', 'Clara', '0102030409', '0601020308', 'clara.moreau@example.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 0, 5, 5),
(6, 'Lefebvre', 'Cédric', '0102030410', '0601020309', 'cedric.lefebvre@example.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 0, 1, 1),
(7, 'Girard', 'Chloé', '0102030411', '0601020310', 'chloe.girard@example.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 0, 2, 2),
(8, 'Perrin', 'Rémi', '0102030412', '0601020311', 'remi.perrin@example.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 0, 3, 3),
(9, 'Morin', 'Anais', '0102030413', '0601020312', 'anais.morin@example.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 0, 4, 4),
(10, 'Lemoine', 'Pierre', '0102030414', '0601020313', 'pierre.lemoine@example.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 0, 5, 5),
(11, 'Mathieu', 'Marie', '0102030415', '0601020314', 'marie.mathieu@example.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 0, 1, 1),
(12, 'Gautier', 'Alexandre', '0102030416', '0601020315', 'alexandre.gautier@example.com', '$2a$10$ykt4aO359o1d611.PM.A7uxCnS1PTfNkRDS1Gj/loSFK65cNf3XZq', 0, 2, 2);
