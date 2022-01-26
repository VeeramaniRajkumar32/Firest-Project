<?php include('include/dbconn.php');

    $id = $_REQUEST['id'];
    $sql = "UPDATE companyreg SET status = '1' WHERE id = '$id' ";
    if($conn->query($sql)){
        header('location:index.php');
    }else {
       echo  $sql;
    }

?>