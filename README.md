# Projects managment system version 2

## How to start the project:
1. Do git a clone code where you can launch php web app (webroot)
2. Import the mysql dump file
3. Go to local host
4. Now the project should be working well! 

1. Open command line and go to the webroot where you will launch this repository
2.  Do git a clone code where you can launch php web app
3. Download Composer (if needed) 
``php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"``
4. ``php composer.phar init``
5. ``php composer.phar require doctrine/orm``
6. In ``index.php`` file change variable ``$prefix`` to name of the current directory where the folder is located.
7. In ``composer.json`` add this line 
``,
    "autoload": {
            "psr-4": { 
                "Models\\": "src/models/"
            }
        }``
8. ``vendor/bin/doctrine orm:schema-tool:update --force --dump-sql``
9. Open project in localhost in the browser

## Technology:
- PHP
- CRUD
- ORM
- Composer
- MVC

## Features:
- view Employees table (employee's id, name and assigned project)
- view Projects table (project's id, name and assigned employees) (only projects with at least one assigned person is visible)
- create a new employee
- delete an employee
- update employee's name and project (current employee's ID is visible)
- add a new project
- delete a project
- update an existing project's name (new project is visible when updating an employee and assigning them a project)

## Author
[Vilija](https://github.com/vikontrimaite)