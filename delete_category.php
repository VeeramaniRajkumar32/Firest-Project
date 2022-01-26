<?php
    include('include/dbconn.php'); 

    $id = $_REQUEST['id'];  

    $sql4 = "SELECT * FROM category";
    $result = $conn->query($sql4);
    $row=$result->fetch_assoc();
        
    $sql5 = "DELETE FROM category WHERE id='$id'";                                         
    if($conn->query($sql5) === TRUE){
        header("Location: category1.php");
    }
?>
