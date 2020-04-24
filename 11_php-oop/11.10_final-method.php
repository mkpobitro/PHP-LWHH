<?php
//Abstract মানেই হচ্ছে এখানে কিছু ইমপ্লিমেন্ট করতেই হবে আর  Final মেথড মানে হচ্ছে এখানে আর কিছু ইমপ্লিমেন্ট করা যাবে না।

Class OurClass {
    final function something() {
        echo "Parent Class final method";
    }
}

Class MyClass extends OurClass {

}

$mc = new MyClass();
echo $mc->something();