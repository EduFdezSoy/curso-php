# PHP - Episodio 01
Bueno, pues empecemos por el principio.  
Para escribir php necesitaremos que el archivo sea .php (obvio) y dentro de él tenemos que abrir el lenguaje con `<?php` y debemos cerrarlo con `?>`. Pero ojo, si no vamos a meter HTML entre el PHP *(que no deberíamos pero lo haremos en algunas prácticas porque no tiene sentido tener 3 archivos para 8 líneas. Not for production)* **no lo cerramos**. Cerrar el archivo php al final puede causar problemas al añadir las cookies o en las tranferencias de archivos. El servidor se encargará de cerrar el php a su debido tiempo.  

## Variables
```php

$edad = 42;          // esta var es un int
$nombre = "Edu";     // y esta un char

```
Fácil, ¿no? Pues sigamos.

## Mostrar info por pantalla

Tenemos dos formas de hacerlo pero salvo algún caso muy especial usaremos solo la primera.

```php

echo "Soy $nombre y tengo $edad";
print "Soy $nombre y tengo $edad";

```

...¿Y por qué no vamos a usar print?  

1 - Es notablemente más lento que **echo**.  
2 - Solo te permite añadir un parámetro, mientras que en echo ponemos "," detrás, añadimos otro y lo concatena.  
3 - Print devuelve el valor (1), en alguna expresión podría ser útil, es la excepción.   

También podemos meter HTML dentro de un echo:

```php

echo "<h1> Soy $nombre y tengo $edad </h1>";

```

Que más... Ah, sí.
## Comillas
Supongo que esto lo sabreis ya:  
Si pongo

```php

$hola = "saludos!";
echo "$hola";

```

me mostrará:

```php

Saludos!

```

mientras que si lo pongo con comillas simples


```php

$hola = "saludos!";
echo '$hola';

```

me mostrará:

```php

$hola

```

Con las variables pasa igual: Si pongo dobles podré meter una función dentro (u otra variable) y guardará su resultado, si las pongo simples escapará todo lo que haya dentro y lo almacenará sin más.  
*Ojo, si vamos a meter el resultado de una función en una var no tenemos por qué necesitar comillas, es solo un ejemplo.*  

## IF - ELSE
Más cosas faciles, condiciones.

```php
if ($var == 'foo') {
    echo 'var es igual a foo';
}
```

una condición bastante simple, ¿no crees? ¿qué tal si metemos más complejidad?

```php
if ($var == 'foo') {
    echo 'var es igual a foo';
} else {
    echo 'var no es igual a foo';
}
```

esta tiene un **if** y un **else**, pero aún la podemos complicar algo más:

```php
if ($var == 'foo') {
    echo 'var es igual a foo';
} elseif ($var == 'patatas') {
    echo 'var es igual a patatas';
} else {
    echo 'no se que es var, pero ni foo ni patatas';
}
```

Podriamos ampliar sin fin nuestra condición, pero para eso mejor usar otras construcciones.  

## Generar aleatorios
Por último y para dar más juego a los ejercicios de las practicas os voy a enseñar como generar un número aleatorio dado un rango con la función `mt_rand()`. Su funcionamiento es fácil, dentro de los parentesis ponemos el número mínimo, una coma, y el número maximo del rango. Pongo ejemplo:  

```php
$aleatorio = mt_rand(10,20);
```

Esto hará que `$aletorio` sea un número *aleatorio* entre 10 y 20, ambos incluidos. Y ya está.  

Si hay algo que no hayas entendido o tienes alguna duda de algo, ¡pregúntame!  
Recordad el `;`  

Esta es la practica correspondiente:
<https://github.com/EduFdezSoy/curso-php/blob/master/ejercicios/ej-01.md>  

[<-- Clase anterior](https://github.com/EduFdezSoy/curso-php/blob/master/guia-ide.md) - [Volver al Readme](https://github.com/EduFdezSoy/curso-php/blob/master/README.md#curso-php) - [Siguiente clase -->](https://github.com/EduFdezSoy/curso-php/blob/master/php-02.md)