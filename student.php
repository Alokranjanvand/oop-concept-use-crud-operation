<?php include "database.php"; ?>
<!DOCTYPE html5>
<head>
    <title>Develope By Alok Ranjan</title>    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
</head>


<!-- Bootstrap CSS -->
<?php
    $srv = new database();
    if(isset($_REQUEST['delete'])){
        $query = "delete from student where id=".$_REQUEST['delete'];
        $srv->delete($query);
        header("location:student.php");
    }
    
    $query = "select * from student";
    $student = $srv->select($query);
    
?> 
<div class="container">
    <h2 align='center'>Student System</h2>
    <a href="student-add.php" class="btn btn-primary">Add New Record</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>City</th>
                <th>Age</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>

        <tbody>
            <?php
                while($record = $srv->fetch($student)){
                    echo "<tr>";
                    echo "<td>".$record['name']."</td>";
                    echo "<td>".$record['city']."</td>";
                    echo "<td>".$record['age']."</td>";
                    echo "<td><a href='student.php?delete=".$record['id']."'>Delete</a></td>";
                    echo "<td><a href='student-edit.php?id=".$record['id']."'>Edit</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr><td colspan="5">Total Records : <?php echo $srv->num_rows($student); ?></td></tr>
        </tfoot>
    </table>

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