# Fusioncorporate-portal
corporate website and portal

## Installation
Deployment as new instance:

- Git clone the repository from git hub link provided
- Go into the portal folder and rename  file named .env.example to .env change the values 
- Run composer install/update
- Run php artisan key:generate
- Run  php artisan cache:clear
- Run  php artisan cache:clear

## Dependencies
- Organisation Api - https://github.com/Gauthamram/fusionAPI.
- Print Client - https://qz.io/ (Refer Docs - sample Js provided to get started and customise as required)

## Label Generation
- Without setting the printer values, no label will be generated.
- Install print client - Download
- Start the installed client
- Go to settings page and set the values. If you have problem figuring out the values, send this ~WC to the printer and this will tell the printer to print a Configuration Label which will give you all the details required.
- Make sure the settings are same in the printer as well
