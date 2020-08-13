<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript">
        function ValidatePassword() {
            var password = document.getElementById("txtPassword").value;
            var confirmPassword = document.getElementById("txtConfirmPassword").value;
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        }
    </script>


</head>
<body>




<div class= "container card shadow p-3 mb-5 mt-5 bg-white rounded" style="width:400px">
    <form id="myForm" class= "card-body" action="display.php" method="post" onsubmit="return validateForm()">

        <h1 class="text-center"> Register </h1>

        <div class="form-group">
        <label for="name"><b>Name</b></label>
        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name " required >
        </div>

        <div class="form-group">
        <label for="email"><b>Email</b></label>
        <input type="text" class="form-control" placeholder="Enter Email" name="email" id="email" required>
        </div>

        <div class="form-group">
        <label for="Phone Number"><b>Phone Number</b></label>
        <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone" id="phone" required>
        </div>

        <div class="form-group">
        <label for="Age"><b>Age</b></label>
        <input type="number" class="form-control" placeholder="Enter Your Age" name="age" id="age" min="1" max="110" required>
        </div>

        <div class="form-group">
        <label for="pw"><b>Password</b></label>
        <input type="password" class="form-control" id="txtPassword" placeholder="Enter Password" name="pw" id="pw" required>
        </div>

        <div class="form-group">
        <label for="cpw"><b>Repeat Password</b></label>
        <input type="password" class="form-control" id="txtConfirmPassword" placeholder="Confirm Password" name="cpw" id="cpw" required>
        </div>

        <div class="form-group text-center">
        <button type="submit" onclick="return ValidatePassword()" name = "submit" class="registerbtn btn btn-primary">Register</button>
        </div>

    </form>
</div>

</body>
<script src="js/script.js"></script>
</html>