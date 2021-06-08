
CREATE DATABASE clicom_light;
DROP DATABASE clicom_light;
CREATE TABLE CLIENT(
    NCLI varchar(4) not null primary key,
    NOM varchar(40) not null,
    ADRESSE varchar(60),
    LOCALITE varchar(40) not null,
    CAT varchar(2),
    COMPTE numeric default 0
)ENGINE=InnoDB;

CREATE TABLE PRODUIT(
    NPRO varchar(5) not null Primary key,
    LIBELLE varchar(60) not null,
    PRIX numeric(15,2),
    QSTOCK Numeric
)ENGINE=InnoDB;

CREATE TABLE COMMANDE(
    NCOM Numeric not null,
    NCLI varchar(4) not null,
    DATECOM date,
    constraint PK_COM Primary key (NCOM),
    constraint FK_COMCLI foreign key (NCLI) references CLIENT(NCLI) on delete cascade
)ENGINE=InnoDB;


CREATE TABLE DETAIL(
    NCOM Numeric not null,
    NPRO varchar(5) not null,
    QCOM Numeric not null,
    constraint FK_DETAILCOM foreign key (NCOM) references COMMANDE(NCOM) on delete cascade,
    constraint FK_DETAILPRO foreign key (NPRO) references PRODUIT(NPRO) on delete cascade,
    constraint PK_DETAIL Primary key (NCOM, NPRO)
)ENGINE=InnoDB;