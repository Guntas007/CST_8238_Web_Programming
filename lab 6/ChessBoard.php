<?php
include('header.php'); 
include('Menu.php');
define ("STUDENT_NUMBER","041085940");
?>

<div style="text-align: Left;">
    <h1>Chess Board</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $cellColor = ($row + $col) % 2 == 0 ? "white" : "black";
                echo "<td bgcolor='$cellColor'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php
include('footer.php'); 
?>