## Configuración de Github Desktop

Esto es bastante corto, vamos a configurar nuestro cliente para trabajar desde él.  
Vamos a empezar clonando el proyecto, abrimos el programa y nos vamos al primer menú, *"File"* y clicamos en *"Clone Repository"*  
A no ser que seas nuevo, ya tendrás un **fork** del [repo](https://github.com/EduFdezSoy/curso-php), si no es así vamos y lo forkeamos.  
En la ventana que hemos abierto debemos meter la url que nos da el botón verde que encontraremos en la página del repo forkeado, el nuestro, será una url como esta:

```
https://github.com/USUARIO/curso-php.git
```

Ahora seleccionamos la carpeta donde queremos tener el repo guardado, ojo, creará una carpeta dentro de la selecionada con el nombre del repositorio.  
Clicamos en *Clone* y ya, listo.  

### ¿Cómo funciona?
Te lo voy a explicar un poco por encima, no te preocupes mucho, volveremos a él cuando subamos nuestro primer ejercicio.  
Ahora mismo debemos ver algo así:  

![Github Desktop Image](https://raw.githubusercontent.com/EduFdezSoy/curso-php/master/imagenes/github-desktop.png)  

En **1** podremos seleccionar el repositorio de entre los que tengamos. En **2** podemos seleccionar la **rama** o **branch** que queramos, si le das podrás ver que hay dos. *Master* suele ser siempre la principal. Por último **3** sincronizará los cambios, *Fetch* los bajará del servidor (mezclando con los cambios locales) y *Push*, que aparecerá cuando hagamos un commit, lo subirá.  
Ah, si en **3** pone *Pull* significará que hay cambios en el repositorio remoto y pulsándolo nos bajaremos los cambios al local.  

Espero que hayais entendido eso, más o menos.  

En el resto de la ventana nos saldrán los cambios que hagamos **lado a lado**, y en la barra de la izquierda los ficheros que cambien. Ahí abajo podeis ver dos campos para escribir y un botón, cuando haya cambios tendremos que poner ahí un resumen breve de lo que cambia. Ojo a esto: Se deben publicar los cambios sin mezclar, si estamos corrigiendo orcografía, no lo mezclemos con una nueva feature en la que trabajamos. ¿Entendido?  
Bueno, pues cuando pongamos el resumen es cuando le damos a *commit*, y git guardará los cambios a la espera de que pulsemos el botón de antes (que deberías saber ya que es **3** )  

**Esto es importante:** Una vez que subamos los cambios a nuestro **fork** tendremos que mandarlo al original con un **Pull Request**. Los pasos para hacerlo desde la web son los siguientes:
* Primero vamos al [repo original](https://github.com/EduFdezSoy/curso-php).
* A continuación nos vamos a la pestaña [Pull Requests](https://github.com/EduFdezSoy/curso-php/pulls).
* Una vez aqui hacemos click en [New Pull Request](https://github.com/EduFdezSoy/curso-php/compare).
* Ahora hacemos click en *Compare across folks*.
* Seleccionamos en *base:* la rama original **manda-aqui** y en *compare:* la rama remota, la de nuestro **fork**.
* Por último hacemos click en **Create pull request**, le escribimos un resumen de los cambios y volvemos a darle  **Create pull request**.  

Con eso ya habremos mandado nuestros cambios. Si por alguna razón se requieren cambios o correcciones en el código enviado solo tendremos que actualizarlo en nuestro **fork** y el *Pull Request* se actualizará automáticamente.  

Más adelante explicaré un poco más cómo funciona **Git** y haremos también algunos commits, push y PR vía terminal, es muy sencillo, tanto el funcionamiento como los comandos, seguramente bastante más sencillo de lo que piensas.  
Y bueno, aquí termina esto. En la siguiente clase pasaremos a configurar **VS Code**.  

[<-- Clase anterior](https://github.com/EduFdezSoy/curso-php/blob/master/instalacion-ide.md#instalaci%C3%B3n-de-ide--git) - [Volver al Readme](https://github.com/EduFdezSoy/curso-php/blob/master/README.md#curso-php) - [Siguiente clase -->](https://github.com/EduFdezSoy/curso-php/blob/master/configuracion-ide.md#configuraci%C3%B3n-de-visual-studio-code)  