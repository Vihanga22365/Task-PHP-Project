
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Interview Project</a>
  <form class="form-inline" action="display.php" method="post">
    <input class="form-control mr-sm-2" type="text" name="valueTosearch" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="search" value="filter">Search</button>
  </form>
</nav>
<br>
<div class="container">
<form class="form-inline" action="display.php" method="post">
    <br>
    <input class="form-control mr-sm-2" type="number" name="age1" placeholder="Age" aria-label="Search">
    <h5> &nbsp To &nbsp&nbsp</h5>
    <input class="form-control mr-sm-2" type="number" name="age2" placeholder="Age" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="searchAge" value="filter">Search Age</button>
    <br>
</form>
</div>

<br>
<?php

    //Assign variable to all input data
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $pw = $_POST['pw'];
        $cpw = $_POST['cpw'];

    

        //Insert data To database
        if(!empty($name) || !empty($email) || !empty($phone) || !empty($age) || !empty($pw) || !empty($cpw) )
        {
                $host = "localhost";
                $dbUsername = "root";
                $dbPassword = "";
                $dbname = "user";

                $conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $insert = "INSERT INTO register(name,email,phone,age,pw,cpw) VALUES ('$name','$email','$phone','$age','$pw','$cpw')"; 

                if ($conn->query($insert ) === TRUE) 
                {
                    echo "New record created successfully <br>" ;
                } else 
                {
                    echo "Error: " . $insert . "<br>" . $conn->error;
                }
                  
                  $conn->close();
                    
                
        }

        else
        {
            echo "Empty Some Field";
        }


        ?>


        <?php

    }
?>

<?php

//Search Name

if(isset($_POST['search']))
{
    $valueTosearch = $_POST['valueTosearch'];
    $sql = "SELECT * FROM `register` WHERE CONCAT (`name`) LIKE '%".$valueTosearch. "%';";
    $result = filterTable($sql);
}

else
{
    $sql = "SELECT * FROM register";
    $result = filterTable($sql);
}

function filterTable($sql)
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "user";

    $conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
    $filter_Result = mysqli_query($conn,$sql);
    return $filter_Result;
}


?>

<?php
//Search Age Between

if(isset($_POST['searchAge']))
{
$age1 = $_POST['age1'];
$age2 = $_POST['age2'];
$sql = "SELECT * FROM `register` WHERE CONCAT (`age`) BETWEEN $age1 AND $age2 ;";
$result = filterTable($sql);
}

else
{
$sql = "SELECT * FROM register";
$result = filterTable1($sql);
}

function filterTable1($sql)
{
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "user";

$conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
$filter_Result = mysqli_query($conn,$sql);
return $filter_Result;
}


?>



<?php

//Display Table View

echo "<table class='table'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th scope = 'col' > ID </th>";
echo "<th scope = 'col'> Name</th>";
echo "<th scope = 'col'> Email </th>";
echo "<th scope = 'col'> Phone </th>";
echo "<th scope = 'col'> Age </th>";
echo "<th scope = 'col'> Password </th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";


while($row = mysqli_fetch_array($result)):
    echo "<tr>";
    echo "<td scope = 'row'>" . $row["uid"] . "</td>"
        . "<td>" . $row["name"] . "</td>"
        . "<td>" . $row["email"] . "</td>"
        . "<td>" . $row["phone"] . "</td>"
        . "<td>" . $row["age"] . "</td>"
        . "<td>" . $row["pw"] . "</td>";
    echo "</tr>";
endwhile;
echo "</tbody>";
echo "</table>";
?>

</body>
</html>