<?php
include('header.php');
include('Menu.php');
define ("STUDENT_NUMBER",'041091309');
?>

<div>
    <?php
    $rows = 9;

    for ($i = 1; $i <= $rows; $i++) {
        if ($i % 2 !== 0) {
            $characters = str_repeat('*', $rows - $i + 1);
            echo $characters . "<br>";
        } else {
            $characters = str_repeat('$', $rows - $i + 1);
            echo $characters . "<br>";
        }
    }
    ?>
</div>

<?php
include('footer.php');
?>
