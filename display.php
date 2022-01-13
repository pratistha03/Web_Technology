<?php
$servername="localhost";
$username="root";
$password="";
$dbname="student";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Mysql connection failed :".mysqli_connect_error());
}

$sql = "SELECT id, fname, lname FROM student_info";
$result= mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0) {
    while($row= mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]."- Name: " . $row["fname"]." " . $row["lname"]. "<br>";
    }
} else {
    echo" 0 students";
}
mysqli_close($conn);
?>