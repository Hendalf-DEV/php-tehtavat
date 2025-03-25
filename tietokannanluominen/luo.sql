CREATE DATABASE IF NOT EXISTS Autokanta;

CREATE TABLE IF NOT EXISTS Autokanta.Henkilo (
                         hetu char(11) PRIMARY KEY,
                         nimi varchar(50),
                         osoite varchar(100),
                         puhelinnumero varchar(20)
);
CREATE TABLE IF NOT EXISTS Autokanta.Auto (
                      rekisterinro char(7) PRIMARY KEY,
                      vari varchar(30),
                      vuosimalli int,
                      omistaja char(11),
                      FOREIGN KEY (omistaja) REFERENCES Henkilo(hetu)
);


CREATE TABLE IF NOT EXISTS Autokanta.Sakko (
                       id INT PRIMARY KEY AUTO_INCREMENT,
                       auto CHAR(7),
                       henkilo char(11),
                       pvm date,
                       summa double,
                       syy varchar(200),
                       FOREIGN KEY (auto) REFERENCES Auto(rekisterinro),
                       FOREIGN KEY (henkilo) REFERENCES Henkilo(hetu)
)