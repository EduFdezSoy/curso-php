## Configuración de Visual Studio Code
No me voy a meter aquí a explicar como funciona, eso lo haré en la [siguiente clase](https://github.com/EduFdezSoy/curso-php/blob/master/guia-ide.md), iremos directo a la configuración.  
Sin más rodeos, vamos a ponernos manos a la obra. 

Nada más abramos el programa veremos algo asi:  

![Visual Studio Code - recien abierto](https://raw.githubusercontent.com/EduFdezSoy/curso-php/master/imagenes/vs-code-extension.png)  

Pulsaremos en el botón señalado *(pa' eso lo señalo)* y nos cambiará la barra lateral mostrandonos un buscador, primero buscaremos **PHP Debug** de *Felix Becker* por si os sale más de uno. A continuación necesitamos XDebug para nuestro ejecutable de PHP y, a la vez, para descargarnos el .dll correcto necesitamos comprobar algunos datos. Manos a la obra, encendemos nuestro **XAMPP** *(Solo necesitamos Apache encendido)* y nos vamos a la carpeta raiz donde lo instalamos, yo lo tengo en *D:\xampp* dentro de esta buscamos la carpeta *htdocs* y dentro de ella creamos un archivo llamado **info.php** con este contenido:  

```php
<?php

phpinfo();
```  

lo guardamos y nos vamos al navegador, deberíaos poder abrirlo desde <http://127.0.0.1/info.php> o <http://localhost/info.php>.  
Ahora seleccionamos toda la pagina, un **Ctrl+A** debería valer *(A, de All, lo selecciona todo)* y lo copiamos. Nos dirigimos a esta página <https://xdebug.org/wizard.php> y lo pegamos en el cuadro. Una vez pegado, justo debajo encontraremos un botón para analizar nuestro `phpinfo()`, le damos.  
En la página donde nos encontramos ahora veremos información de nuestro PHP instalado, no nos interesa mucho, lo que nos interesa es el **php xdebug**, es un **.dll** que hay más abajo, lo descargamos y lo metemos en su carpeta correspondiente, la mia es `D:\xampp\php\ext`. Una vez dropeado el archivo en la carpeta tendremos que editar el **php.ini**, se encuentra tambien dentro de *xampp\php*, el mio está en `D:\xampp\php\php.ini`, tendremos que pegar abajo del todo la linea que nos dé esta página *(como tambien nos da las rutas anteriores)* a mi me dice que pegue esto:

```
zend_extension = D:\xampp\php\ext\php_xdebug-2.5.4-7.1-vc14.dll
```
A parte de esto, pegaremos tambien en este archivo estas lineas debajo de la anterior:

```
[XDebug]
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
```

Muy bien, archivo listo, guardamos y cerramos.  

Vamos con otra extensión:
**PHP IntelliSense** también de *Felix Becker*, le damos a instalar. Ahora vamos a la configuración *(está en el engranaje de la esquina inferior izquierda)* y en la parte derecha del editor pondremos entre los parentensis que ya vienen puestos `"php.suggest.basic": false` para desactivar las sugerencias por defecto y que salgan solo las de la extensión.  
Guardamos *(Ctrl+S)* y salimos.  

**Nota: tendremos que reiniciar nuestro editor para que las extensiones comiencen a trabajar.**  

Esto es todo por aquí, en la siguiente clase explicaré el funcionamiento de **VS Code** y comprobaremos que el **debug** funcione correctamente. ¡Haaaaaassssta luego!  

[<-- Clase anterior](https://github.com/EduFdezSoy/curso-php/blob/master/configuracion-ghd.md) - [Volver al Readme](https://github.com/EduFdezSoy/curso-php/blob/master/README.md#curso-php) - [Siguiente clase -->](https://github.com/EduFdezSoy/curso-php/blob/master/guia-ide.md)