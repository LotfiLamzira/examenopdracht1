# eindopdracht (deel 4) - opdracht 5

## opdracht

Deze week ga je verder aan de slag met je database. Kopieer alle bestanden van vorige week en plaats ze in deze map.

Maak in deze map ook de volgende zaken aan:

 - een map genaamd Data.
 - een bestand genaamd databaseConnection.php (zie les)

Schrijf in databaseConnection.php een GetData functie. Schrijf voor alle data die je wilt opvragen uit je databank een SQL query en plaats elk van deze queries in een aparte functie.

Maak voor elke query een DTO aan.

Maak een klasse aan die deze DTO's omzet naar je domein objecten.

---

## peer review opdracht 4

Ga naar de issues tab van het project dat jij moet reviewen. Maak een nieuw issue aan genaamd "opdracht 3 peer review". Maak daarin volgende tabel opnieuw na* en vul deze in.

\* je kan zo'n tabel met [html](https://www.w3schools.com/html/html_tables.asp) maken of met [github markdown](https://help.github.com/en/github/writing-on-github/organizing-information-with-tables).

| vraag | commentaar |
| --- | --- |
| Is er een DTO aangemaakt voor elke template? |  |
| Zijn alle DTO's volledig? |  |
| Werkt elke template? |  |
| Kunnen sommige templates worden samengevoegd? |  |

---

## Evaluatie Dagelijks Werk

Deze week ga je je databank verbinden met je applicatie en de queries uitschrijven die je applicatie zal gebruiken. Voor elke query zal je ook een DTO moeten aanmaken. De beoordeling gebeurt dus op basis van deze queries en objecten.

De rubric hieronder toont hoe je zult geëvalueerd worden. 

| Doelstelling | A | B | C | D | E |
| --- | --- | --- | --- | --- | --- |
|	Programmeerattitude: Coding Guidelines	|	Je indentatie, naamgeving en commentaar is correct en duidelijk. Je hebt ook duidelijke commentaar toegevoegd op plaatsen waar je code moeilijker te begrijpen.	|	Je indentatie is correct en de namen die je koos voor de verschillende elementen zijn duidelijk. Je hebt commentaar toegevoegd op de plaatsen waar dit verplicht is volgens de coding guidelines.	|	De commentaar die je schrijft is onvoldoende uitgewerkt. De naamgeving van elementen is duidelijk en je indentatie is correct.	|	De namen die je kiest voor de verschillende elementen zijn niet duidelijk genoeg. Je indentatie is correct en je hebt commentaar toegevoegd op de plaatsen waar dit verplicht is volgens de coding guidelines. 	|	Je indentatie, naamgeving en commentaar zijn onduidelijk en onvoldoende uitgewerkt.	|														
|	Foutopsporing: syntax- en runtimefouten	|	Je hebt de meeste syntax- en runtimefouten gevonden en verklaard, en kan er ook een oplossing voor geven.	|	Je hebt de meeste runtime-fouten gevonden en verklaard, en kan er ook een oplossing voor geven. Je hebt slechts weinig syntax fouten gevonden.	|	Je hebt de meeste syntax-fouten gevonden en verklaard, en kan er ook een oplossing voor geven. Je hebt slechts weinig runtime fouten gevonden.	|	Je hebt weinig fouten gevonden. Je kan de fouten die je vond wel verklaren, maar je biedt weinig oplossingen hiervoor.	|	Je hebt weinig fouten gevonden. De fouten die je vond kan je niet verklaren of oplossen.	|														
|	Programmeren: Codeblokken (iteratie)	|	Je past iteratie toe op de juiste plaats met de juiste voorwaarde en iterator en maakt correct het onderscheid tussen variabelen binnen en buiten de iteratie, waarbij je een optimale oplossing gebruikt voor het probleem.	|	Je past iteratie toe op de juiste plaats met de juiste voorwaarde en iterator en maakt correct het onderscheid tussen variabelen binnen en buiten de iteratie, maar er zijn oplossingen die veel korter of sneller zijn.	|	Je past iteratie toe op de juiste plaats met de juiste voorwaarde en maakt correct het onderscheid tussen variabelen binnen en buiten de iteratie, maar gebruikt de iterator niet wanneer dit nodig is.	|	Je past iteratie toe op de juiste plaats met de juiste voorwaarde, maar gebruikt de iterator niet wanneer dit nodig is en begrijpt niet wat het verschil is tussen een variabele die voor, tijdens en na de iteratie wordt aangemaakt.	|	Iteraties worden niet gebruikt waar nodig. Wanneer je een selectie gebruikt is de voorwaarde niet juist.	|														
|	Programmeren: Arrays	|	Arrays worden correct aangemaakt en het opvragen, invoegen, verwijderen en aanpassen van elementen gebeurt op de juiste wijze. 	|	Arrays worden correct aangemaakt en het opvragen, invoegen en aanpassen van elementen gebeurt op de juiste wijze. Het verwijderen van elementen wordt echter niet op de juiste manier gedaan.	|	Arrays worden correct aangemaakt en het opvragen en aanpassen van elementen gebeurt op de juiste wijze. Het invoegen en verwijderen van elementen wordt echter niet op de juiste manier gedaan.	|	Arrays worden correct aangemaakt en het opvragen van elementen gebeurt op de juiste wijze. Het invoegen, aanpassen en verwijderen van elementen wordt echter niet op de juiste manier gedaan.	|	Arrays worden op de verkeerde manier aangemaakt. Het opvragen, invoegen en verwijderen van elementen gebeurt niet op de correcte wijze.	|														
|	Webontwikkeling: dynamische websites	|	GET waardes werden correct doorgegeven en opgevangen op verschillende pagina's. URL parameters worden correct gebruikt. POST en SESSION waardes werden gebruikt waar nodig. Sessions werden correct geinitialiseerd. 	|	GET waardes werden correct doorgegeven en opgevangen op verschillende pagina's. URL parameters worden correct gebruikt. POST waardes werden gebruikt in plaats van GET waardes waar nodig. SESSION waardes werden niet of verkeerd doorgegeven tussen pagina's. Sessions werden niet geinitialiseerd. 	|	GET waardes werden correct doorgegeven en opgevangen op verschillende pagina's. URL parameters worden correct gebruikt. POST en SESSION waardes werden niet of verkeerd doorgegeven tussen pagina's. Sessions werden niet geinitialiseerd. 	|	GET waardes werden correct doorgegeven naar verschillende pagina's. POST en SESSION waardes werden niet of verkeerd doorgegeven tussen pagina's. Sessions werden niet geinitialiseerd. URL parameters worden verkeerd gebruikt.	|	GET, POST en SESSION waardes werden niet of verkeerd doorgegeven tussen pagina's. Sessions werden niet geinitialiseerd. URL parameters worden verkeerd gebruikt.	|														
|	Queries	|	De projectie, brontabel en selectie is correct geimplementeerd voor de hoofd- en subqueries.	|	De projectie, brontabel en selectie is correct geimplementeerd. Er werd geen gebruik gemaakt van subqueries waar nodig.	|	De projectie is correct geimplementeerd. De brontabel werd correct aangeduid voor queries uit meerdere brontabellen. De selectie is niet correct geimplementeerd.	|	De projectie is correct geimplementeerd. De brontabel werd correct aangeduid voor queries uit één brontabel. De selectie is niet correct geimplementeerd.	|	De projectie, brontabel en selectie van queries zijn verkeerd geimplementeerd.	|														