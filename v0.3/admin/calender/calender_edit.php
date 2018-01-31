<?php
require "../mysql.php";
$query="SELECT * FROM `calender`;";
$result=mysqli_query($connection,$query);
$rows=array();
while($row= mysqli_fetch_assoc($result)){
    array_push($rows, $row);
}
mysqli_free_result($result);
mysqli_close($connection); 
$calender="";
?>



    <script>


    </script>
