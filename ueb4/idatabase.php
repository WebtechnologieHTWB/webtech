<?php
interface idatabase{
	public function open();
	public function insert(string $article_n, float $price, int $amount);
	public function query(string $name,string $string);
	public function delete(string $name,string $string);
	public function close();	
}

