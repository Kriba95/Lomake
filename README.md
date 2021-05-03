Kuvaus
Tee seuraavan mallin mukainen lomake ja toteuta siihen lomakekenttien validointi JavaScriptillä:

Kaikki kentät paitsi Lisätietoja ovat pakollisia
Käyttäjä ID pitää olla vähintään 6 merkkiä pitkä
Postinumerossa pitää olla 5 numeroa
Sähköpostiosoitteen tulee olla sähköpostiosoitteen muotoinen


___________________________________________________________________________________________________________________

Tehtävä on yksinkertainen, mutta tälläkertaa tiedot eivät tallennu. Pieniä ongelmia ilmeni postinumerossa 
Yritin postinumero.length<5 || postinumero.length>5 ... ja 4-6 mutta se ei vaan toiminut, joten päädyin kompromissiin, lisäsin HTML:ään maxlength="5" ja se toimi.