# Perustehtäviä
# SELECT * from city WHERE Population > 3000000;
# SELECT * from country WHERE Name LIKE 'A%';
# SELECT Name from country WHERE LocalName = 'Al-Bahrayn;
# SELECT Name, Continent, HeadOfState FROM country WHERE Continent = 'Africa' AND GovernmentForm = 'Republic';

# Yhteenveto-operaatiot
# SELECT MAX(Population) FROM country;
# SELECT AVG(LifeExpectancy) FROM country;
# SELECT Continent, COUNT(*) AS 'määrä' FROM country GROUP BY Continent;

# Haku useammasta taulusta
# SELECT Name, Language, IsOfficial FROM country INNER JOIN countrylanguage ON country.Code = countrylanguage.CountryCode ORDER BY Name ASC;
# SELECT city.Name, city.Population FROM city INNER JOIN country ON country.Code = city.CountryCode WHERE country.Name = 'Morocco';
# SELECT Name, Language, GovernmentForm FROM country INNER JOIN countrylanguage ON country.Code = countrylanguage.CountryCode WHERE GovernmentForm = 'Republic' AND Language = 'Spanish';

# Sekalaisia hakuja
# SELECT Continent AS 'Mantere', COALESCE(AVG(LifeExpectancy), 'Ei tietoa') AS 'Vanha_elinikä', COALESCE(AVG(LifeExpectancy) + 10, 'Ei tietoa') AS 'Uusi_elinikä' FROM country GROUP BY Continent;
# SELECT DISTINCT Language FROM countrylanguage WHERE Language LIKE 'E%' ORDER BY Language;
# SELECT city.Name FROM city INNER JOIN country ON city.ID = country.Capital WHERE country.Continent = 'Europe';
# SELECT Name, Language, Percentage from countrylanguage INNER JOIN country on countrylanguage.CountryCode = country.Code WHERE Continent = 'Africa' AND Percentage BETWEEN 0.1 AND 2
# SELECT Name from Country WHERE Region = 'Caribbean' AND SurfaceArea <= 500