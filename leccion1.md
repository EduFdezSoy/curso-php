#Hola!
Bueno, pues empecemos por el principio, para escribir php necesitaremos que el archivo sea .php (obvio) y dentro de él tendremos que abrir el lenguaje con:

```php

<?php

```

...y debemos cerrarlo con:

```php

?>

```

pero ojo, si no vamos a meter HTML entre el PHP *(que no deberiamos, pero lo haremos en algunas practicas porque no tiene sentido 3 archivos para 8 lineas, not for production)* **no lo cerramos**, cerrar el archivo php al final puede causar problemas al añadir las cookies o en las tranferencias de archivos. El servidor se encargará de cerrar el php a su debido tiempo.  

### variables
```php

$edad = 42;          // esta var es un int
$nombre = "Edu";     // y esta un char

```
facil, no? pues sigamos

### mostrar info por pantalla

tenemos dos formas de hacerlo, pero salvo algún caso muy especial usaremos solo la primera

```php

echo "Soy $nombre y tengo $edad";
print "Soy $nombre y tengo $edad";

```

y por qué no vamos a usar print?  
1- Es notablemente más lento que echo.  
2- Solo te permite añadir un parametro, mientras que en echo ponemos "," detrás, añadimos otro y lo concatena.  
3- Print devuelve el valor (1), en alguna expresión podría ser útil, es la excepción.   
También podemos meter HTML dentro de un echo:
```php

echo "<h1> Soy $nombre y tengo $edad </h1>";

```

Que más... ah, si
### Comillas
supongo que esto lo sabreis ya  
si pongo:

```php

$hola = "saludos!";
echo "$hola";

```
me mostrará:

```php

Saludos!

```
mientras que si lo pongo con comillas simples:

```php

$hola = "saludos!";
echo '$hola';

```
me mostrará:

```php

$hola

```
con las variables pasa igual, si pongo dobles podré meter una funcion dentro (u otra variable) y guardará su resultado, si las pongo simple escapará todo lo que haya dentro y lo almacena sin más.  
*Ojo, si vamos a meter el resultado de una funcion en una var no tenemos porqué necesitar comillas, es solo un ejemplo.*  
  
Si hay algo que no hayas entendido o tienes algunas dudas de algo, preguntame!  
Recordad el ;
  
  
## Ejercicios
Solo uno para esta lección  
1- Muestra por pantalla el nombre, la edad y la ubicación de alguien (te lo puedes inventar) usa tres variables y en haz que el nombre esté en negrita. (curratelo un poco, no me pongas "Paco32Salamanca")