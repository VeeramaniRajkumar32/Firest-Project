<?php include('include/dbconn.php');

    $id = $_REQUEST['id'];
    $aplyid = $_REQUEST['aplyid'];
    $cid = $_REQUEST['cid'];
    $sql = "UPDATE applies SET status = '2' WHERE id = '$aplyid' ";
    if($conn->query($sql)){
        header("location:seeker_view_profile.php?id=$id&cid=".$cid);
    }else {
       echo  $sql;
    }

?>