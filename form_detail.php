<?php
$fullname=$_POST["name"];
$gender=$_POST["gender"];
$country=$_POST["country"];
echo "Name: ". $fullname. "<br>";
echo "Gender: ". $gender . "<br>";
if(!empty($_POST['lang'])) { 
    echo "Hobbies :";   
    foreach($_POST['lang'] as $hobbies){
        echo" ".$hobbies.', ';
    }}
echo "<br>Country: ". $country. "<br>";
// $servername="localhost";
// $username="root";
// $password="";
// $dbname="form";

// $conn=mysqli_connect($servername, $username, $password, $dbname);

// if(!$conn)
// {
//     die("Mysql connection failed :".mysqli_connect_error());
// }

// $sql = "SELECT name, gender, hobbies, country FROM detail";
// $result= mysqli_query($conn, $sql);

// if(mysqli_num_rows($result)>0) {
//     while($row= mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"]."- Name: " . $row["name"]." <br> Gender: "
//          . $row["gender"]. "<br> Hobbies: " . $row[""] . "<br> Country: " . $row["country"];
//     }
// } else {
//     echo" 0 students";
// }
// mysqli_close($conn);
?>