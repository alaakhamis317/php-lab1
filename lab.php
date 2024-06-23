
<?php
phpinfo();
echo "<br>";

define("WEPSITENAME", "Age");
echo WEPSITENAME;
echo "<br>";
$age = 10;

switch ($age) {
case ($age<5):
    echo "stay at home";
    break;
case ($age==5):
    echo "go to kindergareden";
    break; 
case ($age >= 6 && $age <= 7):
    echo "Go to grade 1st";
    break;
case ($age >= 8 && $age <= 9):
        echo "Go to grade 2st";
        break;
case ($age >= 10 && $age <= 11):
            echo "Go to grade 3st";
            break;
case ($age ==12):
                echo "Go to grade 4st";
                break;
default:
echo " Your age is Not Found!";

}
?>


