curso PHP
======

PHP (acrónimo recursivo de PHP: **Hypertext Preprocessor**) es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML.

##Como funciona?

###Comunicación entre el cliente y el servidor PHP:

1. Tipeamos en la barra del navegador la dirección y el archivo a solicitar.

2.  El web browser (navegador) envía el mensaje a través de Internet a la computadora llamada www.lanacion.com solicitando la página (archivo) pagina1.php

3.  El web server (servidor web, que puede ser el Apache, IIS, etc.), recibe el mensaje y al ver que la extension es "php" solicita al interprete de PHP (que es otro programa que se ejecuta en el servidor web) que le envíe el archivo.

4.  El intérprete PHP lee desde el disco el archivo pagina1.php

5.  El intérprete PHP ejecuta los comandos contenidos en el archivo y eventualmente se comunica con un gestor de base de datos (ejemplos de ellos pueden ser MySql, Oracle, Informix, SQL Server, etc.)

6.  Luego de ejecutar el programa contenido en el archivo envía éste al servidor web.

7.  El servidor web envía la página al cliente que la había solicitado.

8. El navegador muestra en pantalla el archivo que envió el servidor web.


![enter image description here](https://i.ytimg.com/vi/laTPz49TgZE/maxresdefault.jpg)


----------


PHP Básico - Instalación
-------------

Para ejecutar php como vimos, necesitamos un servidor en donde estara instalado el interprete de php para que pueda ejecutar el codigo que nosotros escribamos, sin embargo podemos instalar un servidor local en nuestras computadoras 
####XAMPP
xammp es un paquete de instalación un gestor de base de datos **MySQL**, servidor **apache**, el interprete **PHP** que nos permite hacer pruebas de manera local.

![xammp](https://erickorlando.files.wordpress.com/2017/01/xampp.png)

> instalacion de xampp: https://www.youtube.com/watch?v=AwGViHnNQw4


----------