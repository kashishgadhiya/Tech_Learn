<?php
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);


$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "tech_learn";



$conn = @mysqli_connect($db_host, $db_user, $db_password, $db_name);

$name = isset($_POST['Cname']) ? $_POST['Cname'] : "";
$subject = isset($_POST['Csub']) ? $_POST['Csub'] : "";
$email = isset($_POST['Cemail']) ? $_POST['Cemail'] : "";
$msg = isset($_POST['Cmsg']) ? $_POST['Cmsg'] : "";

if (!empty($name) && !empty($subject) && !empty($email) && !empty($msg)) {
    $sql = "INSERT INTO `techlearn`(`name`, `subject`, `email`, `message`) VALUES ('$name','$subject','$email' ,'$msg') ";
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Record inserted successfully");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
