<?php
namespace Zhukov;

Class Equation{
	public function equation($a, $b){	
		if($a == 0){
			throw new ZhukovException("Determined that the equation doesn't exist\n");
		}
		return $this->x = (-$b / $a);
	}
	
	protected $X;
}

?>