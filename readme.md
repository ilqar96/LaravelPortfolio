# Laravel Project

## Clone your project

Go to the folder application using cd command on your cmd or terminal
Run **composer install** on your cmd or terminal
Copy **.env.example** file to **.env** on the root folder. 

You can type if using command prompt *Windows* 
```console
copy .env.example .env
```
<br/> if using *terminal,Ubuntu*
```console
cp .env.example .env
```
Open your **.env** file and change the database name (DB_DATABASE) to whatever you have, <br/>
username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

By default, the username is root and you can leave the password field empty. (This is for Xampp) <br/>
By default, the username is root and password is also root. (This is for Lamp) 

Run
```bash
php artisan key:generate
```
Run 
```bash
php artisan migrate
```
Run 
```bash
php artisan serve
```
Go to localhost:8000 

if you want run seeder first run 
```bash
composer dump-autoload -o
```
