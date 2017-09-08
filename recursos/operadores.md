# Operadores aritméticos, lógicos y comparadores

## Comparadores
### Igual
```php
$a == $b   // $a es igual que $b

$a === $b  // $a es igual y del mismo tipo que $b (tamien llamado IDENTICO)

// si $a es un int de valor 1 y $b un char de valor 1 la primera condición dará TRUE mientras que la segunda dará FALSE
```
*No confundir con `$a = $b` que es una asignación.*  

### Mayor y menor
```php
$a > $b   // $a es mayor que $b
$a < $b   // $a es menor que $b

$a >= $b  // $a es mayor o igual que $b
$a <= $b  // $a es menor o igual que $b

$a <=> $b // llamado "nave espacial". $a es menor que, igual a, o mayor que 0 A LA VEZ (y respectivamente) que $a es menor que, igual a, o mayor que $b. Sólo devuelve 0, 1, o -1.
```
*No confundir con `$a -> $b` que serían movidas con objetos.*

### Negaciones
Para negar simplemente añadimos `!`
```php
$a != $b  // $a es diferente de $b
$a <> $b  // igual que el anterior, $a es diferente de $b

$a !== $b  // $a no es identico a $b
```

### Otros
```php
$a ?? $b ?? $c // devuelve el primer operando que no sea NULL (o NULL si todos son NULL)
```
Este es bastante útil.  

## Aritméticos

```php
$a = +$a     // convierte el valor de $a a INT o FLOAT ("10" -> 10), da error si no es un numero
$a = -$a     // convierte el valor a INT o FLOAT pero negativo ("10" -> -10)

$a = $b + $c // suma
$a = $b - $c // resta
$a = $b * $c // multiplicacion
$a = $b / $c // division
$a = $b % $c // modulo (el resto de la division)
$a = $b ** $c // exponenciación ($b elevado a $c)
```