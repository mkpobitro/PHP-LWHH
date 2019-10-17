    <?php
    $fname = "Pobitro";
    $lname = "Raj";

    // printf সরাসরি আউটপুট প্রিন্ট করে দেয় আর এটার পুরো ডাটা return নিতে চাইলে sprintf ব্যবহার করতে হয়।
    $output = sprintf("My Name is %s %s", strtoupper($fname),$lname);
    echo $output; // output = My Name is POBITRO Raj
