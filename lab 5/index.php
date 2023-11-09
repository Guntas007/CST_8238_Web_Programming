<?php
// Define PHP constant for student number
define("STUDENT_NUMBER", "041091309");

// Declare PHP variables for first name and last name
$firstName = "Guntas Singh";
$lastName = "Chugh";

// Concatenate two strings
$concatenatedText = "Hello World!! " . "This is the first time I am using PHP!!";

// Get the length of the concatenated text
$textLength = strlen($concatenatedText);

// Find the position of the word "PHP" in the concatenated text
$phpPosition = strpos($concatenatedText, "PHP");
?>

<!-- Include Header, Menu, and Footer -->
<?php include('header.php'); ?>
<?php include('Menu.php'); ?>

<!-- Content Area -->
<main>
    <h1>Welcome, <?php echo $firstName . " " . $lastName; ?></h1>
    <p>Student Number: <?php echo STUDENT_NUMBER; ?></p>
    <p><?php echo $concatenatedText; ?></p>
    <p>Length of Text: <?php echo $textLength; ?></p>
    <p>Position of "PHP": <?php echo $phpPosition; ?></p>
</main>

<!-- Include Footer -->
<?php include('footer.php'); ?>
