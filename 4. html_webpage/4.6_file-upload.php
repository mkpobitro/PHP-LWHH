
<!-- ৪.৬ - পিএইচপিতে ফাইল আপলোড ম্যানেজ করা-->
<?php 
// header('X-XSS-Protection:0');
$allowedTypes = array( 
    'image/png', 
    'image/jpg', 
    'image/jpeg' );

if($_FILES['photo']){
    // if($_FILES['photo']['type']=='image/png' || $_FILES['photo']['type']=='image/jpg' || $_FILES['photo']['type']=='image/jpeg')
    $totalFiles = count($_FILES['photo']['name']);
    for($i=0; $i<$totalFiles; $i++){
        if(in_array($_FILES['photo']['type'][$i], $allowedTypes)!== false && $_FILES['photo']['size'][$i]<5*1024*1024){
            move_uploaded_file($_FILES['photo']['tmp_name'][$i], "files/".$_FILES['photo']['name'][$i]);
       }
    }
}
?>
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

                 <pre>
                    <p>
                        <?php 
                        print_r($_POST);
                        print_r($_FILES);
                        ?>
                    </p>
                 </pre>   
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" enctype="multipart/form-data"><!-- HTTP VERB -->
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" type="button">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" type="button">

                <label for="photo">Photo</label>
                <input type="file" name="photo[]" id="photo"><br>
                <input type="file" name="photo[]" id="photo"><br>
                <input type="file" name="photo[]" id="photo"><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>


</body>

</html>