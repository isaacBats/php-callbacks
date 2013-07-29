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