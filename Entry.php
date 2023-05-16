<?php
require_once('config.php');
function isValidNumber(string $s){    
    if(strlen($s)==11)
    {
        if(is_numeric($s) && $s[0]=='0' && $s[1]=='1')
            return true;
    }
    return false;
}

function isValidPassport(string $s){    
    if(strlen($s)==12)
    {
        return true;
    }
    return false;
}

function isValidNID(string $s){    
    if(strlen($s)==10)
    {
        if(is_numeric($s))
            return true;
    }
    return false;
}


if (isset($_POST["FullName"])) {
    
    $name = $_POST['FullName'];
    $date = $_POST['date'];
    $phone = $_POST['phone'];
    $passport = $_POST['passport'];
    $nid = $_POST['nid'];
    $district = $_POST['district'];


    $sql = "INSERT INTO `entry`(`name`, `date`,`phone`, `passport`, `nid`, `district`) VALUES('$name','$date',$phone,'$passport','$nid','$district')";
    
    //echo $phone;

    if(isValidNumber($phone) && isValidPassport($passport) && isValidNID($nid))
    {
        if ($conn->query($sql) === TRUE ) 
        {
            echo "<script>alert('User Submitted Successfully');</script>";
    
        }
    }
    else
    {
        echo "<script>alert('Validation Failed');</script>";
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
    <link rel="stylesheet" href="style.css">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap link -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- font awesome -->

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;500&display=swap" rel="stylesheet">
    <!-- google fonts -->
</head>

<body>

    <div class="entry">
        <div class="container">
            <center>
            <div class="main-text">
            <h1>Entry Form</h1>
            <p>Fill up the form with correct value</p>
            </div>
            <div class="row">
                <!-- <div class="col-md-12 py-6 py-md-0"> -->
                    <form action="" method="post">

                        <hr class="mb-1">
                        <div class="col-md-6">
                        <label for="name"><b>Name</b></label>
                        <input type="text" placeholder="Enter Full Name" class="form-control" name="FullName" required>
                        </div>
                          
                        
                        <div class="col-md-6">
                        <label for="date"><b>Date Of Birth</b></label>
                        <input type="date" placeholder="Enter Your Date of Birth" class="form-control" name="date" required>
                        </div>

                        <div class="col-md-6">
                        <label for="phone"><b>Phone Number</b></label>
                        <input type="text" placeholder="Enter Phone Number" class="form-control" name="phone" required>
                        </div>        

                        <div class="col-md-6">
                        <label for="passport"><b>Passport</b></label>
                        <input type="text" placeholder="Enter Passport Number" class="form-control" name="passport" required>
                        </div>
                          

                        <div class="col-md-6">
                        <label for="nid"><b>NID</b></label>
                        <input type="text" placeholder="Enter NID Number" class="form-control" name="nid" required>
                        </div>
                          

                        <div class="col-md-6">
                        <label for="district"><b>District</b></label>
                        <select class="form-control" name="district">
                            <option selected value="Dhaka">Dhaka</option>
                            <!-- <option value="Dhaka">Dhaka</option> -->
                            <option value="Chattogram">Chattogram</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Barisal">Barisal</option>
                        </select>
                        </div>  
                        <br>

                        <button class="btn">Submit</button>
                        
                        
                        <!-- <input class="btn btn-primary" type="submit" id="submit" name="create" value="submit"> -->
                    </form>
                <!-- </div> -->
            </div>
                    
            </center>
            <hr class="mb-1">
            
        </div>
        <center>
            <a href="index.php">
            <button class="btn">Home</button>
            </a>
        </center>

    </div>

    
</body>

</html>