Antes de comenzar, la relación de ejercicios [EXTRA - 01](https://github.com/EduFdezSoy/curso-php/blob/master/ejercicios/extra-01.md#practica-extra-01) te vendrá muy bien para repasar conceptos y practicar lo aprendido.  

---

# PHP - Episodio 03

Es esta clase vamos a tratar un poco con **arrays** y la instrución **switch**... pero eso será en un par de días, haz los ejercicios! ;)

## Arrays
La forma m&aacute;s sencilla de declarar uno es:
```php

$arrayDias = ["lunes", "martes", "miercoes", "jueves", "viernes"];

```
y accedemos a el asi:
```php

echo $arrayDias[2]; // mostrara: martes

```
Tambien podemos crear arrays **asociativos**, es decir, su indice en lugar de ser 0,1,2... ser&aacute; el nombre que escojamos, ejemplo:
```php

$arrayPersona = ["nombre" => "Eduardo", "apellido" => "Fernandez"];

```
al acceder usamos el nombre:
```php

echo $arrayDias["nombre"]; // mostrara: Eduardo

```
Otra forma de definir una array *(asociativo o no)* es con la palabra reservada **array()**, simplemente reemplazamos los corchetes con la palabra array y unos parentesis.
```php

$arrayDias = array("lunes", "martes", "miercoes", "jueves", "viernes");
$arrayPersona = array("nombre" => "Eduardo", "apellido" => "Fernandez");

```

Si queremos un **array multidimensional** simplemente ponemos mas corchetes:
```php

$saludoBidimensional = [["hola", "adios"], ["hello", "bye"]];

```
con este ejemplo accedemos asi:
```php

echo $saludoBidimensional[0][0];    // hola
echo $saludoBidimensional[1][0];    // hello

```

Ahora usar **array()** tiene m&aacute;s sentido pues nos permite formatear nuestro c&oacute;digo de forma mucho m&aacute;s legible:
```php

$saludoBidimensional = array(
                            array(
                                  "hola",
                                  "adios"
                                  ),
                            array(
                                  "hello",
                                  "bye"
                                  )
                            );

```

## Foreach
Para recorrer los arrays mejor no usar un **for**, estos arrays pueden saltarse indices *(0,1,3,4)* o, en el caso de los asociativos, ni siquiera sabemos cual es su indice numerico *(que lo tienen)*. Para los arrays entonces usaremos los **foreach**.  

Ejemplo de foreach:
```php

foreach($arrayDias as $dia)
{
  echo $dia;
}

```
esto devuelve:
```php
lunes
martes
miercoes
jueves
viernes
```

[<-- Clase anterior](https://github.com/EduFdezSoy/curso-php/blob/master/php-02.md) - [Volver al Readme](https://github.com/EduFdezSoy/curso-php/blob/master/README.md#curso-php) - [Siguiente clase -->](https://github.com/EduFdezSoy/curso-php/blob/master/php-04.md)
