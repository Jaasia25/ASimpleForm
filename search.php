
<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Entry</title>
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
<div class="search">
    <!-- <div class="container-bar" id="searchbar"> -->
        <form class="d-flex" method="post">
            <input class="form-control me 2" type="text" placeholder="Search data" name="search">
            <button class="btn" name="submit">Search</button>
        </form>
    <!-- </div> -->

    <!-- <div class="container-table" id="searchtable"> -->
        <table class="table">
            <?php
            if(isset($_POST['submit']))
            {
                $search= $_POST['search'];
                $sql= "Select * from `entry` where id='$search' or name='$search' or phone='$search'
                or passport='$search' or nid='$search' or district='$search'";
                $result=mysqli_query($conn,$sql);
                if($result)
                {
                    if(mysqli_num_rows($result)>0)
                    {
                        echo '<thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone No.</th>
                            <th>Passport</th>
                            <th>NID</th>
                            <th>District</th>
                        </tr>
                        </thead>';

                        while($row= mysqli_fetch_assoc($result)){;
                        echo '<tbody>
                        <tr>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['phone'].'</td>
                            <td>'.$row['passport'].'</td>
                            <td>'.$row['nid'].'</td>
                            <td>'.$row['district'].'</td>     
                        </tr>
                        </tbody>';
                        }
                    }
                    else
                    {
                        echo '<h2>Data Not Found</h2>';
                    }
                    
                }
                
            }
            ?>

        </table>
    <!-- </div> -->

    <center>
    <!-- <div class="container-home" id="home1"> -->
        <a href="index.php">
        <button class="btn">Home</button>
        </a>
    <!-- </div> -->
    </center>

</div>


<!-- <script src="js/javascripy.js"></script> -->
</body>
</html>