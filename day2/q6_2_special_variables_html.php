

<!DOCTYPE html>
<html>
<head>
 <title>Report card</title>
</head>
<body>
<form action="q6_2_special_variables_html.php" method="POST">
 <input type="text" name="name" placeholder="Name"><br>
 <input type="number" name="sub1" placeholder="Marks out of 100"><br>
 <input type="number" name="sub2" placeholder="Marks out of 100"><br>
 <input type="number" name="sub3" placeholder="Marks out of 100"><br>
 <input type="number" name="sub4" placeholder="Marks out of 100"><br>
 <input type="number" name="sub5" placeholder="Marks out of 100"><br>
 <input type="submit" value="Submit" name="submit">
<?php
$name=$_POST['name'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];
$sub5=$_POST['sub5'];
$total=$sub1+$sub2+$sub3+$sub4+$sub5;
$percentage=($total/500)*100;
echo "<br>Name of student: $name<br>";
echo "Marks in Each Subject<br>";
echo "Subject 1: $sub1<br>";
echo "Subject 2: $sub2<br>";
echo "Subject 3: $sub3<br>";
echo "Subject 4: $sub4<br>";
echo "Subject 5: $sub5<br>";
echo "Total Marks Obtained: $total<br>";
echo "Total Marks: 500<br>";
echo "Percentage: $percentage%";
?>
</form>
</body>
</html>