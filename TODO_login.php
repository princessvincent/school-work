<?php
include('TODO_loginpro.php');
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        /* body {
            color: burlywood;
            background-size: cover;
            font-family: serif;
        }*/
.justify{
    text-align: center;
}
        .login1 {
            /* border-radius: 24px; */
            background: cadetblue;
            color: burlywood;
             height: 550px; 
            width: 1000px; 
        } 
    </style>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js" defer></script>
    <script src="js/popper.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>

</head>

<body>

   <div class="justify">
   <div class="login1">
        <center>
            <h1 id="log" class="text-primary">Login Here</h1>

            <form action="TODO_index.php" method="POST">
                <div class="mb-3">

                    <input type="text" class="form-control w-50" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">

                    <input type="password" class="form-control w-50" name="password" placeholder="Password" required>
                </div>
                <div>
                    <button type="submit" name="login" value="Login" class="btn btn-primary">login Here</button>
                </div>
                <p>Forgot Password?<a href="TODO_forgotpass.php">click Here</a></p>

                <p><a href="TODO_Register.php"> Register Here</a></p>

            </form>
        </center>
    </div>
   </div>
    </head>
</body>


</html>