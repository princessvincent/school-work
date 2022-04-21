<?php
include_once('connection.php');
// include_once('TODO_Register_process.php')
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        /* body {
            color: #999;
            font-family: 'Roboto', sans-serif;
            background-size: cover;

        }

        .form_group {
            color: white;
            border-radius: 35px;
            background: grey;
            width: 700px;
            height: 600px;

        } */
    </style>
    <title>Authentication Page</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js" defer></script>
    <script src="js/popper.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
</head>

<body>
    <div class="form_group">
        <h1 class="text-center text-primary"> Register Here</h1>
        <center>
            <!-- <h3> <span> fill up this form and start chatting with your friends</span></h3> -->
            <form action="TODO_login.php" method="POST">
                <div class="mb-3">

                    <input type="text" class="form-control w-50" name="first_name" placeholder="first Name" required>
                </div>
                <div class="mb-3">

                    <input type="text" class="form-control w-50" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="mb-3">

                    <input type="text" class="form-control w-50" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">

                    <input type="email" class="form-control w-50" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">

                    <input type="number" class="form-control w-50" name="tel" placeholder="Telephone" required>
                </div>
                <div class="">

                    <input type="password" class="form-control w-50" name="password" placeholder="Password" required>
                </div>


                <div class="">
                    <button type="submit" name="register" class="btn btn-primary w-50"> Register</button>
                </div>


            </form>

            <p>already Registered <a href="TODO_login.php"> login Here </a></p>
        </center>
    </div>
</body>
</head>

</html>