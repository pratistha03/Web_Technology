<?php
$Firstname=$_POST["first_name"];
$lastname=$_POST["last_name"];
$email=$_POST["email"];
echo $Firstname;
echo $lastname . "<br>";
echo $email;
echo"<br>";
$servername="localhost";
$username="root";
$password="";
$dbname="student";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Mysql connection failed :".mysqli_connect_error());
}
else{
    echo "connection successful";
}

$sql = "insert into student_info(fname, lname, email)
values('$Firstname','$lastname','$email')";

if(mysqli_query($conn, $sql)){
    echo"New student information saved successfully <br>";
}
else{
    echo"Error:" .$sql."<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>