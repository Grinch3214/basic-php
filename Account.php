<?php

class Account {

	public function __construct(
			public string $name,
			public float|int $balance
		) {
	}

	public function deposit(float|int $amount) {
		$this->balance += $amount;
		return $this;
	}
}