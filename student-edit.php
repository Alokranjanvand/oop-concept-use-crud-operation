<?php include "database.php"; ?>
<!DOCTYPE html5>
<head>
    <title>Develope By Alok Ranjan</title>   
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
</head>
<body>
<?php
    $srv = new database();
    $query = "select * from student where id=".$_REQUEST['id'];
    $student = $srv->select($query);
    $record = $srv->fetch($student);
    if(isset($_REQUEST['submit']) and $_REQUEST['submit']=="Save"){
        array_pop($_POST);
        
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $sets ="";
        //update student set name='aa',age='3',city='333' where id='3';
        foreach($_POST as $k=>$v){
            $sets = $sets.$k."='".$v."',";
        }
        echo $sets =  rtrim($sets,",");
        $srv->update('student',$sets,"id=".$_POST['id']);    
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
                <input type="text" class="form-control" name="name" value="<?php echo $record['name']; ?>">
                <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">Age</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="age" value="<?php echo $record['age']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">City</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="city" value="<?php echo $record['city']; ?>">
            </div>
        </div>
        Gender
        <?php
            if($record['gender']=='M'){
               echo "<input type='radio' name='gender' checked value='M'> Male <input type='radio' name='gender' value='F'> Female"; 
            }else if($record['gender']=='F'){
                echo "<input type='radio' name='gender' value='M'> Male <input type='radio' name='gender' checked value='F'> Female";
            }else{
                echo "<input type='radio' name='gender' value='M'> Male <input type='radio' name='gender'  value='F'> Female";
            }
                
                
        ?> 
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