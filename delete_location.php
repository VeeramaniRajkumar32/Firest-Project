<?php
    include('include/dbconn.php'); 

    $id = $_REQUEST['id'];  

    $sql4 = "SELECT * FROM location";
    $result = $conn->query($sql4);
    $row=$result->fetch_assoc();
        
    $sql5 = "DELETE FROM location WHERE id='$id'";                                         
    if($conn->query($sql5) === TRUE){
        header("Location: location.php");
    }
?>
