<?php 

//1

// class Calc {
//     public $firstNum;
//     public $secundNum;

//     function __construct($firstNum, $secundNum)
//     {   
//         $this -> firstNum = $firstNum;
//         $this -> secundNum = $secundNum;
//     }
//     function plus () {
//         return $this -> firstNum + $this -> secundNum;
//     }
//     function minus () {
//         return $this -> firstNum - $this -> secundNum;
//     }
//     function multiply () {
//         return $this -> firstNum * $this -> secundNum;
//     }
//     function divide () {
//         return $this -> firstNum / $this -> secundNum;
//     }
// }
// $firstNum = new Calc(10, 5);
// echo 'Plus = ' . $firstNum -> plus () . '<br>';
// echo 'Minus = ' . $firstNum -> minus () . '<br>';
// echo 'Multiply = ' . $firstNum -> multiply () . '<br>';
// echo 'Divide = ' . $firstNum -> divide () .'<br><br>';

// //2

class Circle {
    public const PI = 3.14159;
    public $circle;
    public function __construct($circle)
    {
        $this -> circle = $circle;
    }

    public function circumference () {
        return $this -> circle * 2 * self:: PI;
    }
    public function area () {
        $new_circle = $this -> circle;
        return $this -> circle = pow($new_circle, 2) * self:: PI;
    }
}

$circle = new Circle(4);
echo 'Circumference= ' . $circle -> circumference () . '<br>';  // 25.13274
echo 'Area= ' . $circle -> area (); // 50.26548
