<?php
    
//২.৬ - একটা বড় ফাংশনকে ছোট ফাংশনে ভাগ করা

    function doTheLargerTask(){
        echo "Step A Done\n";
        echo "Step B Done\n";
        echo "Step C Done\n";
        echo "Step D Done\n";
    }

    doTheLargerTask();

    //উপরের ফাংশনকে আমরা এভাবে ছোট ছোট পার্টেই ভেঙ্গে নিতে পারি
    function doTaskA(){
        echo "Step A Done \n";
    }
    function doTaskB(){
        echo "Step B Done \n";
    }
    function doTaskC(){
        echo "Step C Done \n";
    }
    function doTaskD(){
        echo "Step D Done \n";
    }

    function doTheLargerTask(){
        doTaskA();
        doTaskB();
        doTaskC();
        doTaskD();
    }

    doTheLargerTask();



