<body>
<?php
 $con=mysqli_connect("sql7.freesqldatabase.com","sql7583905","SYadrEy6EC","sql7583905");
 if (mysqli_connect_errno())
 {
   echo "Failed To Connect To MySQL" . mysqli_connect_error();
 }
 $result = mysqli_query($con,"SELECT * FROM student");
 while($row = mysqli_fetch_array($result)){
    echo $row['name'] . " " .$row['mobile'] . " " .$row['address'];
    echo "<br>";
 }
 mysqli_close($con);

?>
</body>