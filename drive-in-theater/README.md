# Autósmozi Laravel Projekt
Ez az alkalmazás egy Laravel-alapú rendszer, amely filmek és vetítések kezelését teszi lehetővé egy autósmozi számára.

## Követelmények
- PHP 8.2
- Composer
- Laravel 12
- MySQL
- Docker (ajánlott verzió: 28.0.1, build 068a01e)
- Docker Compose (ajánlott verzió: v2.33.1-desktop.1)

##Telepítés
1. Repository klónozása:
    ```git clone https://github.com/ozolee/drive-in-theater.git```
2. Konténerek indítása:
    ```docker-compose up --build```
3. Projekt mappán belül ".env.example" fájl másolása ".env" fájlra
4. ".env" fájlban adatbázis kapcsolat beállítása a következő értékekre:
   ```
   DB_CONNECTION=mysql
   DB_HOST=db
   DB_PORT=3306
   DB_DATABASE=autosmozi
   DB_USERNAME=user
   DB_PASSWORD=password
   ```
5. App konténerébe lépés:
    ```docker exec -it drive-in-theater bash```    
   1. "/etc/apache2/sites-available/000-default.conf" fájlban DocumentRoot módosítása erről:
      ```DocumentRoot /var/www/html```
      erre:
      ```DocumentRoot /var/www/html/public```
   2. ```service apache2 restart```
   3. 
   4. PHP Artisan parancsok futtatása a projekt gyökérkönyvtárában
      ```
      cd /var/www/html
      php artisan migrate --seed
      php artisan config:clear
      php artisan cache:clear
      php artisan route:clear
      ```
6. Postman hívások importálása a ```drive_in_theater_postman_collection.yml``` fájlból

##Futtatás
1. "http://localhost:8080"-as porton ellenőrizhető phpMyAdmin-al az adatbázis sikeres feltöltése és a postmanből történő POST/DELETE hívások eredményei is. Belépési adatok:
   ```
   Felhasználónév: user
   Jelszó: password
   ```
2. Postmanből hívásokat indítani a ```http://localhost:9000/api/``` útvonalra

