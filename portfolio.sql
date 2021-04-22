Drop database if exists portfolio;
Create database portfolio;
Use portfolio;

Drop table if exists user;
Create table if not exists user (
	id_u int(11) not null auto_increment,
	pseudo varchar(50),
	mdp varchar(255),
	lvl int(11) not null default 0,
	Primary key (id_u)
) ENGINE=InnoDB;

Insert into user values
(1, "sontungpham", "107d348bff437c999a9ff192adcb78cb03b8ddc6", 1);

Drop table if exists categories;
Create table if not exists categories (
	id_cat int(11) not null auto_increment,
	titre varchar(100) UNIQUE,
	Primary key (id_cat)
) ENGINE=InnoDB;

Insert into categories values
(1, "Developpement d'application"),
(2, "Developpement web"),
(3, "Developpement desktop"),
(4, "Système"),
(5, "Réseaux");

Drop table if exists projets;
Create table if not exists projets (
	id_p int(11) not null auto_increment,
	titre varchar(100),
	description text,
	id_cat int(11),
	lien_local varchar(255),
	lien_git varchar(255),
	Primary key (id_p)
) ENGINE=InnoDB;

Drop table if exists images;
Create table if not exists images (
	id_img int(11) not null auto_increment,
	nom varchar(50),
	chemin varchar(255),
	Primary key (id_img)
) ENGINE=InnoDB;
