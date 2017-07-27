#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------

CREATE TABLE Clients(
        id_clients          int (11) Auto_increment  NOT NULL ,
        login_clients       Varchar (50) ,
        nom_clients         Varchar (50) ,
        prenom_clients      Varchar (50) ,
        pass_clients        Varchar (250) ,
        mail_clients        Varchar (50) ,
        tel_clients         Varchar (10) ,
        adresse_clients     Varchar (100) ,
        cp_clients          Varchar (5) ,
        ville_clients       Varchar (50) ,
        avis_clients        Int ,
        nombre_avis_clients Int ,
        PRIMARY KEY (id_clients )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Admin
#------------------------------------------------------------

CREATE TABLE Admin(
        id_admin     int (11) Auto_increment  NOT NULL ,
        login_admin  Varchar (30) ,
        nom_admin    Varchar (30) ,
        prenom_admin Varchar (30) ,
        pass_admin   Varchar (250) ,
        id_modif     Int ,
        PRIMARY KEY (id_admin )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: produit_vente
#------------------------------------------------------------

CREATE TABLE produit_vente(
        id_prodV          int (11) Auto_increment  NOT NULL ,
        nom_prodV         Varchar (60) ,
        description_prodV Text ,
        prix_prodV        Float ,
        image             Varchar (100) ,
        date_prodV        Date ,
        valid_prodV       Bool ,
        vendu_prodV       Bool ,
        id_panier         Int ,
        id_clients        Int NOT NULL ,
        id_admin          Int ,
        id_cat            Int ,
        PRIMARY KEY (id_prodV )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commande
#------------------------------------------------------------

CREATE TABLE Commande(
        id_commande             int (11) Auto_increment  NOT NULL ,
        prix_total_commande     Float ,
        choix_payement_commande Varchar (100) ,
        id_clients              Int NOT NULL ,
        id_livraison            Int ,
        id_panier               Int ,
        PRIMARY KEY (id_commande )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commentaire
#------------------------------------------------------------

CREATE TABLE Commentaire(
        id_comm           int (11) Auto_increment  NOT NULL ,
        sujet_comm        Varchar (50) ,
        texte_commentaire Text NOT NULL ,
        id_clients        Int NOT NULL ,
        id_admin          Int ,
        PRIMARY KEY (id_comm )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: panier
#------------------------------------------------------------

CREATE TABLE panier(
        id_panier          int (11) Auto_increment  NOT NULL ,
        Nombre_prod_panier Int ,
        total_prix_panier  Int ,
        id_commande        Int ,
        PRIMARY KEY (id_panier )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        id_cat  int (11) Auto_increment  NOT NULL ,
        nom_cat Varchar (50) ,
        PRIMARY KEY (id_cat )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Avis
#------------------------------------------------------------

CREATE TABLE Avis(
        id_avis         int (11) Auto_increment  NOT NULL ,
        note_avis       Int ,
        texte_avis      Text ,
        id_clients_avis Int ,
        id_clients      Int NOT NULL ,
        PRIMARY KEY (id_avis )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: livraison
#------------------------------------------------------------

CREATE TABLE livraison(
        id_livraison       int (11) Auto_increment  NOT NULL ,
        nom_livraison      Varchar (25) ,
        type_livraison     Varchar (25) ,
        payement_livraison Float ,
        PRIMARY KEY (id_livraison )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: modification
#------------------------------------------------------------

CREATE TABLE modification(
        id_modif int (11) Auto_increment  NOT NULL ,
        PRIMARY KEY (id_modif )
)ENGINE=InnoDB;

ALTER TABLE Admin ADD CONSTRAINT FK_Admin_id_modif FOREIGN KEY (id_modif) REFERENCES modification(id_modif);
ALTER TABLE produit_vente ADD CONSTRAINT FK_produit_vente_id_panier FOREIGN KEY (id_panier) REFERENCES panier(id_panier);
ALTER TABLE produit_vente ADD CONSTRAINT FK_produit_vente_id_clients FOREIGN KEY (id_clients) REFERENCES Clients(id_clients);
ALTER TABLE produit_vente ADD CONSTRAINT FK_produit_vente_id_admin FOREIGN KEY (id_admin) REFERENCES Admin(id_admin);
ALTER TABLE produit_vente ADD CONSTRAINT FK_produit_vente_id_cat FOREIGN KEY (id_cat) REFERENCES categories(id_cat);
ALTER TABLE Commande ADD CONSTRAINT FK_Commande_id_clients FOREIGN KEY (id_clients) REFERENCES Clients(id_clients);
ALTER TABLE Commande ADD CONSTRAINT FK_Commande_id_livraison FOREIGN KEY (id_livraison) REFERENCES livraison(id_livraison);
ALTER TABLE Commande ADD CONSTRAINT FK_Commande_id_panier FOREIGN KEY (id_panier) REFERENCES panier(id_panier);
ALTER TABLE Commentaire ADD CONSTRAINT FK_Commentaire_id_clients FOREIGN KEY (id_clients) REFERENCES Clients(id_clients);
ALTER TABLE Commentaire ADD CONSTRAINT FK_Commentaire_id_admin FOREIGN KEY (id_admin) REFERENCES Admin(id_admin);
ALTER TABLE panier ADD CONSTRAINT FK_panier_id_commande FOREIGN KEY (id_commande) REFERENCES Commande(id_commande);
ALTER TABLE Avis ADD CONSTRAINT FK_Avis_id_clients FOREIGN KEY (id_clients) REFERENCES Clients(id_clients);
ALTER TABLE `produit_vente` CHANGE `date_prodV` `date_prodV` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP;
INSERT INTO `livraison` (`id_livraison`, `nom_livraison`, `payement_livraison`) VALUES
(1, 'Chronopost', 8.5),
(2, 'Point Relais', 5),
(3, 'En main propre', 0);