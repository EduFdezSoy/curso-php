## Guía de uso de Visual Studio Code  
Vamos a lo que vamos: Abrimos **VS Code** y lo primero que veremos será la pantalla de bienvenida con información útil de la versión y del programa. Puedes leerla si quieres, yo continuaré la guía.  

### Barra izquierda
Ojo a la barra del lateral izquierdo, empezamos por ahí. El primer botón *(el que parece un par de hojas)* es nuestro **explorador de archivos**, démosle un click. Desde aquí abrimos la carpeta de nuestro proyecto *(venga, vamos a abrirlo)*. Podemos hacerlo desde el botón azul que ahí aparece, desde **Archivo > Abrir Carpeta** o con **Ctrl+K Ctrl+O** *(pulsas Ctrl+K y, sin soltar Ctrl, pulsas O)*.  

Has abierto el proyecto `curso-php`, ¿no? Lo vamos a usar en un ratete.  

La siguiente pestaña de este lateral, la lupa, resulta bastante evidente: **buscar** y **reemplazar**. No tengo mucho más que decir. Prosigamos.  

Vamos con la cosa esa rara, el tercer botón. Este botón es el **control de código** o lo que es lo mismo, una interfaz **Git** integrada. Cuando hagamos algún cambio en algún archivo del proyecto nos mostrará estos archivos y, si le hacemos click, nos mostrará un **diff**, que viene siendo lo que hemos cambiado del archivo marcado en verde y rojo a un lado y otro de la pantalla *(el original del que partimos a un lado y el que hemos editado al otro)*.  
Una vez hagamos los cambios pasamos a hacer el **commit**, para ello escribimos un resumen corto de los cambios y pulsamos **Ctrl+Enter**. Es importante que no mezclemos cambios de distintos temas en un commit, si hemos editado tres archivos y cada uno es referente a un cambio distinto usaremos un **+** que aparece junto a los archivos editados. Cuando hagamos un commit con esta opción, solo lo haremos de los marcados, el resto permanecerá a la espera.  

Siguiente. Este botón es el **debug**  o **depurador** *(el del insecto tachado)*, si no has debugeado antes con ningún programa o en ningún lenguaje, esto te sonará un poco a chino. Ahí podemos ver las variables, cualquier aviso, alerta o error que detecte el inspector y las llamadas que realice nuestro código. Si somos tan mantas que tenemos un centenar de avisos y errores, abajo del todo podemos seleccionar los que queremos ver.  

Por último, en esta sección tenemos en la parte superior algunos botones. El primero, el de **play**, lanzará el depurador, poco útil si no lo configuramos antes. Al pulsarlo se abrirá una botonera donde podremos controlar el depurador, pausarlo, reiniciarlo, pararlo o continuar donde se pare o nosotros marquemos que se pare.  
Lo siguiente que tenemos es el desplegable. Normalmente nos vendrá mejor tenerlo en *"Launch current open script"*, para probar el script que tengamos abierto.  
Ahora tenemos un engranaje: la **configuración**. Al pulsarlo creará un archivo... y ya está. No tenemos que tocar nada de él, su configuración por defecto es perfecta.  
Por último tenemos la **consola de depuración**, donde saldrá la salida del programa al depurar. Nos será útil. Ya sabemos dónde está.  

Por último tenemos el botón cuadrado ese, las **extensiones**. Aquí ya hemos estado antes. Hay extensiones para todo. Podeis buscar si os apetece, hay cosas realmente útiles ahí.  

Abajo del todo, en la esquina, tenemos la **configuración**. Podemos cambiar el tema, los iconos, los atajos de teclado...  

### Barra inferior
Siguiendo en esa dirección, justo debajo pondrá **master**. Es la rama donde estamos trabajando *(de Git, claro)*. Si la pulsamos se abrirá la **paleta de comandos** *(tambien podemos abrirla desde el botón de configuración)* y en esta paleta nos aparecerán las ramas que existan en el repositorio y podremos crear una nueva si lo necesitamos.  
Justo a su derecha tenemos el botón de **sincronizar cambios**, que básicamente hace un **git push** de los **commits** que hayamos hecho y un **pull** de los cambios que existan en el repo. Podemos ver cuántos cambios vamos a sincronizar desde los números que hay en este botón.  

Por último tenemos los **problemas** que haya detectado nuestro depurador o el inspector de código. 

Al otro lado de esta barra tenemos **información útil** del documennto que escribimos: número de líneas, espacios para la tabulación, el encoding, el fin de línea y el tipo de archivo. La carita soriente esa es para mandar comentarios a los desarrolladores.  

Por último, desde esta barra inferior podemos desplegar un puñado de consolas arrastrando del borde de la barra hacia arriba. Aquí podemos encontrar los **problemas**, la **salida** del programa, la **consola de depuración** y un **terminal**. En ocasiones es realmente útil tener este panel desplegado. Para cerrarlo simplemente pulsamos la **X** blanca de la esquina derecha.  

### Barra derecha
Bueno, en realidad a la derecha no hay ninguna barra, pero si que encontramos la típica barrita de **scroll** y unos botones encima. También veremos, cuando estemos editando un archivo, un **minmap** de todo el código pegando a esta barra *(ahí, en miniatura)* puede servirnos para navegar rápido dentro de un archivo... o no. Yo personalmente no lo uso, lanzo mi rueda del ratón a girar hasta que llego a donde quiero ir.  

Vamos con los botones de encima, el primero *(dos archivos con una lupa azul)* nos abrirá un **diff** y nos mostrará los cambios lado a lado.  
El segundo tratará de ejecutar el programa mostrándonos una **vista previa** a media pantalla, mientras que en la otra media podremos seguir escribiendo.  
El siguiente nos permite **dividir el editor**, mmmmmmmuy útil cuando estamos trabajando con más de un archivo a la vez.  
Y por último tenemos los **tres puntitos**, que nos abre un desplegable y nos permite **mostrar los editores abiertos**, **cerrar los no modificados** o **cerrarlo todo**.  

### Barra superior
He dejado para el final esta barra por ser la más clásica. Desde ella podemos hacer practicamente todo lo anterior pero navegando en un puñado de desplegables. También nos deja hacer un centenar de cosas más, como es normal. Podeis ojearlo si os apetece, no voy a explicar todo esto.  

Eso es todo por hoy, ahora vamos a hacer un ejercicio de pruebas:  
<https://github.com/EduFdezSoy/curso-php/blob/master/ejercicios/ej-00.md>  

[<-- Clase anterior](https://github.com/EduFdezSoy/curso-php/blob/master/configuracion-ide.md) - [Volver al Readme](https://github.com/EduFdezSoy/curso-php/blob/master/README.md#curso-php) - [Siguiente clase -->](https://github.com/EduFdezSoy/curso-php/blob/master/php-01.md)