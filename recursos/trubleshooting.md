# Resolución de problemas

## El depurador no funciona
Si una vez seguidos **al pie de la letra** el manual de instalación y configuración nuestro depurador no funciona seguiremos estos pasos:
* Lo primero será abrir un **CMD** y ejecutar:

```
php -v
```  

* Ahora nos puede dar dos resultados:  
  * Nos da la versión de del *PHP* instalado.  
  Entonces comprobaremos los pasos de la [guia](https://github.com/EduFdezSoy/curso-php/blob/master/configuracion-ide.md) y, si no conseguimos solucionarlo, abrimos una [issue](https://github.com/EduFdezSoy/curso-php/issues?q=is%3Aissue+is%3Aopen).  
  * Nos dice que "php" no se reconoce como un comando.  
  Si es ese el caso continuaremos esta guia.
* Click derecho en Mi PC / Este equipo y **propiedades**.  
* En el lateral izquierdo hacemos click en **configuración avanzada del sistema**.  
* Abajo del todo encontraremos el botón **Variables de entorno**, click.
* Ahora, seleccionamos la variable **path** de la sección **variables de usuario** y pulsamos editar.
* Hacemos click en el hueco en blanco debajo de las rutas que ya hay y a continuación hacemos click en **examinar** y buscamos la carpeta donde se encuentra nuestro **php.exe**. El mío está en `D:\xampp\php`
* Para finalizar hacemos click en **aceptar** hasta salir de estas ventanas.  

Ahora nuestro **CMD** nos dará la versión de **PHP** al insertar `php -v`. Recordad que habrá que cerrar y abrir todos los programas para que funcione (incluso el CMD).  
