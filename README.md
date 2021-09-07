# Fichero para control de errores 403 y 404 para PHP

Creando un fichero `.htaccess` y usando rutas **absolutas** se pueden controlar los típicos errores 403 y 404.

```apacheconf
Options All -Indexes
ErrorDocument 403 https://php-error-page-control.herokuapp.com/error/403.php
ErrorDocument 404 https://php-error-page-control.herokuapp.com/error/404.php
```

Este proyecto se encuentra en [https://php-error-page-control.herokuapp.com/](https://php-error-page-control.herokuapp.com/), usado como referencia de los siguientes ejemplos para exponer el error 403 y 404.

## Distribución del proyecto

```bash
./
│   .editorconfig
│   .gitignore
│   .htaccess
│   .prettierrc
│   index.php
│   package-lock.json
│   package.json
│   README.md
│
├───css
│       error-page.css
│
├───error
│       403.php
│       404.php
│
├───includes
│       meta-tag.php
│       navbar_social.php
│
├───pages
│       galeria.php
│       proyectos.php
│
└───scss
        error-page.scss
```

## Provocar el error 403 (prohibición de acceso)

Para provocar este error y ver la página de `Error 403` deberemos acceder a un directorio por medio de la URL, por ejemplo, la carpeta donde se alojan las páginas de errores.

[https://php-error-page-control.herokuapp.com/error](https://php-error-page-control.herokuapp.com/error)

Esto funciona con cualquier directorio del proyecto, aquí unos ejemplos.

- Carpeta `CSS`

  - [https://php-error-page-control.herokuapp.com/css](https://php-error-page-control.herokuapp.com/css)

- Carpeta `pages` (se encuentran las páginas principales del proyecto)

  - [https://php-error-page-control.herokuapp.com/pages](https://php-error-page-control.herokuapp.com/pages)

- Carpeta `includes` (contiene elementos comunes para las páginas `php`)

  - [https://php-error-page-control.herokuapp.com/includes](https://php-error-page-control.herokuapp.com/includes)

Esta funcionalidad también permite prohibir el acceso a ciertos ficheros por medio de la URL

- Fichero `.htaccess`

  - [https://php-error-page-control.herokuapp.com/.htaccess](https://php-error-page-control.herokuapp.com/.htaccess)

- Fichero `.editorconfig`

  - [https://php-error-page-control.herokuapp.com/.editorconfig](https://php-error-page-control.herokuapp.com/.editorconfig)

## Provocar el error 404 (página no encontrada)

Simplemente debemos colocar en la URL, ya sea desde la raíz o en dentro de otro directorio, un fichero que no exista en el proyecto.

- Página `holaMundo.php`

  - [https://php-error-page-control.herokuapp.com/holaMundo.php](https://php-error-page-control.herokuapp.com/holaMundo.php)
