## Guía de uso de Visual Studio Code  
Vamos a lo que vamos, abrimos **VS Code** y lo primero que veremos será la pantalla de bienvenida, con información útil de la versión y del programa. Puedes leerla si quieres, yo continuaré la guía.  

Ojo a la barra del lateral izquierdo, empezamos por ahi. El primer botón *(el que parece un par de ojas)* es nuestro **explorador de archivos**, demosle un click, desde aquí abrimos la carpeta de nuestro proyecto *(venga, vamos a abrirlo)*, podemos hacerlo desde el botón azul que ahí aparece, o desde **Archivo > Abrir Carpeta** o con **Ctrl+K Ctrl+O** *(pulsas Ctrl+K y, sin soltar Ctrl, pulsas O)*.  

Has abierto el proyecto `curso-php` no? Lo vamos a usar en un ratete.  

La siguiente pestaña de este lateral resulta bastante evidente, **buscar** y **reemplazar** no tengo mucho más que decir, prosigamos.  

Vamos con la cosa esa rara, el tercer botón. Este botón es el **control de código** o lo que es lo mismo, una interfaz **Git** integrada. Cuando hagamos algun cambio en algún archivo del proyecto nos mostrará estos archivos y, si le hacemos click, nos mostrará un **diff**, que viene siendo lo que hemos cambiado del archivo marcado en verde y rojo a un lado y otro de la pantalla *(el original del que partimos a un lado y el que hemos editado al otro)*.  
Una vez hagamos los cambios pasamos a hacer el **commit**, para ello escribimos un resumen corto de los cambios y pulsamos **Ctrl+Enter**. Es importante que no mezclemos cambios de distintos temas en un commit, si hemos editado tres archivos y cada uno es referente a un cambio distinto usaremos un **+** que aparece junto a los archivos editados. Cuando hagamos un commit con esta opción, solo lo haremos de los marcados, el resto permanecerá a la espera.  

Siguiente. Este botón es el **debug**, si no has debugeado antes con ningún programa o en ningun lenguaje, esto te sonará un poco a chino. Ahi podemos ver las variables, cualquier aviso, alerta o error que detecte el inspector y las llamadas que realice nuestro codigo. Si somos tan mantas que tenemos un centenar de avisos y errores abajo del todo podemos seleccionar los que queremos ver.  

Por ultimo en esta sección tenemos en la parte superior algunos botones, el primero, el de **play**, lanzará el depurador, poco útil si no lo configuramos antes. Al pulsarlo se abrirá una botonera donde podremos controlar el depurador, pausarlo, reiniciarlo, pararlo o continuar donde se pare o nosotros marquemos que se pare.  
Lo siguiente que tenemos es el desplegable, normalmente nos vendrá mejor tenerlo en *"Launch current open script"*, para probar el script que tengamos abierto.  
Ahora tenemos un engranaje, la **configuración**. Al pulsarlo creará un archivo... y ya está no tenemos que tocar nada de él, su configuración por defecto es perfecta.  
Por último tenemos la **consola de depuración**, podria sernos útil en algún momento. De momento ya sabemos donde está.  

Por último tenemos el botón cuadrado ese, las **extensiones**, aquí ya hemos estado antes, hay extensiones para todo, podeis buscar si os apetece, hay cosas realmente útiles ahí.  

Abajo del todo, en la esquina tenemos la **configuración**, podemos cambiar el tema, los iconos, los atajos de teclado...  

Siguiendo en esa dirección, justo debajo pondrá **master**, es la rama donde estamos trabajando *(de Git, claro)* si la pulsamos se abrirá la **paleta de comandos** *(que tambien podemos abrirla desde el botón de configuración)* y en esta paleta nos aparecerán las ramas que existan en el repositorio y podremos crear una nueva si lo necesitamos.  
Justo a su derecha tenemos el botón de **sincronizar cambios**, que basicamente hace un **git push** de los **commits** que hayamos hecho y un **pull** de los cambios que existan el en repo. Podemos ver cuantos cambios vamos a sincronizar desde los numeros que hay en este botón.  

Por último tenemos los **problemas** que haya detectado nuestro depurador o el inspector de código. 

Al otro lado de esta barra tenemos información útil del documennto que escribimos, número de lineas, espacios para la tabulación, el encoding, el fin de linea y el tipo de archivo. La carita soriente esa es para mandar comentarios a los desarrolladores.  

