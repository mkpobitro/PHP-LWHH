<!-- ৪.৩ - ইউজারের ইনপুট স্যানিটাইজ করা -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
                <h1>Hello World</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste laudantium tempora fuga mollitia
                    suscipit maxime architecto? Sed hic culpa nesciunt?</p>

                <p>
                    <?php 
                        $fname = "";
                        $lname = "";
                    ?>
                    <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){
                        // $fname = htmlspecialchars($_REQUEST['fname'])."<br>";
                        $fname = filter_input(INPUT_GET, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS)."<br>"; //sanitization
                    } ?> 
                    <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){
                        $lname = filter_input(INPUT_GET, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } ?>
                </p>

                <p>
                    First Name: <?php echo $fname; ?>
                    Last Name: <?php echo $lname; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="GET"><!-- HTTP VERB -->
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" value="<?Php echo $fname; ?>">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" value="<?Php echo $lname; ?>">

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>


</body>

</html>
