<?php
class A {
    
}

Class B extends A {
    protected $a;
    
    public function __construct($a) {
        $this->a = $a;
    }
}
Class C extends B {
    protected $b;
    protected $c;
    
    public function __construct($a, $b, $c) {
        $this->b = $b;
        $this->c = $c;
        parent::__construct($a);
    }
}
$a1 = new A();
$a2 = new A();
$a3 = new A();
$b4 = new B($a1);
$c5 = new C($a2,$a3,$b4);
?>	