<?php
// session_start();
include_once("connection.php");

//redirect user to login page if they have not login
// if (!isset($_SESSION['logged_user']) || !$_SESSION['logged_user']) {
//     header("location:TODO_Register.php");
// }
include_once("TODO_create.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js" defer></script>
    <script src="js/popper.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
</head>
<style>
    /* body {
        color: burlywood;
        background-size: cover;
        font-family: serif;
    }

    div {
        border-radius: 24px;
        background: whitesmoke;
        color: burlywood;
        height: 350px;
        width: 600px;
    }

    .todo {
        color: red;

    }

    view {
        border: greenyellow;
        border-radius: 5px;
    } */
</style>

<?php if (isset($_SESSION['message'])) : ?>
    <div class="msg">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>

<body>
    <div>
        <center>
<h1 class="text-center text-info mb-5">Welcome to St. Faith Anglican Church</h1>

            <h3 class="text-primary">Register Church Activities Here</h3>
            <form action="TODO_index.php" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50" name="TODO_Name" placeholder="Name of church Activities" required>
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control w-50" name="TODO_Date" placeholder="Date of church Activities" required>
                </div>
                <div class="mb-3">
                    <input type="time" class="form-control w-50" name="TODO_time" placeholder="Time of church Activities" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="form-control w-50 btn btn-primary" name="submit">Save</button>
                </div>
            </form>
            <br>
            <p><a href="TODO_Read.php"> view Church Activities</a></p>
        </center>
    </div>
</body>

</html>