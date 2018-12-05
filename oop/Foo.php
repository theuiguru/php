<?php

class Foo {
	// public function bar() {
	// 	return 'foobar';
	// }

	// abstract public function foobar();

	// public static $bar = 'foobar';

	// public static function hello() {
	// 	//return $var;
	// 	return $this->bar;
	// }

	public function bar() {
		echo 'foobar<br>';
		return $this;
	}

	public function baz() {
		echo 'foobaz';
	}
}