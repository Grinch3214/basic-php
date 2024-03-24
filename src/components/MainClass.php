<?php

// 1) Создать родительский (главный класс)
// Класс должен содержать 2 свойства
// Каждое свойство должно иметь геттеры и сеттеры
// должен содержать абстрактную функцию возведения в степень

// Родительский класс

abstract class MainClass {
	protected $property1;
	protected $property2;

	public function getProperty1() {
		return $this->property1;
	}

	public function setProperty1($value) {
		$this->property1 = $value;
	}

	public function getProperty2() {
		return $this->property2;
	}

	public function setProperty2($value) {
		$this->property2 = $value;
	}

	abstract public function exponentiate($exponent);
}


?>