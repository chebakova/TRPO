<?php

class А{
    
}

class B extends A
{
    public function __construct($b)
    {
        $this->b = $b;
        
    }
    
    protected $b;  
}


class C extends B
{
    public function __construct($b,$c)
    {
        $this->c = $c;
        parent::__construct($b);
    }
    protected $c;
    
}

$a1 = new A ();
$b2 = new B ($b4);
$b3 = new B ($a1);
$b4 = new B ($a1);
$c5 = new C ($b2,$b3);

?>