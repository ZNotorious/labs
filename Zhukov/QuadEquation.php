<?php
	namespace Zhukov;

	use core\EquationInterface;

	Class QuadEquation extends Equation implements EquationInterface{
		
		protected function dis($a, $b, $c) {
			$x_sec = ($b**2) - 4 * $a * $c;
			return $x_sec;
    	}

	    public function solve($a, $b, $c) {

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
?>