# a014-dh-project 
Finbile: Learning through data || Full-stack-dev-course's (DigitalHouse)

///////////////////////////////////
///
/// IMPORTANT: GENERATE THE FINBILE DATABASE RUNNING finbile_db-scrip.sql FILE
///
///////////////////////////////////


A) Website tree

/root
<br>- index.php
<br>--- search.php
<br>--- about
<br>----- about.php
<br>----- services.php
<br>----- legals.php
<br>---- let's fun
<br>------ challenges.php
<br>------ forum.php
<br>------ news.php
<br>------ shop.php
<br>--- sign-up.php
<br>--- sign-in.php
<br>------ my-account.php
<br>-------- trivia-play.php
<br>------ me.php
<br>------ logout.php

B) Back-end

/admin
<br>-- autoload.php
<br>-- config.php
	//classes
	<br>-- class-Auth.php
	<br>-- class-DB.php
	<br>-- class-DBJson-Subscribers.php
	<br>-- class-DBJson.php
	<br>-- class-DBMsql.php
	<br>-- class-ForgotPwdFormValidator.php
	<br>-- class-FormValidator.php
	<br>-- class-RenewPwdFormValidator.php
	<br>-- class-SaveImage.php
	<br>-- class-SignUpFormValidator.php
	<br>-- class-SignInFormValidator.php
	<br>-- class-SubscribeFormValidator.php
	<br>-- class-User.php
	<br>-- model-Answers.php
	<br>-- model-Categories.php
	<br>-- model-Countries.php
	<br>-- model-Question.php
	<br>-- model-QuestionAnswer.php
	<br>-- model-Ranking.php
	<br>-- model-Trivias.php
	<br>-- model-TriviaUser.php
	<br>-- model-Users.php

	//content
		//files
		//images
			//banners
		<br>-- finbile-favicon.png
		<br>-- finbile-logo.png
	//css
	<br>-- bootstrap.css
	<br>-- bootstrap.min.css
	<br>-- normalize.css
	<br>-- styles.css
	//data
	<br>-- user.json	
	<br>-- subscriber.json	
		//avtars
	//js
	<br>-- bootstrap.js
	<br>-- bootstrap.min.js
	<br>-- jquery-3.3.1.min.js

/includes
<br>-- head.php
<br>-- body-header.php
<br>-- body-nav.php
<br>-- body-aside.php
<br>-- body-footer.php
<br>-- signup-form.php
<br>-- signin-form.php
<br>-- forgotpwd-form.php
<br>-- renewpwd-form.php
<br>-- contact-form.php

url: external links
<br>- Facebook
<br>- Twitter
<br>- Linkedin
<br>- Instagram
<br>- Slack


C) Sprints


<br>Sprint # 1 - Fecha de entrega: Viernes 31/08/18

<br>1) un inicio que hable acerca sobre la plataforma digital -> OK
<br>2) dos formularios que permitan registrarse y loguearse -> OK
<br>3) una sección de preguntas frecuentes acerca de nuestros servicios ofrecidos -> OK
<br>4) una sección de perfil de usuario al loguearse -> OK
<br>5) una sección que liste los productos con detalles -> OK
<br>6) una sección que muestre sus posteos (time line) y listado de sus amigos -> OK
<br>7) una sección de backend (admin) que liste las preguntas del juego -> NO OK
<br>8) una sección de ranking de usuarios jugadores -> NO OK


<br>Sprint # 2 - Entrega Martes 02 de Octubre

<br>9) 100% funcional el sistema de registro y logueo usando JSON -> OK
<br>10) que los formularios persistan-> OK
<br>11) que los formularios validen existencia de usuario (email/nombre) -> OK
<br>12) estando logueado, no puede acceder a los formularios y web recuerde logueo -> OK
<br>13) si el usuario olvidó su contraseña, existe manera de cambiarla -> NO OK


<br>Sprint # 3 - PHP + MySQL + OOP -  Fecha de entrega VIERNES 02/11/18

<br>14) El cliente pide que el código esté organizado bajo el paradigma de Programación Orientado a Objetos para mejorar el flujo de la aplicación. Disclaimer: NO se debe generar una versión distinta del sitio actual con el que vienen trabajando, lo único que se deberá cambiar es el flujo que maneja el registro y logueo de usuarios. Pasarlo de funciones a objetos.
<br>15) El cliente pide migrar nuestro sistema, a uno que soporte base de datos MySQL.
<br>16) El cliente pide que haya un script php que migre todos los usuarios existentes en el archivo JSON a la base de datos MySql la primer vez que se ingrese al sitio. (Este proceso de migración NO NECESARIAMENTE TIENE QUE HACERSE en OOP)
<br>17) El cliente pide tener en consideración que así como el código de ahora en más funcionará con una base de datos MySQL, gustaría que el sitio, cuente con una versión de backup que esté preparada para cambiar el tipo de base de datos. Por ejemplo, si quisiéramos volver a JSON se debería poder lograr fácilmente.
<br> El repo del sistema de películas https://github.com/javi-dh/movies-oop


