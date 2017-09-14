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

while ($ejemplo3 = TRUE) {

    echo "otro bucle distinto";
    
    if ($ejemplo2 = "holaa") {

        $ejemplo3 = FALSE;
    
    }
}

```

Eso es todo, estos bucles son muy sencillos, sólo asegurate de no crear un bucle perpetuo del que no podamos salir.  
Si tienes alguna duda, ¡abre una [issue](https://github.com/EduFdezSoy/curso-php/issues)!  

## Bucle do-while
El `do-while` es similar a l `while` salvo que la expresión se verifica tras cada iteración, en lugar de al principio.  
Este bucle es bastante útil si queremos que la porción de código del `while` se ejecute **al menos** una vez.  
Un ejemplo:

```php

$ejemplo = 0;

do {

    echo "Estoy haciendo algo";

} while ($ejemplo > 1);

```

## Bucle for
