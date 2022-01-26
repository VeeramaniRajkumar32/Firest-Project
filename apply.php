<?php include('include/dbconn.php');

    $id = $_REQUEST['userID'];
    $jobid = $_REQUEST['jobID'];

    //var_dump($_REQUEST);
    $sql2 = "INSERT INTO applies (jobid,seekerid,status) VALUES ('$jobid','$id','0')";
    if($conn->query($sql2)){
        header("location: seeker_page.php?id=$id");
    }else {
       // echo  $sql2;
    }

?>