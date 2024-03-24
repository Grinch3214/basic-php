<?php 

class GrandChildClass1 extends ChildClass1 {
	protected $property4;

	public function getProperty4() {
		return $this->property4;
	}

	public function setProperty4($value) {
		$this->property4 = $value;
	}

	public function calculate() {
		return $this->property1 + $this->property2 + $this->property4;
	}

	public function exponentiate($exponent) {
		return pow($this->property1, $exponent) + pow($this->property4, $exponent);
	}

	public function multiplyWithRootProperty() {
		return $this->property1 * $this->getProperty1() * $this->getProperty2();
	}
}


?>