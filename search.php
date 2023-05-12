
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container my-5">
    <form method="post">
        <input type="text" placeholder="Search data" name="search">
        <button class="btn btn-primary btn-sm" name="submit">Search</button>
    </form>
    <hr class="mb-3">
    <a href="index.php">
    <button class="btn btn-primary btn-sm">Home</button>
    </a>
    <hr class="mb-3">
</div>

<div class="container my-5">
    <table class="table">
        <?php
        if(isset($_POST['submit']))
        {
            $search= $_POST['search'];
            $sql= "Select * from `entry` where id='$search' or name='$search' or name='$search'
            or passport='$search' or nid='$search' or district='$search'";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                if(mysqli_num_rows($result)>0)
                {
                    echo '<thead>
                    <tr>
                        <th>Name</th>
                        <th>Passport</th>
                        <th>NID</th>
                        <th>District</th>
                    </tr>
                    </thead>';

                    while($row= mysqli_fetch_assoc($result)){;
                    echo '<tbody>
                    <tr>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['passport'].'</td>
                        <td>'.$row['nid'].'</td>
                        <td>'.$row['district'].'</td>     
                    </tr>
                    </tbody>';
                    }
                }
                else
                {
                    echo '<h2 class=text-danger >Data Not Found</h2>';
                }
                
            }
            
        }

        

        ?>

    </table>
</div>

    
</body>
</html>