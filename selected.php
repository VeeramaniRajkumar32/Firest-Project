<?php include('include/dbconn.php');

    $id = $_REQUEST['id'];
    $cid = $_REQUEST['cid'];
    $aplyid = $_REQUEST['aplyid'];
    $sql = "UPDATE applies SET status = '1' WHERE id = '$aplyid' ";
    if($conn->query($sql)){
        header("location:seeker_view_profile.php?id=$id .'&cid'.$cid ");
    }else {
       echo  $sql;
    }

?>