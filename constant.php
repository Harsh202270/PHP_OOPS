<html>
<body>
<?php
class constantchk
{
	const a=10;
	const b=20;
	public $x,$y;
}
$obj=new constantchk();
$obj->x=constantchk::a;
$obj->y=constantchk::b;

echo "<h1>Constant is calling.</h1> ";
echo "<h1>". $obj->x ."</h1>";
echo "<h1>". $obj->y ."</h1>";
?>
</body>
</html>