# PHP - Episodio 02
En esta clase vamos a dar bucles, concretamente el `while`, el `do-while` y el `for`.  

Pero antes, si aún no has leido la guía de [operadores](https://github.com/EduFdezSoy/curso-php/blob/master/recursos/operadores.md) te sugiero echarle un vistazo:  
<https://github.com/EduFdezSoy/curso-php/blob/master/recursos/operadores.md>  

## Bucle while
El bucle `while` es el más común, su estructura es similar a la de un `if`, tendremos la condición y el código. Este codigo se estará ejecutando mientras se cumpla la condición, un ejemplo:

```php

// el más común, con un contador
$ejemplo1 = 0;

while ($ejemplo1 < 5) {
    
    echo "el bucle se está ejecutando";
    $ejemplos++;

}

// tambien podemos usar un string, aunque no sea lo más normal
$ejemplo2 = "hola";

while ($ejemplo2 != "holaaaa") {

    echo "esto tambien puede ser un bucle";
    $ejemplo2 .= "a";

}

// para el ultimo ejemplo he usado un booleano (TRUE/FALSE)
$ejemplo3 = TRUE;

while ($ejemplo3 == TRUE) {

    echo "otro bucle distinto";
    
    if ($ejemplo2 = "holaa") {

        $ejemplo3 = FALSE;
    
    }
}

```

Eso es todo, estos bucles son muy sencillos, sólo asegurate de no crear un bucle perpetuo del que no podamos salir.  
Si tienes alguna duda, ¡abre una [issue](https://github.com/EduFdezSoy/curso-php/issues)!  

## Bucle do-while
El `do-while` es similar al `while` salvo que la expresión se verifica tras cada iteración, en lugar de al principio.  
Este bucle es bastante útil si queremos que la porción de código del `while` se ejecute **al menos** una vez.  
Un ejemplo:

```php

$ejemplo = 0;

do {

    echo "Estoy haciendo algo";

} while ($ejemplo > 1);

```

## Bucle for
Este bucle es más complejo que los dos anteriores y, en algunos casos, más útil. Es posible que no veamos nunca el momento adecuado para usar un bucle `for` y es que todo lo que podemos hacer con `for` lo podemos hacer con `while` pero ojo, no todo lo que podemos hacer con `while` lo podemos hacer con un `for`.  

Este bucle se divide en tres partes más el código interior del bucle. La primera define una **variable contador**, la segunda es la **condición** que, de ser `TRUE` hará que se ejecute el código del bucle. La tercera se ejecutará al final de cada iteración.  

En este ejemplo, primero definimos `$i`, que es nuestro **contador**, a continuación comprobamos si `$i` es menor o igual que 10, es nuestra **condición** y, por último, sumamos uno a nuestro contador `$i`.  
Cuando `$i` sea 11 no cumplirá la **condición** y escapará del bucle.

```php

for($i = 1; $i <= 10; $i++) {

    echo "Hola mamá, soy útil.";

}

```

## Break
Para terminar la clase de hoy veremos el `break`. `Break`, insertado en un bucle, romperá el bucle inmediatamente. 
Usemos el ejemplo anterior e insertemos un `break`:

```php

for($i = 1; $i <= 10; $i++) {

    echo "Hola mamá, soy útil.";
    break;

}

```

Este bucle sólo se ejecutará una vez, ya que el `break` lo rompe.  
Puede parecer poco útil así, pero si lo metemos en un `if` que compruebe algo primero, el `break` puede sernos muy útil.  

Esta es la practica correspondiente:
<https://github.com/EduFdezSoy/curso-php/blob/master/ejercicios/ej-02.md>  

[<-- Clase anterior](https://github.com/EduFdezSoy/curso-php/blob/master/php-02.md) - [Volver al Readme](https://github.com/EduFdezSoy/curso-php/blob/master/README.md#curso-php) - [Siguiente clase -->](https://github.com/EduFdezSoy/curso-php/blob/master/php-03.md)