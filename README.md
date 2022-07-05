# Práctica de como relacionar dos tablas en CRUD con LARAVEL
## Para este proyecto se utilizó

`composer create-project laravel/laravel:^8.0 library`</br>
`composer require laravel/ui`</br> 
`php artisan ui bootstrap --auth`</br>
`composer require ibex/crud-generator --dev`

Así mismo se utilizaron los comandos de artisan para crear controladores `php artisan make:controller`

La base de datos tiene el nombre de `library`, sin embargo, este se puede cambiar dentro del archivo `.env`
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=library
    DB_USERNAME=root
    DB_PASSWORD=

# Resultado
## Primer página: Login
<img width="960" alt="login" src="https://user-images.githubusercontent.com/49053045/177423393-9c29fde2-5b61-4521-8662-10bf34e83c4b.png">

## Segunda página: Registro
<img width="960" alt="register" src="https://user-images.githubusercontent.com/49053045/177424565-3f56607f-ad21-4a14-b1ba-f1c1870b8534.png">

## Tercer Página: Dashboard
<img width="960" alt="dashboard" src="https://user-images.githubusercontent.com/49053045/177424608-9b14bbc3-a9b0-4aa1-ae84-732eea68730a.png">

## Cuarta página: Listado de libros donde se incluye la categoría de estos
<img width="960" alt="libros" src="https://user-images.githubusercontent.com/49053045/177425023-f59c191c-976f-4e62-b12f-3d30ddaf6d8c.png">

## Quinta página: Categorías
<img width="960" alt="categorias" src="https://user-images.githubusercontent.com/49053045/177425101-e8dcedbb-186d-473f-b73f-da4b9a3e7071.png">

## Schema de la relación entre tablas
<img width="343" alt="relacion" src="https://user-images.githubusercontent.com/49053045/177425150-15bc8974-f89e-4f71-931d-3c52614bad75.png">

# Instalación de dependencias
## `npm install`
