php-callbacks
=============

PHP Callbacks v0.0.1


Review
======

Ya podemos usar funciones anónimas desde PHP 5.3.0, lo cual considero una verdadera maravilla. Ya contamos con un poco más de flexibilidad en el lenguaje, usando closures y funciones anónimas podemos ser un poco más dinámicos al programar. Hace unos días vi una conferencia de un dude de adobe, donde mencionaba porqué su amor a javascript a diferencia de lenguajes orientados a objetos como java y C++, su argumento contra los lenguajes orientados a objestos erá que "entre más avanzas en el proyecto, más difícil es hacer cambios en el". Ahora PHP tiene un punto más a su favor, así que es hora de divertirnos con funciones anónimas.

Funcion anónima (sample1.php)
=============================

Code: 


```php
<?php

/*
        Funcion anónima 
*/
        $anonima = function($name = "world"){
                echo "Hello $name \r\n";
        };

        $anonima();

        $anonima("@phpmx");
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

Regresando un funcion anónima (sample2.php)
===========================================

Creamos una clase que regresa un función anónima

```php
<?php

/**
 * Sample 2
 */
class Sample2 {
	/**
	 * string $msg
	 */
	private $msg = "Hello World";
	/**
	 * Regresa una función anónima
	 * @return function
	 */
	public function getHello(){
		$msg = $this->msg;
		return function() use ($msg){
			echo "$msg \r\n";
		};
	}
	/**
	 * Setea el mensaje
	 * @param string $msg
	 */
	public function setHello($msg = ""){
		$this->msg = $msg;
	}
}

// new instance
$class = new Sample2;
// get function
$hello = $class->getHello();
// run function
$hello();
// change message
$class->setHello("Hola @phpmx");
// get new function
$hello2 = $class->getHello();
// run new message
$hello2();
```

Run :


```
php sample2.php
```

output:

```
Hello world
Hello @phpmx
```

Callback como parametro
=======================

Al mero estilo de javascript podemos mandar funciones anónimas como parametro

```php
<?php

class Sample3 {
	public function hello($callback){
		echo  "hello world \r\n";
		$callback();
	}
}

$class = new Sample3;

$class->hello(function(){
	echo "hello @phpmx \r\n";
});

$funct = function(){
	echo "hello @phpmx \r\n";
};

$class->hello($funct);
```

Run :


```
php sample3.php
```

output:

```
Hello world
Hello @phpmx
```