<?php

class Account {

	public function __construct(
			public string $name,
			public float|int $balance
		) {
	}
}