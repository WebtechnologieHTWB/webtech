<?php
interface idatabase{
	public function open();
	public function insert(string $productname, float $price, string $category);
	public function query(string $name, string $string);
	public function delete(string $name, string $string);
	public function close();	
}

