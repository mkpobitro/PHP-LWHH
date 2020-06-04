<body>
    <h2>PHP to JavaScript</h2>
    <input type="button" id="button" value="Show Something">
</body>

<script>
    <?php 
    $data = array(
        // "first name" => "Jhon",
        "firstname" => "Jhon",
        "lastname"  => "Doe",
        "email"     => "jhon@doe.com",
    );
    ?>

    let jsonData = <?php echo json_encode($data)?>;

    document.getElementById("button").addEventListener("click", function(){
        alert(jsonData.email);
        console.log(jsonData);
    });

    
//Key এর ভিতরে যদি স্পেস থাকে তাহলে JSON Object কে array এর মত করে ট্রিট করা যাবে
    // document.getElementById("button").addEventListener("click", function(){
    //     alert(jsonData["first name"]);
    //     console.log(jsonData);
    // });

</script>