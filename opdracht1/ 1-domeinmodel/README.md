# eindopdracht (deel 4) - opdracht 1

## opdracht domeinmodel

Plaats in deze map een afbeelding van je domeinmodel. Pas dit document aan, zodat je de volgende zaken hieronder toont:

 - omschrijving van je applicatie
 - gemeenschappelijke taal van je applicatie
 - afbeelding van het domeinmodel

Plaats in deze map ook alle uitgewerkte klassen van je domeinmodel in PHP. Eén klasse per .php bestand.


### omschrijving van de applicatie

Deze applicatie geeft leerlingen de mogelijkheid om hun lessenrooster te bekijken en leerkrachten om lessen, testen en taken daarop in te voeren. Een lessenrooster is een agenda waarin staat welke lessen, testen en taken je hebt en op welk moment deze vallen. Je kan deze app gebruiken om te plannen.

Op deze applicatie zijn er 2 soorten gebruikers: een leraar en een leerling. De leerling kan door zich in te loggen zijn eigen lessenrooster raadplegen om te zien welke lessen hij/zij heeft. In deze applicatie kan de leraar de lesonderwerpen invullen van de lessen die hij/zij geeft. Leerlingen kunnen voor zichzelf boodschappen toevoegen aan de lessen die ze volgen. De lessen, taken en testen worden weergegeven in een kalender-weergave, waarop de dag en het uur staan aangeduid. 

Bij het aanmaken van een les moet de leraar aangeven wat het lesonderwerp is, voor welk vak de les gegeven wordt, in welk lokaal de les doorgaat en welke klas zal deelnemen aan de les.

Wanneer een leerling zich registreert moet hij/zij aangeven van welke klas hij/zij deel uitmaakt.

### gemeenschappelijke taal

#### Concepten
 - applicatie: Een website waarop leerlingen en leraren zich kunnen registreren en inloggen om lessenroosters te raadplegen en aanpassen.
 - lessenrooster: Een lijst van momenten van een gebruiker.
 - leerkracht: De gebruiker die lessen, testen en taken kan toevoegen per vak en klas.
 - leerling: De gebruiker die lessen, testen en taken van zijn/haar klas kan raadplegen en boodschappen kan toevoegen per les.
 - les: Een moment dat bestaat uit een lesonderwerp en lokaal. 
 - taak: Een moment dat bestaat uit een onderwerp. Een taak kan eender wanneer gepland worden in de lessenrooster.
 - test: Een taak die gepland moet worden op hetzelfde moment als een les.
 - moment: Eén plaats in de lessenrooster dat bestaat uit een schooldag, lesuur, klas en vak.
 - gebruiker: Iemand die geregistreerd is op de applicatie.
 - boodschap: Een persoonlijke tekst die een leerling toevoegt aan een les.
 - kalender-weergave: De manier waarop een leerling zijn/haar lessen kan bekijken in de applicatie. Deze toont de lessenrooster van een gebruiker per week.
 - schooldag: Een datum die valt op een maandag, dinsdag, woensdag, donderdag of vrijdag. Een dag bevat verschillende lesuren.
 - lesuur: Een tijdsspanne dat bestaat uit een startuur, startminuut en duurtijd.
 - vak: een categorie om een moment in op te delen.
 - lesonderwerp: Een titel die een leerkracht geeft aan een les.
 - lokaal: Informatie over een locatie.
 - klas: De naam van een groep leerlingen.
 


#### Rules
 - Een taak kan op eender welk lesuur, eender welke schooldag gepland worden.
 - Een toets kan enkel op een lesuur gepland worden waar ook een les plaatsvindt van hetzelfde vak en dezelfde klas.
 - Een les kan op eender welk lesuur, eender welke schooldag gepland worden waar zich nog geen andere les van dezelfde leraar bevindt.
 - Een lesuur bestaat uit 50 minuten.
 - Een leerling kan geen taken, testen en lessen aanmaken.
 - Bij het registreren moet een gebruiker een e-mail adres opgeven.
 - Bij het registreren moet een leerling aanduiden bij welke klas hij/zij behoort.
 - Bij het aanmaken van een les moet een leerkracht de klas, het vak en het lesonderwerp meegeven.
 - Een leerling kan enkel de lessenrooster raadplegen van de klas waartoe hij/zij behoort.
 - Boodschappen die een leerling toevoegt aan een les zijn enkel zichtbaar voor de leerling zelf.

#### Actions
 - Een leerkracht maakt een nieuwe les aan
 - Een leerkracht maakt een nieuwe taak aan
 - Een leerkracht maakt een nieuwe test aan
 - Een leerling registreert zich
 - Een leerkracht registreert zich
 - Een gebruiker logt in
 - Een gebruiker logt uit
 - Een gebruiker opent de kalender-weergave
 - Een leerling voegt een boodschap toe aan een les
 - Een leerling wijzigt een boodschap
 - Een leerling verwijdert een boodschap
 - Een leerkracht verwijdert een les
 - Een leerkracht verwijdert een test
 - Een leerkracht verwijdert een taak
 - Een gebruiker toont de volgende week in de kalender-weergave
 - Een gebruiker toont de vorige week in de kalender-weergave
 - Een gebruiker toont de huidige week in de kalender-weergave
 - Een leerkracht wijzigt een les
 - Een leerkracht wijzigt een taak
 - Een leerkracht wijzigt een test

#### States
 - Een gebruiker is geregistreerd
 - Een gebruiker is ingelogd
 - Een moment is aangemaakt
 - De lessenrooster is leeg
 - Een moment is gewijzigd
 - Een moment is verwijderd
 - Een boodschap is toegevoegd aan een les
 - Een boodschap is gewijzigd
 - Een boodschap is verwijderd
 - De lessenrooster wordt getoond

### afbeelding domeinmodel

<img src="http://bin14.piustien.net/kerstexamen/Domeinmodel.jpg">
