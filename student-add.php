<?php include "database.php"; ?>
<!DOCTYPE html5>
<head>
    <title>Develope By Alok Ranjan</title>   
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
</head>
<body>
<?php
    if(isset($_REQUEST['submit']) and $_REQUEST['submit']=="Save"){
        $srv = new database();
        array_pop($_POST);
        $fields = implode(",",array_keys($_POST));
        $values = "'".implode("','",array_values($_POST))."'";
        $srv->insert('student',$fields,$values);    
        header("location:student.php");
    }
    
?>
<!-- Bootstrap CSS -->

<div align="center">
    <h2 align='center'>Student System</h2>		
    <form class="form-horizontal" method="post">
        <div class="form-group" >
            <label for="first_name" align="center" class="col-xs-5 control-label">First Name</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">Age</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="age">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">City</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="city">
            </div>
        </div>
        Gender <input type="radio" name="gender" value="M"> Male <input type="radio" name="gender" value="F"> Female
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label"></label>
            <div class="col-xs-3">
                <input type="submit" name="submit" value="Save" class="form-control" id="last_name">
            </div>
        </div>
    </form>

</div>
		
<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
</body>