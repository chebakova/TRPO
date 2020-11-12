<?php 
Class A {
	public function equation ($a,$b) {
		if ($a == 0){
		  return false;
		}
		return $this->X=-($b/$a);
	}
	protected $X;
}
Class B extends A {
    protected function diskriminant($a, $b, $c) {
		$x = ($b**2)-4*$a*$c;
		return $x;
	}
	public function qu_equation($a, $b, $c){
		$d = $this->diskriminant($a,$b,$c);
		if($a == 0){
			return $this->equation($b,$c);
		}
		if ($d > 0) {
			return $this->X=array (
				-($b+sqrt($d)/(2*$a)),
				-($b-sqrt($d)/(2*$a))
			);
		}
		
		if ($d == 0) {
			return $this->X=array(-($b/(2*$a)));
		}
		return $this->X=false;
	}
}
	$a = new A();
	$b = new B();
	
	?>
			