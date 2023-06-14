<?php
include_once('../dbConnection.php');
if (isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass']) ){

    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];

    $sql = "INSERT INTO student (stu_name,stu_email,stu_pass) VALUES('$stuname','$stuemail','$stupass')";
    if($conn->query($sql)==TRUE){
        echo json_encode("success");
    } else{
        echo json_encode("fail");
    }
}

if (isset($_POST['stulogemail']) && isset($_POST['stulogpass'])){
    $stulogemail = $_POST['stulogemail'];
    $stulogpass = $_POST['stulogpass'];

    $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email = '$stulogemail' AND stu_pass='$stulogpass' "; 
    $result = $conn->query($sql);
    $row = $result -> num_rows;

    if($row === 1){
        echo json_encode($row);
    } else if($row === 0 ){
        echo json_encode($row);
    }; 
}

?> 