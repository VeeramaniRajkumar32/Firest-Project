<?php 
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM companyreg";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
        
    $sql = "DELETE FROM companyreg WHERE id = '$id' ";                                         
    if($conn->query($sql) === TRUE) {
        header('location:company-profile.php');
    }else {
        echo "no";
    }

?>