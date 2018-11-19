# Adminello CMS

## About
A simple CMS project based on Laravel Framework for fast websites building.

## Start up
You need to have Componser installed on your machine.
You need to setup a local Apache environment to run PHP. 

1. Clone this repository:
```bash
git clone git@github.com:loparello/adminello.git
```

2. Go to your Adminello project folder and install Composer dependencies:
```bash
cd yourpath/adminello
composer install
```

3. Create a database on your local environment.
4. Create an .env file at the root of your Adminello project.
5. Copy the content of .env.example into .env.

6. In .env replace the constants DB_DATABASE, DB_USERNAME and DB_PASSWORD with respectivelly your local database name, your local database username and password. Save.

7. Generate a Laravel application key to secure sessions and encrypted data:
```bash
php artisan key:generate
```
This will automatically generate a key for the APP_KEY constant in the .env file.

8. Update your database by running:
```bash
php artisan migrate
```

The CMS is ready to run on your localhost.

NOTE: If you get errors when connecting to the database and running migrations, try to clear the configuration caches:
```bash
php artisan config:clear
```

