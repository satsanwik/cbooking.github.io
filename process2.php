<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='satwik@15160521';
$db='project';

$db=new mysqli($mysql_host,$mysql_user,$mysql_password,$db) or die();



$match_no=$_POST['match_no'];
$cu_id=$_POST['cu_id'];
//$seat=$_POST['seat[]'];
//$i=count(seat);
echo $match_no."<br>";
//echo $cu_id."<br>";

$result1 = mysqli_query($db,"select * from customer where cu_id='$cu_id'") or die("failed to query database ".mysqli_error());
$row1 = mysqli_fetch_array($result1);
if($row1['cu_id'] == $cu_id){
	echo "identified the customer<br> ";
	echo $row1['cu_id'];
}else{
	echo "invalid customer";
}








foreach ($_POST['seat'] as $seat) { 
		
		$result2 = mysqli_query($db,"select * from seat where match_no = '$match_no' and seat_no = '$seat' and availbility=1 ") or die("failed to query database ".mysqli_error());
		//$row2 = mysqli_fetch_array($result2);
        if($result2->num_rows > 0){
			echo "seat is already booked<br> ";
		}else{
			$result = mysqli_query($db,"UPDATE seat SET availbility=1 where match_no = '$match_no' and seat_no = '$seat'") or die("failed to query database ".mysqli_error());
			$result = mysqli_query($db,"UPDATE seat SET cu_id='$cu_id' where match_no = '$match_no' and seat_no = '$seat'") or die("failed to query database ".mysqli_error());
			header('location:submit.html');
		}
		
		
		
		
	}       








?>