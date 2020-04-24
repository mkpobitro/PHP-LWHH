<?php
require_once "inc/functions.php";
$blank = '';
$info  = '';
$error = $_POST['error'] ?? 0;
$task  = $_GET['task'] ?? 'report';

if ( 'delete' == $task ) {
    $id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_STRING );
    if ( $id > 0 ) {
        deleteStudent( $id );
        header( 'location: index.php?task=report' );
    }
}
if ( 'seed' == $task ) {
    seed();
    $info = "Seeding Completed";
}
$fname = '';
$lname = '';
$roll  = '';
if ( isset( $_POST['submit'] ) ) {
    // $fname = $_POST['fname'];
    // $lname = $_POST['lname'];
    // $roll = $_POST['roll'];
    $fname = filter_input( INPUT_POST, 'fname', FILTER_SANITIZE_STRING );
    $lname = filter_input( INPUT_POST, 'lname', FILTER_SANITIZE_STRING );
    $roll  = filter_input( INPUT_POST, 'roll', FILTER_SANITIZE_STRING );
    $id    = filter_input( INPUT_POST, 'id', FILTER_SANITIZE_STRING );

    if ( $id ) {
        if ( $fname != '' && $lname != '' && $roll != '' ) {
            $result = updateStudent( $id, $fname, $lname, $roll );
            if ( $result ) {
                header( 'location: index.php?task=report' );
            } else { $error = 1;}
        }

    } else {
        if ( $fname != '' && $lname != '' && $roll != '' ) {
            $result = addStudent( $fname, $lname, $roll );
            if ( $result ) {
                header( 'location: index.php?task=report' );
            } else { $error = 1;}

        } else { $blank = '<p class="text-danger">| All Fields Must be Required</p>';}
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>
<body>
    <div class="container crud-project m-auto w-50">
        <div class="row">
            <div class="project-heading mt-5">
                <h1>Project 2 | CRUD</h1>
                <p>A simple project to perform CRUD operations using plain files and PHP</p>
                <?php include_once 'inc/templates/nav.php';?>
                <hr>
                <?php if ( $info != '' ) {echo "<p>{$info}</p>";}?>
            </div>
        </div>

        <?php if ( 1 == $error ): ?>
        <div class="row">
            <div class="generate-report w-100">
                <blockquote class="text-danger">| Duplicate Roll Number</blockquote>
            </div>
        </div>
        <?php endif;?>

        <!-- Report All student -->
        <?php if ( "report" == $task ): ?>
        <div class="row">
            <div class="generate-report w-100">
                <?php generateReport();?>
                <!-- <div><pre><?php Raw();?></pre></div> -->
            </div>
        </div>
        <?php endif;?>

        <!-- Add New Student -->
        <?php if ( 'add' == $task ): ?>
        <?php if ( $blank != '' ) {echo $blank;}?>
        <div class="row">
            <div class="add-new w-75">
                <form action="index.php?task=add" method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" class="form-control" value="<?php echo $fname; ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" class="form-control" value="<?php echo $lname; ?>">

                    <label for="roll">Roll</label>
                    <input type="number" id="roll" name="roll" class="form-control" value="<?php echo $roll; ?>">

                    <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                </form>

            </div>
        </div>
        <?php endif;?>



        <!-- Student Update Form -->
        <?php if ( 'edit' == $task ): ?>
    <?php $id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_STRING );
$student      = getStudent( $id );

if ( $student ): ?>
    <div class="row">
        <div class="add-new w-75">
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" class="form-control" value="<?php echo $student['fname']; ?>">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control" value="<?php echo $student['lname']; ?>">

                <label for="roll">Roll</label>
                <input type="number" id="roll" name="roll" class="form-control" value="<?php echo $student['roll']; ?>">

                <button type="submit" name="submit" class="btn btn-primary mt-3">Update</button>
            </form>

        </div>
    </div>
<?php endif;
endif;?>

    </div>


</body>
</html>