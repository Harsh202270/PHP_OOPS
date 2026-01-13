<?php

interface Inter
{

	const a="This is constant value";

	public function disp();
}
interface Inter1
{

	const a="This is constant value";

	public function disp1();
}
class A implements Inter,Inter1
{

	function show()
	{

		echo Inter::a."<br/>";
	}

		public function disp()
		{

		echo "Inside the disp function";
		}
		public function disp1()
		{

		echo "Inside the disp function";
		}
}

$a=new A();

$a->show();

$a->disp();

?>
