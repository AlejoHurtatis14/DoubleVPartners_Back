<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Docs Descarga de Proyecto

  - Ejecutar `composer i`
  - Copiar archivo .env con el comando `cp .env.example .env`
  - En el archivo .env configurar la conexión a la base de datos
  - Ejecutar el comando `php artisan migrate --seed` para crear las tablas y registros por defecto
  - Finalmente ejecutar `php artisan serve`
  - Ejecutar la url de `Obtener Todos los registros` de la sección `Docs Api`

### Docs Api

- Obtener Todos los registros

  `http://dominio/graphql?query={listAllTickets{id,usuario,estado,created_at,updated_at}}`

  Los campos a obtener se envian separados por "," (Ejemplo: id,usuario,estado,created_at,updated_at).

- Obtener registro en especifico

  `http://dominio/graphql?query={lisOneTicket(id:2){id,usuario,estado,created_at,updated_at}}`

  En este caso el "2" es el id del registro a obtener

- Crear un registro

  `http://dominio/graphql?query=mutation{create(usuario:"Nombre",estado:"Abierto"){id,usuario,estado,created_at,updated_at}}`

  Dentro del parentesis le pasamos los valores de acuerdo al tipo de datos y separados por comas ","

- Actualizar un registro

  `http://dominio/graphql?query=mutation{update(id:3,usuario:"Prueba",estado:"Cerrado"){id,usuario,estado,created_at,updated_at}}`

  Dentro del parentesis le pasamos los valores de acuerdo al tipo de dato y separados por comas "," y siempre debe ir el id para la api saber cual editara

- Eliminar un regsitro

  `http://dominio/graphql?query=mutation{delete(id:3)}`

  Le enviamos el id del registro a eliminar como parametro (Ejemplo: 3)
