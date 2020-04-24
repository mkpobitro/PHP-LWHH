<?php
include_once "scramble-functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrambler</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
$task = 'encode';
if ( isset( $_REQUEST['task'] ) && $_REQUEST['task'] != '' ) {
    $task = $_REQUEST['task'];
}

$original_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
$key = 'abcdefghijklmnopqrstuvwxyz1234567890';

if ( 'key' == $task ) {
    $key_original = str_split( $key );
    shuffle( $key_original );
    $key = join( '', $key_original );
} else if ( isset( $_POST['key'] ) && $_POST['key'] != '' ) {
    $key = $_POST['key'];
}

$scrambleData = '';
if ( 'encode' == $task ) {
    $data = $_POST['data'] ?? '';
    if ( $data != '' ) {
        $scrambleData = scrambleData( $data, $key );
    }
}

if ( 'decode' == $task ) {
    $data = $_POST['data'] ?? '';
    if ( $data != '' ) {
        $scrambleData = decodeData( $data, $key );
    }
}

?>
    <div class="container mt-5 w-50">
        <h1>Data Scrambler</h1>
        <p>Use this application to scramble your data</p>

        <div class="link">
            <a href="/scrambler.php?task=encode">Encode | </a>
            <a href="/scrambler.php?task=decode">Decode |</a>
            <a href="/scrambler.php?task=key">Generate Key</a>
        </div>

        <div class="form-input">
            <form action="scrambler.php<?php if ( 'decode' == $task ) {echo "?task=decode";}?>" method="POST">
                <label for="key">Key</label>
                <input name="key" type="text" id="key" class="form-control" <?php displayKey( $key );?>>

                <label for="data">Data</label>
                <textarea name="data" id="data" cols="3" rows="2" class="form-control">
                <?php if ( isset( $_POST['data'] ) ) {
    echo $_POST['data'];
}?>
                </textarea>

            <label for="result">Result</label>
                <textarea  id="result" cols="3" rows="2" class="form-control"><?php echo $scrambleData; ?></textarea>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>