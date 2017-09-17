# Git - Episodio 01
## ¿Cómo mantener sincronizado nuestro fork con el repo original?
No es el mejor lugar por donde empezar pero si que es el más útil.  

Lo primero que vamos a hacer es abrir nuestro proyecto en **VS Code**, una vez lo tengamos abierto nos vamos al **Terminal**, dejo este [Gif](https://raw.githubusercontent.com/EduFdezSoy/curso-php/master/imagenes/VSCode-CMD.gif) para que sepais cómo abrirlo.  

[![VS Code - Gif](https://raw.githubusercontent.com/EduFdezSoy/curso-php/master/imagenes/VSCode-CMD.gif)](https://raw.githubusercontent.com/EduFdezSoy/curso-php/master/imagenes/VSCode-CMD.gif)
*Pincha en el Gif para abrirlo a pantalla completa*  

Una vez tengamos el **Terminal** abierto veremos que nos sale la cabecera *"Windows PowerShell... tal y cual"* y en la ultima linea aparece la **ruta a nuestra carpeta del proyecto**.  

Ahora vamos a introducir este comando:
```git
git remote add upstream git@github.com:EduFdezSoy/curso-php.git
```
y a continuación:
```git
git fetch upstream
```
**¿Pero qué estamos haciendo?**  
Lo que acabamos de hacer ha sido añadir el **repositorio original** como fuente de código.  
Ahora cuando lo actualicemos lo hará desde el original y no tendremos que hacernos más **Pull Requests** a nosotros mismos.

**Para actualizar nuestro código** sólo tendremos que poner este comando:
```git
git pull upstream master
```
**Ojo:** este comando lo tendremos que poner cada vez que queramos actualizar el fork.

Lo que hacemos con este comando es **tirar** *(pull)* de los cambios de **upstream**, que es el original, de la rama **master**.  

*Gracias a Cristina Solana por este [Gist](https://gist.github.com/CristinaSolana/1885435).*  

[Volver al Readme](https://github.com/EduFdezSoy/curso-php/blob/master/README.md#curso-php) - [Siguiente clase -->](https://github.com/EduFdezSoy/curso-php/blob/master/git-02.md)