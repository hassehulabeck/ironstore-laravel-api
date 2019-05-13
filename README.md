# En liten api i Laravel

## Ironstore

### En övning för FED18G@MI

Klona den, kör sedan 
```npm install``` 
och 
```composer install```
och 
kopiera filen `.env.example` till `.env`
och 
fyll i dina uppgifter.

Du kan också behöva generera en key till din Laravel-applikation
``` php artisan key:generate ```
(Normalt görs det automatiskt när du skapar ett projekt, men alltså inte när du klonar ett befintligt.)

Därefter är det bra att köra
```npm run watch``` 
eller 
```npm run dev```
för att få allt att ligga rätt (webpack-mässigt).
Sedan bör den gå att köra.

(Om du får massa problem med npm run dev/watch på Windows, så starta om. Det hjälpte mig vid relativt oförklarliga fel.)

### Databaskrav
I den här appen använder jag en databas som heter 
**products**
och som innehåller en table med samma namn.
Skapa därför en egen databas med det namnet 
och kör sedan 
```php artisan migrate```
för att skapa nödvändiga tabeller.
Kör sedan
```php artisan db:seed``` 
för att "befolka" databasen med lite värden.


### Innehåller Vue-komponent
Kika på 
```resources/js/components/ExampleComponent```
för att se hur en Vue-component kan samverka med Laravel.

### Intressanta adresser
* ```localhost``` Visar en komponent som hämtar en produkt med id:34. Ändra om du behöver.
* ```localhost/api/products``` Visar json-utskrift av alla produkter.
* ```localhost/api/products/{id}``` Visar produkten med detta id-nummer.

(Glöm inte att justera med ev port efter localhost, ex "localhost:8080")

Mycket nöje.