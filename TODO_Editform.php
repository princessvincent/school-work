<?php
include_once("TODO_Edit.php");
?>

<!DOCTYPE html>
<html>
<body>
<h1 class="text-primary text-center">Edit Church Activities</h1>
<form action="TODO_Edit.php" method="GET" style="padding-left: 500px;">
<div class="mb-3">
<input type="hidden" class="form-control w-50" name="ID" value="<?php echo $ID; ?>">
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
<button type="submit" name="Update" class="form-control w-50 btn btn-primary">Update</button>
</div>
 

</form>
</body>


</html>