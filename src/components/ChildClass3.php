<?php

final class ChildClass3 extends MainClass {
	private $property3;

	public function getProperty3() {
		return $this->property3;
	}

	public function setProperty3($value) {
		$this->property3 = $value;
	}

	public function calculate() {
		return ($this->property1 + $this->property2) / $this->property3;
	}

	public function exponentiate($exponent) {
		return pow($this->property1 * $this->property2, $exponent) / $this->property3;
	}
}

?>