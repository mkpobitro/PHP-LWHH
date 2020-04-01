    <?php
    //২.১ - ফাংশন কি এবং কিভাবে লিখতে হয়
    /* Determines if the argument is even or odd
    function isEven($n){ // parameter
        if($n % 2 == 0){
            return true; 
        }
        return false;
    }

    $x = 3; // 3 is an odd number
    if(isEven($x)){ //argument
        echo "{$x} is an Even Number";
    }else{
        echo "{$x} is an Odd Number";
    }

*/

/*/২.২ - ফাংশন প্যারামিটারের টাইপ হিন্টিং বা টাইপ চেক
    function factorial(int $n){ //this is type hinting and its available for PHP7
        $result = 1;
        for($i = $n; $i > 1; $i--){
            $result  *= $i;
        }
        return $result;
    }

    $x = 6;
    echo "Factorial of {$x} is ".factorial($x); // Factorial of 6 is 720


    // if PHP7 version is not avaiable we can check this way:
    function factorial($n){

        if( gettype($n)!="integer" ){
            return "invalid";
        }
        $result = 1;
        for($i = $n; $i > 1; $i--){
            $result *= $i;
        }
        return $result;
    } 

    $x = "ab";
    echo "Factorial of {$x} is ".factorial($x); // Factorial of ab is invalid
    

    */

 


/*/ ২.৩ - ফাংশন প্যারামিটারের ডিফল্ট ভ্যালু বা অপশনাল প্যারামিটার
    function serve($foodType="Tea", $numberOfItems="2 cups"){
        echo "{$numberOfItems} of {$foodType} have been served";
    }
    $ft = "Coffe";
    $ni = "4 cups";
    serve($ft, $ni); //4 cups of Coffe have been served

*/




/*/২.৪ - ফাংশনের রিটার্ন টাইপ ফিক্স করে দেয়া

    function sum(int $x, int $y, int $z):int{
        return $x+$y+$z;
    }

    echo sum(5,6,7);

*/    



/*/২.৫ - ফাংশনে আনলিমিটেড আর্গুমেন্ট অ্যাক্সেপ্ট করা

    function sum($x, $y, int ...$numbers):int{

        $result = 0;
        for($i = 0; $i < count($numbers); $i++){
            $result += $numbers[$i];
        }
        return $result;
    }
    echo sum(5,3,2,11,9); //output = 22
*/





    
/*/২.৬ - একটা বড় ফাংশনকে ছোট ফাংশনে ভাগ করা

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
*/





/*/২.৭ - রিকার্সন এবং রিকার্সিভ ফাংশন
//recursive function //recursion
    function printN($i){

        if($i > 10){
            return;
        }

        echo $i."\n";
        $i++;
        printN($i); // output = 2 3 4 5 6 7 8 9 10
    }

    printN(2);

    function printNumber($counter, $end, $stepping = 1){

        if($counter > $end){ // recursive ফাংশন লেখার সময় আগে breaking condition টা ঠিক রাখতে হবে
            return;
        }
        
        echo $counter."\n";
        $counter += $stepping;
        printNumber($counter, $end, $stepping);
    }

    printNumber(12,22,3); //output = 12 15 18 21
*/


// ২.৮ - রিকার্সিভ ফাংশনের সাহায্যে ফিবোনাচ্চি সিরিজ প্রিন্ট করা




/*/২.৯ - পিএইচপিতে ভ্যারিয়েবল স্কোপ (খুবই ইম্পর্ট্যান্ট)

    $name = "Earth";
    function something(){ //global Scope
        // global $name;
        echo $name;
        // echo $GLOBALS["name"]; // eta use kora bad practice
    }
    something();

        
    function something(){
        $name = "Earth"; //Local Scope
        $name;
    }

    something();


    function doSomething(){
        static $i; //Static Scope
        $i = $i ?? 0;

        $i++;
        echo $i."\n";
    }
    doSomething();
    doSomething();
    doSomething();
    doSomething(); //output = 1 2 3 4

*/






// ২.১০ - রিকার্সিভ ফাংশনের সাহায্যে ফ্যাক্টোরিয়াল বের করা
    function factorial($n){
        if($n <= 1){ //condition break
            return 1;
        }
        return $n * factorial($n-1);
    }
    echo factorial(5); // output = 120