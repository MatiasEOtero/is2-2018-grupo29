### Para que funcione:

##Base de datos:

* Crear base de datos vacia.
* cp .env.example .env (nombre, usuario y clave base de datos)
* Editar .env

##Artisan (Carpeta Proyecto):

* php artisan make:seeder UsuariosTableSeeder
* php artisan make:model Usuario -mc
* php artisan migrate:refresh --seed
* php artisan make:request UsuarioRequest

##No olvidar:

* compose update
* composer require "laravelcollective/html":"^5.4.0"