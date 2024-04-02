<?php

namespace App;

class Account {
	public socialMedia $socialMedia;

	public function __construct(
			public string $name,
			public float|int $balance
		) {
			$this->socialNedia = new SocialMedia();
	}

	public function deposit(float|int $amount) {
		$this->balance += $amount;
		return $this;
	}
}