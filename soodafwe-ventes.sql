-- Base de données:  soodafwe-ventes

-- CREATION DES TABLES DE DONNEES 
-- Création de la table: marques
DROP TABLE IF EXISTS marques ;

CREATE TABLE marques (
    id int(10) AUTO_INCREMENT NOT NULL,
    nom VARCHAR(100) NOT NULL,
    description TEXT,
    PRIMARY KEY (id) 
) ENGINE=InnoDB;


-- Création de la table: categories
DROP TABLE IF EXISTS categories ;
CREATE TABLE categories (
    id int(11) AUTO_INCREMENT NOT NULL,
    titre VARCHAR(80) NOT NULL,
    description TEXT,
    PRIMARY KEY (id) 
) ENGINE=InnoDB;


-- Création de la table: pays
DROP TABLE IF EXISTS pays ;
CREATE TABLE pays (
    id VARCHAR(255) NOT NULL,
    nom VARCHAR(255) NOT NULL,
    PRIMARY KEY (id) 
) ENGINE=InnoDB;

-- Création de la table: clients
DROP TABLE IF EXISTS clients ;
CREATE TABLE clients (
    id int(11) AUTO_INCREMENT NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    mdp VARCHAR(100) NOT NULL,
    tel VARCHAR(100),
    cp INT(11),
    ville VARCHAR(255),
    adresse TEXT,
    id_pays VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FK_Client_id_pays FOREIGN KEY (id_pays) REFERENCES pays (id) 
) ENGINE=InnoDB;


-- Création de la table: fournisseurs
DROP TABLE IF EXISTS fournisseurs ;
CREATE TABLE fournisseurs (
    id int(11) AUTO_INCREMENT NOT NULL,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telfixe VARCHAR(255),
    telport VARCHAR(100),
    cp VARCHAR(100),
    adresse VARCHAR(255),
    ville VARCHAR(255),
    id_pays VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FK_Fournisseur_id_pays FOREIGN KEY (id_pays) REFERENCES pays (id)
) ENGINE=InnoDB;


-- Création de la table: produits
DROP TABLE IF EXISTS produits ;
CREATE TABLE produits (
    id int(11) AUTO_INCREMENT NOT NULL,
    designation VARCHAR(255) NOT NULL,
    description TEXT,
    prix DOUBLE NOT NULL,
    prix_promo DOUBLE,
    photo VARCHAR(255),
    id_marque INT(10) NOT NULL,
    id_categorie INT(11) NOT NULL,
    id_fournisseur INT(11) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT CK_prix CHECK (prix>0),
    CONSTRAINT CK_prix_promo CHECK (prix_promo>0),
    CONSTRAINT FK_Produit_id_marque FOREIGN KEY (id_marque) REFERENCES marques (id),
    CONSTRAINT FK_Produit_id_categorie FOREIGN KEY (id_categorie) REFERENCES categories (id),
    CONSTRAINT FK_Produit_id_fournisseur FOREIGN KEY (id_fournisseur) REFERENCES fournisseurs (id)
) ENGINE=InnoDB;



-- Création de la table: commandes
DROP TABLE IF EXISTS commandes ;
CREATE TABLE commandes (
    id int(11) AUTO_INCREMENT NOT NULL,
    date_commande DATE NOT NULL,
    date_reg DATE, 
    montant_reg DOUBLE, 
    mode_paiement VARCHAR(100),
    id_client INT(11),
    PRIMARY KEY (id),
    CONSTRAINT FK_Commande_id_cli FOREIGN KEY (id_client) REFERENCES clients (id) 
) ENGINE=InnoDB;


-- Création de la table: contenir
DROP TABLE IF EXISTS contenir ;
CREATE TABLE contenir (
    id_commande int(11) NOT NULL,
    id_produit INT(11) NOT NULL,
    quantite INT(11) NOT NULL,
    PRIMARY KEY (id_commande,id_produit),
    CONSTRAINT FK_contenir_id_commande FOREIGN KEY (id_commande) REFERENCES commandes (id),
    CONSTRAINT FK_contenir_id_produit FOREIGN KEY (id_produit) REFERENCES produits (id) 
) ENGINE=InnoDB;

