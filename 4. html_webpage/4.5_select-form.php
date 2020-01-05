
<!-- ৪.২ - বিভিন্ন ধরনের এইচটিটিপি ভার্ব যেমন GET POST PUT DELETE PATCH নিয়ে আলোচনা -->
<?php 
header('X-XSS-Protection:0');
include_once("4.5_select-form-function.php");
$fruits = ['mango', 'apple', 'banana', 'lemon', 'guava'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Form</title>

    <!-- Milligram framework css cdn-->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

    <style>
    body {
        margin-top: 100px;
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Select/Dropdown Form</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias suscipit debitis inventore voluptates nobis dolorum temporibus, architecto iste enim. Et!</p>

                <p>
                <?php
                $selectedFruits = isset($_POST['fruits'])? $_POST['fruits']:array();
                // $selectedFruits = filter_input(INPUT_POST,'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
                if(count($selectedFruits)>0){
                    echo "You Have Selected: ".join(", ", $selectedFruits);
                }
                ?>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST"><!-- HTTP VERB -->
                <label for="fruits">Select Some Fruits</label>
                <select style="height:200px" name="fruits[]" id="fruits" multiple>
                    <option value="" disabled selected>Select Fruits</option>
                    <?php echo displayOptions($fruits, $selectedFruits); ?>
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>


</body>
</html>