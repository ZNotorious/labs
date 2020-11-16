<?php
class A {
    public function equation($a, $b) {
        if ($a == 0) {
            return null;
        } else {
            return $this->x = (-$b / $a);
        }
    }
    protected $x;
}

Class B extends A {
    protected function dis($a, $b, $c) {
        $x_sec = ($b**2) - 4 * $a * $c;
        return $x_sec;
    }

    public function  equation_two($a, $b, $c) {

        if ($a == 0) {
            return $this->equation($b, $c);
        }

        $x = $this->dis($a, $b, $c);

        if ($x > 0) {
            return $this->x = array(
                (-$b + sqrt($x)) / (2 * $a),
                (-$b - sqrt($x)) / (2 * $a)
            );
        }

        if ($x == 0) {
            return $this->x = array(-$b / 2 * $a);
        }
        return $this->x = null;
    }
}
$a = new A();
$a->equation(10,15);
$b = new B();
$b->equation_two(10,15,5);
?>	