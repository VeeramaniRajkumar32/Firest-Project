<?php
    include('include/dbconn.php'); 

    $id = $_REQUEST['id'];  

    $sql4 = "SELECT * FROM jobtype";
    $result = $conn->query($sql4);
    $row=$result->fetch_assoc();
        
    $sql5 = "DELETE FROM jobtype WHERE id='$id'";                                         
    if($conn->query($sql5) === TRUE){
        header("Location: jobtype.php");
    }
?>
