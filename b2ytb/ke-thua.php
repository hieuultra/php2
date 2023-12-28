<?php
// class B là con (có quan hệ kế thừa) class A (B extends A)
// lớp B có thể sử dụng/truy cập được các thuộc tính & phương thức được định nghĩa ở lớp A
// A không được phép sử dụng các tính chất/phương thức của lớp con của nó
// php là ngôn ngữ đơn kế thừa (1 lớp chỉ đc phép extends 1 lớp khác)
// 1 class A có thể là cha của nhiều lớp khác nhau
class Animal
{
    var $name;
    var $age;
    function __construct($name = "", $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function getInfo()
    {
        echo "toi ten la $this->name - toi dc $this->age tuoi";
    }
}

class dog extends Animal
{
}

class cat extends Animal
{
}
$rex = new dog('rex', 5);
$rin = new cat('Rin', 2);

$rex->getInfo();
echo "<br>";
$rin->getInfo();