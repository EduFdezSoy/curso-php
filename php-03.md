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

Si queremos un **array multidimensional** simplemente ponemos mas corchetes:
```php

$saludoBidimensional = [["hola", "adios"], ["hello", "bye"]];

```
con este ejemplo accedemos asi:
```php

echo $saludoBidimensional[0][0];    // hola
echo $saludoBidimensional[1][0];    // hello

```

[<-- Clase anterior](https://github.com/EduFdezSoy/curso-php/edit/master/php-02.md) - [Volver al Readme](https://github.com/EduFdezSoy/curso-php/blob/master/README.md#curso-php) - [Siguiente clase -->](https://github.com/EduFdezSoy/curso-php/blob/master/php-04.md)