<br> Commentarios a la version 3:
<br> no hay nivel de dificultad seteado en las preguntas
<br> contiene una unica entidad de comparacion
<br> poblacion es la unica variable
<br> 2015 es el unico anho de data
<br> no se esta guardando la source database (ie banco munidal) en categorias



<br>Sprint # 4 - 

<br>18) 


*Como manejar los archivos de configuración del proyecto en GIT:*
Digamos que el archivo que ya commiteamos está en /includes/config.php
1) Renombramos el archivo
`git mv /includes/config.php /includes/config.php.example`
2) Creamos el archivo .gitignore con el siguiente contenido
`/includes/config.php`
3) Ejecutamos git commit / git push (edited)

https://git-scm.com/docs/gitignore

Prepared SQL Statement Syntax
https://dev.mysql.com/doc/refman/8.0/en/sql-syntax-prepared-statements.html


LARAVEL
Laravel - The PHP framework for web artisans.
https://laravel.com/

Laracasts: Laravel 5.4 From Scratch
https://laracasts.com/series/laravel-from-scratch-2017
Each year, the Laracasts "Laravel From Scratch" series is refreshed to reflect the latest iteration of the framework. This is the 2017 edition, which uses version 5.4 of the framework. Are you hoping to level up your toolset? You've come to the right place. This series will take you from installing Laravel, all the way up to mastering the essentials of the framework.

Rutas sugeridas por Laravel para los diferentes métodos del CRUD (Create Read Update Delete)
https://laravel.com/docs/5.4/controllers#resource-controllers
Controllers - Laravel - The PHP Framework For Web Artisans
Laravel - The PHP framework for web artisans.
Actions Handled By Resource Controller
Verb     URI     Action     Route Name
GET     /photos     index     photos.index
GET     /photos/create     create     photos.create
POST     /photos     store     photos.store
GET     /photos/{photo}     show     photos.show
GET     /photos/{photo}/edit     edit     photos.edit
PUT/PATCH     /photos/{photo}     update     photos.update
DELETE     /photos/{photo}     destroy     photos.destroy

Crear controler
`php artisan make:controller nombredelController -r`

Clonan el repo y por consola tiran este comando `composer install`
https://github.com/javi-dh/1erLaravel.git
https://github.com/javi-dh/moviesSite
javi-dh/moviesSite


Validación de formularios en Laravel:
https://laravel.com/docs/5.7/validation
Validation - Laravel - The PHP Framework For Web Artisans

Laravel Cheat Sheet - mega cheatsheet:
https://laravel.gen.tr/cheatsheet/

Actions Handled By Resource Controller
Verb     URI     Action     Route Name
GET     /photos     index     photos.index
GET     /photos/create     create     photos.create
POST     /photos     store     photos.store
GET     /photos/{photo}     show     photos.show
GET     /photos/{photo}/edit     edit     photos.edit
PUT/PATCH     /photos/{photo}     update     photos.update
DELETE     /photos/{photo}     destroy     photos.destroy

Rutas sugeridas por Laravel para los diferentes métodos del CRUD (Create Read Update Delete)
https://laravel.com/docs/5.4/controllers#resource-controllers
laravel.com
Controllers - Laravel - The PHP Framework For Web Artisans
Laravel - The PHP framework for web artisans.


*Por qué los navegadores solo soportan GET y POST*
https://stackoverflow.com/questions/16805956/why-dont-browsers-support-put-and-delete-requests-and-when-will-they (edited)

*Discusión sobre el soft-delete:*
https://stackoverflow.com/questions/5020568/soft-delete-best-practices-php-mysql (edited)

*Como agarrar las excepciones del findOrFail()*
https://stackoverflow.com/questions/32989034/laravel-handle-findorfail-on-fail (edited)

*Cómo usar los errores de Laravel para enviar errores propios*
https://laracasts.com/discuss/channels/laravel/manually-add-errors-to-view

*Formateo de fechas en Laravel*
https://stackoverflow.com/questions/34224256/laravel-format-datetime-from-database-result