DROP TABLE IF EXISTS users ;
CREATE TABLE users (
    id int(11)  AUTO_INCREMENT NOT NULL,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB;


-- INSERTION DES DONNEES 
-- Table: marques
INSERT INTO marques(nom, description) VALUES('Apple', 'Apple : Un esprit unique et des produits inimitables. L''alliance de la performance, de l''esthétisme et de l''ergonomie !   Apple est souvent associé à son charismatique co-fondateur : Steve Jobs. Directif et exigeant, il a su superviser et créer les tablettes tactiles, les ordinateurs et les smartphones les plus novateurs. Il est aussi à l''origine d''un nouveau modèle économique : Celui de la vente de musique en ligne propulsant ainsi les ventes de ses baladeurs numériques iPod à des sommets inimaginables. Désormais Apple propose une large gamme de tablettes tactile avec les iPad, iPad mini et ce dans de multiples version afin de coller à l''utilisation que vous voudrez bien en faire. ');
INSERT INTO marques(nom, description) VALUES('Samsung', 'Samsung : le multi spécialiste Samsung est un des premiers groupes industriels coréens, axé sur la recherche et la commercialisation de produits de télécommunication. Téléphones portables, écrans LCD, mais aussi électroménager : Samsung se classe premier sur le marché français des micro-ondes. Samsung est aussi très présent dans le secteur des appareils photo numériques dédiés au grand public.  Désormais, Samsung, ce sont des appareils électroménagers, du matériel informatique, des équipements ayant trait à l’image, au son, mais aussi des téléphones portables avec des modèles ultra performants qui font la fierté de la marque et de ceux qui ont fait l''achat d''un téléphone mobile et portable Samsung. ');
INSERT INTO marques(nom, description) VALUES('Dell', 'Le meilleur de l''informatique avec Dell!   Depuis sa création en 1984 jusqu''à ce jour, Dell est resté fidèle à son coeur de métier : la fabrication d''ordinateurs et de périphériques. Entreprise Américaine spécialisée dans la vente de produits informatiques destinés aux particuliers et aux professionnels, son créateur Michael Dell s''oriente tout d''abord vers les microordinateurs à bas prix. Il trouve par la suite une solution innovante pour vendre son matériel en procèdant à un assemblage personnalisé de ses ordinateurs. C''est à partir de là que vint l''idée de fabriquer et de vendre des modèles sur mesure pour les consommateurs avec une stratégie marketing ciblée sur les besoins du client. ');
INSERT INTO marques(nom, description) VALUES('Lenovo', 'Lenovo : La fiabilité, les performances et les prix avant tout ! Créé en Chine en 1984 par Liu Chuanzhi, sous le nom de Legend Group Limited, Lenovo est un fabricant d’ordinateurs, de tablettes, de téléphones est de télévisions connectées. Après avoir racheté une division d''IBM en 2005 et Medio AG en 2011, Lenovo frôle la 1ère place mondiale des constructeurs de PC en 2012. La marque élargit rapidement son champ de production, allant des ordinateurs portables aux smartphones, en devenant le spécialiste des nouvelles technologies et le fabricant de l''un des ordinateurs portables les plus connus dans le monde : le ThinkPad.');



-- Table: Categories
INSERT INTO categories(titre, description) VALUES('Ordinateur Portable', 'Cette catégorie liste l''ensembles de ordinateurs portables revendus par l''entreprise');
INSERT INTO categories(titre, description) VALUES('Téléphone', 'Cette catégorie liste l''ensembles de téléphones revendus par l''entreprise');
INSERT INTO categories(titre, description) VALUES('Ecran', 'Cette catégorie liste l''ensembles de écrans LED revendus par l''entreprise');
INSERT INTO categories(titre, description) VALUES('Autre', 'Cette catégorie liste l''ensembles des autres outils non repertoriés et revendus par l''entreprise');


-- Table: Pays
INSERT INTO pays(id, nom) VALUES('FR', 'France');
INSERT INTO pays(id, nom) VALUES('GN', 'Guinée');
INSERT INTO pays(id, nom) VALUES('BI', 'Burundi');
INSERT INTO pays(id, nom) VALUES('US', 'Etats-unis');
INSERT INTO pays(id, nom) VALUES('RU', 'Russie');
INSERT INTO pays(id, nom) VALUES('BE', 'Belgique');
INSERT INTO pays(id, nom) VALUES('LU', 'Luxembourg');
INSERT INTO pays(id, nom) VALUES('GE', 'Allemagne');


-- Table: Fornisseurs
INSERT INTO fournisseurs(nom, email, telfixe, adresse, cp, ville, id_pays)
VALUES ('BigBuy', 'contact@bigbuy.com', '+33425378954', '42 Rue de l''impasse','75013', 'Marseille', 'FR');
INSERT INTO fournisseurs(nom, email, telfixe, adresse, cp, ville, id_pays)
VALUES ('EMTRION GMBH', 'mail@emtrion.de', '+49 721 62 72 50', 'Alter Schlachthof 45','76131' ,'Karlsruhe', 'GE');
INSERT INTO fournisseurs(nom, email, telfixe, adresse, cp, ville, id_pays)
VALUES ('Abakus', 'contact@abacus.be', '+32 87 59 35 50', 'Euregiostrasse 8 ', '4700', 'Eupen', 'BE');
INSERT INTO fournisseurs(nom, email, telfixe, adresse, cp, ville, id_pays)
VALUES ('Acces Infoservices', 'contact@accesinfoservices.lu', '+352 24 55 98 56', 'Rue de l''Alzette 142',' 4010', 'Esch-Sur-Alzette', 'LU');


-- Table: Clients
INSERT INTO clients(nom, prenom, email, mdp, id_pays)
VALUES ('Diallo', 'Souleymane', 'souleymane@hotmail.fr', 'Soul6174','FR');

INSERT INTO clients(nom, prenom, email, mdp, adresse, cp, ville, id_pays)
VALUES ('Iradukunda', 'Leilla', 'liradunka@gmail.com', 'lira412A', 'Route RUMONGE avenue MWEZI GISABO No. 110','BP-1095', 'Bujumbura', 'BI');

INSERT INTO clients(nom, prenom, email, mdp, adresse, cp, ville, id_pays)
VALUES ('Camara', 'Sidiki', 'sidiki.camara@gmailcom', 'cams@174', '27 Avenue de Kaloum','BP-4184', 'Conakry', 'GN');

INSERT INTO clients(nom, prenom, email, mdp, id_pays)
VALUES ('Tielmans', 'Jean Pierre', 'jtielmans28@gmail.com', 'jptmans42','FR');

INSERT INTO clients(nom, prenom, email, mdp, id_pays)
VALUES ('Keita', 'Mohamed', 'keitamohamed1998@yahoo.fr', 'keitamansa63','BE');

INSERT INTO clients(nom, prenom, email, mdp, id_pays)
VALUES ('Azarov', 'Marina', 'azmarmilatov@yahoo.fr', 'maraz42ru','RU');

INSERT INTO clients(nom, prenom, email, mdp, id_pays)
VALUES ('Giselbert', 'Catherine', 'kathgiselbert@hotmail.fr', 'Katharina106', 'LU');

INSERT INTO clients(nom, prenom, email, mdp, id_pays)
VALUES ('Krause', 'Francois', 'krause.francois@wanadoo.fr', 'maraz42ru','GE');

INSERT INTO clients(nom, prenom, email, mdp, adresse, cp, ville, id_pays)
VALUES ('Smith', 'John', 'john.smith@societe.com', 'jsmedina22', 'Medina Road Suite 120','4020', 'Columbus', 'US');

INSERT INTO clients(nom, prenom, email, mdp, adresse, cp, ville, id_pays)
VALUES ('Froussard', 'Matthieu', 'frispaleman@gmail.com', 'fratthie12', '48 Cité du corail','53002', 'Laval', 'FR');


-- Table: Produits
INSERT INTO produits (designation, description, prix, id_marque, id_categorie, id_fournisseur)
VALUES ('Samsung Galaxy S10 128 go Noir - Double sim', 
        'Taille de la diagonale : 6.1"; Résolution du capteur : 12 mégapixels; Capacité : 3400 mAh; Capacité de la mémoire interne : 128 Go; 8 coeurs; RAM : 8 Go - LPDDR4X SDRAM; Génération à haut débit mobile : 4G; Protection : Verre Corning Gorilla 6 (verre résistant aux rayures)', 
        649.00, 2, 2, 4);

INSERT INTO produits (designation, description, prix, id_marque, id_categorie, id_fournisseur)
VALUES ('APPLE iPhone 11 Blanc 128 Go', 
        'Taille de la diagonale : 6.1";Résolution du capteur : 12 mégapixels;Capacité de la mémoire interne : 128 Go;6 coeurs;Génération à haut débit mobile : 4G;Protection : Revêtement oléophobe antitrace ;Système d''exploitation : iOS 13;Fonctions : Téléphone à haut parleur, commande vocale, communication...', 
        839.99, 1, 2, 1);

INSERT INTO produits (designation, description, prix,prix_promo, id_marque, id_categorie, id_fournisseur)
VALUES ('LENOVO Ideapad 330', 
        'Usage : Basique & Bureautique;Processeur : AMD A4 9125 / 2.3 GHz;RAM : 4 Go (1 x 4 Go);Résolution : 1600 x 900 (HD+);Fonctions : Anti-éblouissement;Stockage principal : 1 To HDD SATA 6Gb/s / 5400 tours/min;Processeur graphique : AMD Radeon R3;Durée de fonctionnement : Jusqu''à 6 heures ;Garantie : 2 ans - pièces, main d''œuvre et déplacement;Système d''exploitation : Windows 10 Edition Familiale 64 bits - FR', 
        370.00, 299.99, 4, 1, 2);


-- Table: Commandes
INSERT INTO commandes (id_client, date_commande, date_reg, montant_reg, mode_paiement) 
VALUES (2, '2020-01-31', '2020-01-31', 2519.97, 'Carte Bancaire');
INSERT INTO commandes (id_client, date_commande) VALUES (4, '2020-04-02');
INSERT INTO commandes (id_client, date_commande) VALUES (1, '2020-04-02');
INSERT INTO commandes (id_client, date_commande) VALUES (7, '2020-04-02');


-- Table: Contenir
INSERT INTO contenir (id_commande, id_produit, quantite) VALUES (1, 1, 3);
INSERT INTO contenir (id_commande, id_produit, quantite) VALUES (2, 1, 1);
INSERT INTO contenir (id_commande, id_produit, quantite) VALUES (3, 1, 1);
INSERT INTO contenir (id_commande, id_produit, quantite) VALUES (4, 1, 1);

-- Table: Users
INSERT INTO users (username, password) 
VALUES('demo', '89e495e7941cf9e40e6980d14a16bf023ccd4c91');
