<?php
if(isset($_post['name'])){

$server ="localhost";
$username="root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("cophonennection to this database failed due to".mysqli_connect_error());
}

// echo "sucess connection to the db";


$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
// $phone = $_POST['phone'];
$description = $_POST['description'];

$sql = "INSERT INTO `trip`.`trip` ( `name`, `gender`, `age`, `email`, `description`, `date`) VALUES ($name, $gender, $age,$email, $description, current_timestamp());";

// $sql = "INSERT INTO `trip` (`name`, `gender`, `age`, `email`, `phone`, `description`, `date`) VALUES ($name, $gender, $age,$email,$phone, $description, current_timestamp());";

    echo "$sql";

if($con->query($sql) == true){
    echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">        
</head>
<body>

<img class="bg" src="bg.jpg" alt="dtu image">

<div class="container">


<h1>welcome to dtu trip form</h1>
<p>enter your details to confirm your participation in the trip</p>
<p class="submitmsg">you have successfully submitted the form. we are happy to see you joining us. </p>


<form action="index.php" method="post">

 <input type="text" name="name" id="name" placeholder="enter your name">
 <input type="text" name="gender" id="gender" placeholder="your gender">
 <input type="text" name="age" id="age " placeholder="enter your age">
 <input type="email" name="email" id="email" placeholder="enter your mail id">
 <!-- <input type="text" name="phone" id="phone" placeholder="your phone no."> -->

 <!-- <input type="text" name="phone" id="phone" placeholder="enter your phone no."> -->
 <textarea name="description" id="description" cols="30" rows="10" 
 placeholder="enter any other information"></textarea>
<button class="btn">submit</button>

</form>


</div>


    <script src="index.js"></script>

</body>
</html>