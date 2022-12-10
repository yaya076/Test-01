<body>
  <?php
    $con=mysqli_connect("sql7.freesqldatabase.com","sql7583905","SYadrEy6EC","sql7583905");
    if (mysqli_connect_errno())
    {
      echo "Failed To Connect To MySQL" . mysqli_connect_error();
    }

    $name= $_POST['name'];
    $mobile= $_POST['mobile'];
    $address= $_POST['address'];
    $note= $_POST['note'];

    $sql="INSERT INTO student (name, mobile, address, note)
    VALUES('$name','$mobile','$address','$note')";

    mysqli_query($con,$sql);
    echo "Registration is done successffully";

    mysqli_close($con);
  ?>
</body>