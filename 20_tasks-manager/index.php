<?php
    include_once "config.php";
    $connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
    if ( !$connection ) {
        throw new Exception( "Cannot connect to Database" );
    }
    $query = "SELECT * FROM " . DB_TABLE . " WHERE complete = 0 ORDER BY Date"; //"SELECT * FROM tasks ORDER BY Date"
    $result = mysqli_query( $connection, $query );

    $completeTasksQuery = "SELECT * FROM tasks WHERE complete = 1 ORDER BY Date";
    $completeTasksResult = mysqli_query( $connection, $completeTasksQuery );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo / Tasks</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="main">
        <h1>Tasks Manager</h1>
        <p>This is a sample project for managing our daily tasks. We're going to use HTML, CSS, PHP, JavaScript for this project</p>
        <!-- Completed Tasks -->

        <?php
        if ( mysqli_num_rows( $completeTasksResult ) > 0 ) {?>
                <h4>Completed Tasks</h4>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Id</th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ( $cdata = mysqli_fetch_assoc( $completeTasksResult ) ) {
                            $timestamp = strtotime( $cdata['date'] );
                            $date = date( "jS F, Y", $timestamp );
                        ?>
                            <tr>
                                <td><input class="label-inline" type="checkbox" value="<?php echo $cdata['id'] ?>"></td>
                                <td><?php echo $cdata['id']; ?></td>
                                <td><?php echo $cdata['task'] ?></td>
                                <td><?php echo $date ?></td>
                                <td><a class="delete" data-taskid="<?php echo $cdata['id']; ?>" href="#">Delete</a> | <a class="incomplete" data-taskid="<?php echo $cdata['id']; ?>" href="#">Mark Incomplete</a></td>
                            </tr>
                        <?php }
                                mysqli_close( $connection );
                            ?>
                </tbody>
            </table>
            <?php }?>

        <!-- Upcoming Tasks -->
        <?php
        if ( mysqli_num_rows( $result ) < 1 ) {?>
                <p>No Task Found</p>
            <?php } else {?>
            <h4>Upcoming Tasks</h4>
            <form action="tasks.php" method="POST">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Id</th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ( $data = mysqli_fetch_assoc( $result ) ) {
                            $timestamp = strtotime( $data['date'] );
                            $date = date( "jS F, Y", $timestamp );
                        ?>
                            <tr>
                                <td><input name="taskIds[]" class="label-inline" type="checkbox" value="<?php echo $data['id'] ?>"></td>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['task'] ?></td>
                                <td><?php echo $date ?></td>
                                <td><a class="delete" data-taskid="<?php echo $data['id']; ?>" href="#">Delete</a> | <a class="complete" data-taskid="<?php echo $data['id']; ?>" href="#">Complete</a></td>
                            </tr>
                        <?php }?>
                </tbody>
            </table>
            <select name="action" id="bulkAction">
                <option value="0">With Selected</option>
                <option value="bulkDelete">Delete</option>
                <option value="bulkComplete">Mark as Complete</option>
            </select>
            <input type="submit" value="Submit" id="bulkSubmit" class="button-primary">
        </form>
        <?php }
        ?>


        <form method="post" action="tasks.php">
            <fieldset>
                <?php
                    $added = $_GET['added'] ?? '';
                    if ( $added ) {
                        echo "Data Inserted Successfully";
                    }
                ?>
                <label for="task">Task</label>
                <input type="text" placeholder="Task Details" id="task" name="task">
                <label for="data">Date</label>
                <input type="text" placeholder="Task Date" id="date" name="date">
                <input type="submit" value="Add Task" class="button-primary">
                <input type="hidden" name="action" value="add">
            </fieldset>
        </form>
    </div>
    <!-- Complete hidden form -->
    <form action="tasks.php" method="post" id="completeForm">
        <input type="hidden" id="completeAction" name="action" value="complete">
        <input type="hidden" id="completeTaskId" name="completeTaskIdName">
    </form>
    <!-- Delete hidden form -->
    <form action="tasks.php" method="post" id="deleteForm">
        <input type="hidden" id="deleteAction" name="action" value="delete">
        <input type="hidden" id="deleteTaskId" name="deleteTaskIdName">
    </form>
    <!-- Mark Incomplete form -->
    <form action="tasks.php" method="post" id="incompleteForm">
        <input type="hidden" name="action" value="incomplete">
        <input type="hidden" id="incompleteTaskId" name="incompleteTaskIdName">
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    ;(function($){
        $(document).ready(function(){
            $(".complete").on('click', function(){
                var id = $(this).data("taskid");
                $("#completeTaskId").val(id);
                $("#completeForm").submit();
            });

            $(".delete").on('click', function(){
                if(confirm("Are you sure to delete this task?")){
                    var id = $(this).data("taskid");
                    $("#deleteTaskId").val(id);
                    $("#deleteForm").submit();
                }
            });

            $(".incomplete").on('click', function(){
                var id = $(this).data("taskid");
                $("#incompleteTaskId").val(id);
                $("#incompleteForm").submit();
            });

            $("#bulkSubmit").on('click', function(){
                if($("#bulkAction").val()=="bulkDelete"){
                    if(!confirm("Are you sure to delete?")){
                        return false;
                    }
                }
            });
        });
    })(jQuery);
</script>
</html>