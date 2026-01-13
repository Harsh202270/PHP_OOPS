<html>
<body>
<?php
class method_over
{
	
	private $x1,$y1;
	public function accept($x,$y)
	{
		$this->x1=$x;
		$this->y1=$y;
	}
	public function display()
	{
		echo "Value at x is" . $this->x1;	
		echo "Value at y is" . $this->y1;
	}
}
$obj=new method_over();
$obj->accept(90,90);
$obj->display();


?>
</body>
</html>