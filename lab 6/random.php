<?php
include('header.php');
include('Menu.php');
define ("STUDENT_NUMBER",'041091309');

$rangeCounts = array(0, 0, 0, 0, 0);

for ($i = 1; $i <= 500; $i++) {
    $randomNumber = rand(1, 50);

    if ($randomNumber >= 1 && $randomNumber <= 10) {
        $rangeCounts[0]++;
    } elseif ($randomNumber >= 11 && $randomNumber <= 20) {
        $rangeCounts[1]++;
    } elseif ($randomNumber >= 21 && $randomNumber <= 30) {
        $rangeCounts[2]++;
    } elseif ($randomNumber >= 31 && $randomNumber <= 40) {
        $rangeCounts[3]++;
    } else {
        $rangeCounts[4]++;
    }
}


$rangeLabels = array("01 - 10", "11 - 20", "21 - 30", "31 - 40", "41 - 50");
for ($i = 0; $i < 5; $i++) {
    echo $rangeCounts[$i] . " numbers are randomly generated in the range between " . $rangeLabels[$i] . "<br>";
}

echo "Histogram of stars as a percentage of the number of values are displayed below<br>";
for ($i = 0; $i < 5; $i++) {
    $percentage = ($rangeCounts[$i] / 500) * 100;
    echo $rangeLabels[$i] . ": " . str_repeat('*', $percentage) . "<br>";
}

include('footer.php');
?>
