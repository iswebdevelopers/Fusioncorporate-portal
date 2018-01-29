# Fusioncorporate-portal
corporate website and portal

## Installation
Deployment as new instance:

- Git clone the repository from git hub link provided
- Go into the portal folder and rename  file named .env.example to .env change the values 
- Run composer update
- Run php artisan key:generate
- Run  php artisan cache:clear
- Run  php artisan cache:clear

## Dependencies
Organisation Api - https://github.com/Gauthamram/fusionAPI.

The portal also uses a separate database to store user printer settings and user labels and jobs etc.
