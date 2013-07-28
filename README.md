php-callbacks
=============

PHP Callbacks v0.0.1


Review
==========

Ya podemos usar funciones anónimas desde PHP 5.3.0, lo cual considero una verdadera maravilla. Ya contamos con un poco más de flexibilidad en el lenguaje, usando closures y funciones anónimas podemos ser un poco más dinámicos al programar. Hace unos días vi una conferencia de un dude de adobe, donde mencionaba porque su amor a javascript a diferencia de lenguajes orientados a objetos como java y C++, su argumento contra los lenguajes orientados a objestos erá que "entre más avanzas en el proyecto, más difícil es hacer cambios en el". Ahora PHP un punto más a su favor, así que es hora de divertirnos con funciones anónimas.

Ejemplo 1 
===========

Code: 

```
<?php

/*
        Funcion anónima 
*/
        $anonima = function($name = "world"){
                echo "Hello $name \r\n";
        };

        $anonima();

        $anonima("@richistron");
```
Run :

```
php sample1.php
```

output:

```
Hello world
Hello @phpmx
```


