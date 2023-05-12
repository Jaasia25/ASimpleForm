<?php
require_once('config.php');


if (isset($_POST["FullName"])) {
    //echo 'hitttttttttttttt';
    $name = $_POST['FullName'];
    $date = $_POST['date'];
    $passport = $_POST['passport'];
    $nid = $_POST['nid'];
    $district = $_POST['district'];

    $sql = "INSERT INTO `entry`(`name`, `date`, `passport`, `nid`, `district`) VALUES('$name','$date','$passport','$nid','$district')";
    // $stmtinsert = $db->prepare($sql);
    // $result = $stmtinsert->execute([$name, $date, $passport, $nid, $district]);

    echo 'Hit process';

    if ($conn->query($sql) === TRUE) {
        //echo 'Successfully Saved';
    } else {
        //echo 'There were errors while Saving';
    }
} else {
    //echo 'No Data';
}
?>