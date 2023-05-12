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

    //echo 'Hit process';

    if ($conn->query($sql) === TRUE) {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("WOW!","Message!","success");';
        echo '}, 1000);</script>';
    } else {
        //echo 'There were errors while Saving';
    }
} else {
    //echo 'No Data';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <form action="" method="post">
                        <h1>Entry Form</h1>
                        <p>Fill up the form with correct value</p>

                        <hr class="mb-3">
                        <label for="name"><b>Name</b></label>
                        <input type="text" name="FullName" required>

                        <label for="date"><b>Date Of Birth</b></label>
                        <input type="date" name="date" required>


                        <label for="passport"><b>Passport</b></label>
                        <input type="text" name="passport" required>

                        <label for="nid"><b>NID</b></label>
                        <input type="text" name="nid" required>

                        <label for="district"><b>District</b></label>
                        <input type="text" name="district" required>
                        <hr class="mb-3">

                        <button class="btn btn-primary">Submit</button>
                        
                        <!-- <input class="btn btn-primary" type="submit" id="submit" name="create" value="submit"> -->
                    </form>
                    <hr class="mb-3">
                    <a href="index.php">
                    <button class="btn btn-primary">Home</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>