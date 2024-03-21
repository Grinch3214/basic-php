<?php
class GrandChildClass2 extends ChildClass1 {
	protected $property5;

	public function getProperty5() {
		return $this->property5;
	}

	public function setProperty5($value) {
		$this->property5 = $value;
	}

	public function calculate() {
		return $this->property1 + $this->property2 - $this->property5;
	}

	public function exponentiate($exponent) {
		return pow($this->property1, $exponent) - pow($this->property5, $exponent);
	}

	public function multiplyWithRootProperty() {
		return $this->property1 * $this->getProperty1() / $this->getProperty2();
	}
}

?>