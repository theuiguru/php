<?php

class Collection implements Countable, JsonSerializable {
	protected $items = [];

	public function __set($key, $value) {
		$this->set($key, $value);
	}

	public function __get($value) {
		return $this->get($value);
	}

	public function __call($func, $args) {
		echo $func . ' has been called with arguments ' . implode(', ', $args);
	}

	public function __toString() {
		echo $this -> jsonSerialize();
	}

	public function add($value) {
		$this->items[] = $value;
	}

	public function get($key) {
		return array_key_exists($key, $this->items) ? $this->items[$key] : null;
	}

	public function set($key, $value) {
		$this->items[$key] = $value;
	}

	public function jsonSerialize() {
		return json_encode($this->items);
	}

	public function count() {
		return count($this->items);
	}

	public function all() {
		return $this->items;
	}
}