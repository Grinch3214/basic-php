<?php

class Account {
	public string $name;
	public float|int $balance;

	public function __construct(string $newName, float|int $newBalance) {
		$this->name = $newName;
		$this->balance = $newBalance;
	}
}