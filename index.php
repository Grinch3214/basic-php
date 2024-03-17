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

// 2) Создать 3 наследника родительского класса
// Каждый наследник должен содержать одно свойство
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// Один наследник не должен быть наследуемым


class ChildClass1 extends MainClass {
	private $property3;

	public function getProperty3() {
		return $this->property3;
	}

	public function setProperty3($value) {
		$this->property3 = $value;
	}

	public function calculate() {
		return $this->property1 * $this->property2 + $this->property3;
	}

	public function exponentiate($exponent) {
		return pow($this->property1, $exponent) + $this->property3;
	}
}

$child1 = new ChildClass1();
$child1->setProperty1(5);
$child1->setProperty2(2);
$child1->setProperty3(4);

echo "ChildClass1 calculate: " . $child1->calculate();
echo "<br>";
echo "ChildClass1 exponentiate : " . $child1->exponentiate(2);
echo "<br> <br> <br>";


class ChildClass2 extends MainClass {
	private $property3;

	public function getProperty3() {
		return $this->property3;
	}

	public function setProperty3($value) {
		$this->property3 = $value;
	}

	public function calculate() {
		return ($this->property1 + $this->property2) * $this->property3;
	}

	public function exponentiate($exponent) {
		return pow($this->property2, $exponent) * $this->property3;
	}
}

$child2 = new ChildClass2();
$child2->setProperty1(6);
$child2->setProperty2(4);
$child2->setProperty3(9);

echo "ChildClass2 calculate: " . $child2->calculate();
echo "<br>";
echo "ChildClass2 exponentiate : " . $child2->exponentiate(3);
echo "<br> <br> <br>";


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

$child3 = new ChildClass3();
$child3->setProperty1(6);
$child3->setProperty2(4);
$child3->setProperty3(2);

echo "ChildClass3 calculate: " . $child3->calculate();
echo "<br>";
echo "ChildClass3 exponentiate : " . $child3->exponentiate(2);
echo "<br> <br> <br>";


// 3) Создать по 2 наследника от наследников первого уровня
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
// В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции


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

$grandChild1 = new GrandChildClass1();
$grandChild1->setProperty1(2);
$grandChild1->setProperty2(3);
$grandChild1->setProperty4(5);

echo "GrandChildClass1: " . $grandChild1->calculate();
echo "<br>";
echo "GrandChildClass1: " . $grandChild1->exponentiate(2);
echo "<br>";
echo "GrandChildClass1 multiplyWithRootProperty: " . $grandChild1->multiplyWithRootProperty();
echo "<br> <br> <br>";



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

$grandChild2 = new GrandChildClass2();
$grandChild2->setProperty1(6);
$grandChild2->setProperty2(3);
$grandChild2->setProperty5(5);

echo "GrandChildClass2: " . $grandChild2->calculate();
echo "<br>";
echo "GrandChildClass2: " . $grandChild2->exponentiate(2);
echo "<br>";
echo "GrandChildClass2 multiplyWithRootProperty: " . $grandChild1->multiplyWithRootProperty();


?>