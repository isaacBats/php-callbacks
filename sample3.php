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