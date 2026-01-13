<?php
	include 'connect.php';
	class doctor  extends connect
	{		
		public function __construct()
		{
			parent::__construct();
		}
		public function save()
		{
                          $f=0;
               if($this->db_handle)
                      {
                        $result=mysqli_query($this->db_handle,"select * from doctors");
                        while($db_field=mysqli_fetch_assoc($result))
                        {
                          if($db_field['did']==$_POST["t1"])
                            {
                                $f=1;
                                break;
                           }
 
                       }
			if($f==0)
			{
			     $s="insert into doctors values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]', '$_POST[t5]','$_POST[t6]','$_POST[t7]')";                                                       
			     mysqli_query($this->db_handle , $s);
			     echo"<script language=javascript> alert('Record Save')</script>";
		             echo"<script>window.open('Doctor.html',_self)</script>";	  			  			
			}
                       else
                             {
                             echo"<script>alert('Doctor id already exit')</script>";
                             echo"<script>window.open('Doctor.html','_self')</script>";
                      	     }  
                         }  
			else
				echo"<script language=javascript> alert('Database not found')</script>";
		}
		public function delete()
		{
			if($this->db_handle)
			{
			     $s="delete from doctors where did='$_POST[t1]'";                                                       
			     mysqli_query($this->db_handle , $s);
			     echo"<script language=javascript> alert('Record Deleted')</script>";
				  			
			}
			else
				echo"<script language=javascript> alert('Database not found')</script>";
		}
		public function update()
		{
			if($this->db_handle)
			{
			     $s="update doctors set dnm='$_POST[t2]',dmob='$_POST[t3]', demail='$_POST[t4]',dadd='$_POST[t5]', dpwd='$_POST[t6]',dusnm='$_POST[t7]' where did='$_POST[t1]'";                                                       
			     mysqli_query($this->db_handle , $s);
			     echo"<script language=javascript> alert('Record Update')</script>";
				  			
			}
			else
				echo"<script language=javascript> alert('Database not found')</script>";
		}
                 public function allsearch()
		    {		
			if($this->db_handle)
			{
			        $result=mysqli_query($this->db_handle, "select * from doctors");
				print "<table border=1>
	 			<tr>
					<th> Doctors ID</th>
					<th> Doctors Name</th>
					<th>Doctors Mobile</th>
					<th>Doctor Email</th>
					<th>Doctor Address</th>
					<th>Doctor Passward</th>
					<th>Doctor Username </th>
				</tr>";
				while($db_field=mysqli_fetch_assoc($result))
				{
					print "<tr>";
					print "<td>".$db_field['did']."</td>";
					print "<td>".$db_field['dnm']."</td>";
					print "<td>".$db_field['dmob']."</td>";
					print "<td>".$db_field['demail']."</td>";
					print "<td>".$db_field['dadd']."</td>";
					print "<td>".$db_field['dpwd']."</td>";
                                        print "<td>".$db_field['dusnm']."</td>";
 
				}
			   }
                    echo "<body><input type=button value='Print' onclick=window.print()></body>";
                     }
                        public function psearch()
		    {		
			if($this->db_handle)
			{
			        $result=mysqli_query($this->db_handle, "select * from doctors where did='$_POST[t1]'");
				print "<table border=1>
	 			<tr>
					<th>Doctors ID</th>
					<th>Doctors Name ID</th>
					<th>Doctors Mobile</th>
					<th>Doctors Email</th>
					<th>Doctor Address</th>
					<th>Doctor Password</th>
					<th>Doctor Username </th>
				</tr>";
				while($db_field=mysqli_fetch_assoc($result))
				{
					print "<tr>";
					print "<td>".$db_field['did']."</td>";
					print "<td>".$db_field['dnm']."</td>";
					print "<td>".$db_field['dmob']."</td>";
					print "<td>".$db_field['demail']."</td>";
					print "<td>".$db_field['dadd']."</td>";
					print "<td>".$db_field['dpwd']."</td>";
                                        print "<td>".$db_field['dusnm']."</td>";
 
				}
			}
                }       
   }
$ob=new doctor();
if(isset($_REQUEST["b1"]))
	$ob->save();
if(isset($_REQUEST["b2"]))
	$ob->update();
if(isset($_REQUEST["b3"]))
	$ob->delete();
if(isset($_REQUEST["b4"]))
         $ob->allsearch();
if(isset($_REQUEST["b5"]))
         $ob->psearch();
?>