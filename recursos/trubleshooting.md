# Resolución de problemas

## El depurador no funciona
Si una vez seguidos **al pie de la letra** el manual de instalación y configuración nuestro depurador no funciona seguiremos estos pasos:
* Lo primero será abrir un **CMD** y ejecutar:

```
php -v
```  

* Ahora nos puede dar varios resultados:  
  * Nos da la versión de del **PHP** pero nos dice que no se pudo cargar xdebug. Entonces debemos revisar nuestro `php.ini`, es muy probable que la ruta de nuestro `zend_extension` esté erronea. Usa esta [guia](https://github.com/EduFdezSoy/curso-php/blob/master/configuracion-ide.md#configuraci%C3%B3n-de-visual-studio-code) para corregirlo.  
  * Nos da la versión de del **PHP** instalado sin errores.  
  Entonces comprobaremos los pasos de la [guia](https://github.com/EduFdezSoy/curso-php/blob/master/configuracion-ide.md#configuraci%C3%B3n-de-visual-studio-code) y, si no conseguimos solucionarlo, abrimos una [issue](https://github.com/EduFdezSoy/curso-php/issues?q=is%3Aissue+is%3Aopen).  
  * Nos dice que "php" no se reconoce como un comando.  
  Si es ese el caso continuaremos esta guia, Tendremos que añadir al **path** la ruta de nuestro **php**.  
* Click derecho en Mi PC / Este equipo y **propiedades**.  
* En el lateral izquierdo hacemos click en **configuración avanzada del sistema**.  
* Abajo del todo encontraremos el botón **Variables de entorno**, click.
* Ahora, seleccionamos la variable **path** de la sección **variables de usuario** y pulsamos editar.
* Hacemos click en el hueco en blanco debajo de las rutas que ya hay y a continuación hacemos click en **examinar** y buscamos la carpeta donde se encuentra nuestro **php.exe**. El mío está en `D:\xampp\php`
* Para finalizar hacemos click en **aceptar** hasta salir de estas ventanas.  

Ahora nuestro **CMD** nos dará la versión de **PHP** al insertar `php -v`. Recordad que habrá que cerrar y abrir todos los programas para que funcione (incluso el **CMD**).    

[Volver al Readme](https://github.com/EduFdezSoy/curso-php/blob/master/README.md#curso-php) - [Índice del curso](https://github.com/EduFdezSoy/curso-php/blob/master/README.md#%C3%8Dndice-de-clases)

