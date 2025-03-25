INSERT INTO Autokanta.Sakko (auto, henkilo, pvm, summa, syy)
VALUES ('CES-528', '281182-070W', '2012-01-02', 50, 'Virheellinen pysäköinti');

# DELETE FROM Autokanta.Henkilo WHERE hetu = '120760-093B';
# Ei onnistu koska henkilöllä on olemassa oleva auto tietokannassa.

UPDATE Autokanta.Henkilo
SET osoite = 'Mäkelänkatu 15'
WHERE hetu = '080173-169T';

UPDATE Autokanta.Auto
SET omistaja = '200292-195H'
WHERE rekisterinro = 'HUT-444';

INSERT INTO Autokanta.Auto (rekisterinro, vari, vuosimalli, omistaja)
VALUES ('DAU-781', 'musta', 2007, '080173-169T');

INSERT INTO Autokanta.Sakko (auto, henkilo, pvm, summa, syy)
VALUES ('DAU-781', '080173-169T', '2024-03-25', 120, 'Nopeusrajoituksen ylitys');
