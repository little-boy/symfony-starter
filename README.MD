# Symfony starter
The purpose of this project is to provide basic functionalities to
start an API project : 
- Handling controller usual response with FOS RestBundle
- Unit and functional testing with PHPUnit
- Code style with PHPCS (configured with PSR2)

## Installation (dev mode)
- composer install
- bin/console doctrine:database:create 
- bin/console doctrine:schema:update -f
- bin/console hautelook:fixtures:load -n
- bin/console s:start
- go to http://127.0.0.1:8000/api/recipes

After understanding the purpose of the different files created as example 
for the route /api/recipes, you can clean them with ```composer run-script clean```
This will remove all example files and reset config/services.yaml to its initial state.

## testing
- ```composer run-script test``` (careful, this command purge current database)