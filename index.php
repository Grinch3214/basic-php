<?php

require_once 'src/components/MainClass.php';
require_once 'src/components/ChildClass1.php';
require_once 'src/components/ChildClass2.php';
require_once 'src/components/ChildClass3.php';
require_once 'src/components/GrandChildClass1.php';
require_once 'src/components/GrandChildClass2.php';

// 2) Создать 3 наследника родительского класса
// Каждый наследник должен содержать одно свойство
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// Один наследник не должен быть наследуемым

// 2.1
$child1 = new ChildClass1();
$child1->setProperty1(5);
$child1->setProperty2(2);
$child1->setProperty3(4);

echo "ChildClass1 calculate: " . $child1->calculate();
echo "<br>";
echo "ChildClass1 exponentiate : " . $child1->exponentiate(2);
echo "<br> <br> <br>";

// 2.2
$child2 = new ChildClass2();
$child2->setProperty1(6);
$child2->setProperty2(4);
$child2->setProperty3(9);

echo "ChildClass2 calculate: " . $child2->calculate();
echo "<br>";
echo "ChildClass2 exponentiate : " . $child2->exponentiate(3);
echo "<br> <br> <br>";

// 2.3
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

// 3.1
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

// 3.2

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