CREATE DATABASE dmc;
USE dmc;


create table admin(
id_admin int auto_increment not null primary key,
username_admin varchar(45),
motpass_admin varchar(255), 
email_admin varchar(45),
role_admin varchar(45),
code_recup_admin varchar(255),
etat_admin varchar(45)
)engine=innodb;

CREATE TABLE point_de_vente(
id_point_vente int auto_increment not null primary key, 
titre_point_vente varchar(45), 
presentation_point_vente varchar(45), 
type_point_vente varchar(45), 
info_point_vente varchar(45), 
etat_point_vente varchar(45), 
id_admin int,
FOREIGN KEY (id_admin) REFERENCES admin (id_admin) on delete cascade on update cascade
)engine=innodb;



create table publication(
id_pub int auto_increment not null primary key,
titre_pub varchar(45) ,
categorie_pub varchar(45),
contenu_pub varchar(45) ,
etat_pub varchar(45) ,
date_pub date,
id_admin int,
FOREIGN KEY (id_admin) REFERENCES admin (id_admin) on delete cascade on update cascade
 )engine=innodb;

create table famille
(id_famille int auto_increment not null primary key,
titre_famille varchar(45),
image_famille varchar(255),
etat_famille varchar(45), 
id_admin int,
FOREIGN KEY (id_admin) REFERENCES admin (id_admin) on delete cascade on update cascade
)engine=innodb;

create table promotion
(id_promo int auto_increment not null primary key,
titre_promo varchar(45) ,
image_promo varchar(255) ,
date_deb_promo date ,
date_fin_promo date, 
etat_promo VARCHAR(45),
id_admin int,
FOREIGN KEY (id_admin) REFERENCES admin (id_admin) on delete cascade on update cascade

 )engine=INNODB;

create table client
(id_client int auto_increment not null primary key,
nom_client varchar(45) ,
prenom_client varchar(45) ,
email_client varchar(45) ,
adresse_client varchar(45) ,
catego_client varchar(45) ,
motpass_client varchar(255) ,
raison_social_client varchar(45), 
id_admin int,
FOREIGN KEY (id_admin) REFERENCES admin (id_admin) on delete cascade on update cascade
)engine=INNODB;

create table marque
(id_marque int auto_increment not null primary key,
titre_marque varchar(45),
image_marque varchar(255),
etat_marque varchar(45),
id_admin int,
FOREIGN KEY (id_admin) REFERENCES admin (id_admin) on delete cascade on update cascade
)engine=INNODB;

create table facture
(id_fact int auto_increment not null primary key,
date_fact date not null,
contenu_fact varchar(45) not null,
etat_fact varchar(15) not null,
id_client int not null,
id_admin int,
FOREIGN KEY (id_admin) REFERENCES admin (id_admin) on delete cascade on update cascade,

FOREIGN key (id_client) references client(id_client) on delete cascade on update cascade)
engine=INNODB;

create table produit
(id_prod int auto_increment not null primary key,
nom_prod varchar(45) not null,
desc_prod VARCHAR(255),
id_marque int ,
id_famille int ,
prix_detail_prod int, 
prix_gros_prod int, 
qnt_det_prod int, 
qnt_gros_prod int, 
caracteris_prod varchar(255), 
etat_prod varchar(45),
 id_admin int,
 id_client int,
FOREIGN key (id_client) references client(id_client) on delete cascade on update cascade,
FOREIGN key (id_marque) references marque(id_marque) on delete cascade on update cascade,
FOREIGN key (id_famille) references famille(id_famille) on delete cascade on update cascade)
engine=INNODB;


create table image(
id_imag int auto_increment not null primary key,
url_imag varchar(45) ,
id_prod int ,
id_point_vente int,
FOREIGN key (id_point_vente) references point_de_vente(id_point_vente ) on delete cascade on update cascade,
FOREIGN key (id_prod) references produit(id_prod) on delete cascade on update cascade)
engine=innodb;

create table promovoir
(id_promo int ,
id_prod int ,
FOREIGN key (id_promo) references promotion(id_promo) on delete cascade on update cascade,
FOREIGN key (id_prod) references produit(id_prod) on delete cascade on update cascade)
engine=innodb;

create table stocker
(id_point_vente int ,
id_prod int ,
FOREIGN key (id_point_vente) references point_de_vente(id_point_vente) on delete cascade on update cascade,
FOREIGN key (id_prod) references produit(id_prod) on delete cascade on update cascade)
engine=INNODB;

CREATE TABLE commander(
    date_comd DATE, 
    etat_comd VARCHAR(45), 
    qte_p_comd int, 
    id_client int, 
    id_prod int,
FOREIGN key (id_client) references client(id_client) on delete cascade on update cascade,
FOREIGN key (id_prod) references produit(id_prod) on delete cascade on update cascade)

engine=INNODB;

CREATE TABLE evaluer(
    date_ev DATE, 
    nbr_etoils_ev int, 
    id_prod int, 
    id_client int, 
FOREIGN key (id_client) references client(id_client) on delete cascade on update cascade,
FOREIGN key (id_prod) references produit(id_prod) on delete cascade on update cascade)

engine=INNODB;
 
