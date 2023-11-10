<?php
include 'Header.php';
?>
<title>Currency Exchange</title>

</head>
<body>
    <header id='header'>
        <h2>Computer Engineering Technology - Computing Science</h2>
        <h2>Web-Programming (CST8238_360)</h2>
    </header>
<?php
include 'Menu.php';
?>

<form method="post" action="">
    <label for="srcamt">Conversion amount:</label>
    <input type="text" name="srcamt" id="srcamt" required>
    <br>
    <br>
    <label for="basecurr">Base currency:</label>
    <select name="basecurr" id="basecurr">
        <option value="CAD">Canadian Dollar</option>
        <option value="USD">US Dollar</option>
        <option value="NZD">New Zealand Dollar</option>
    </select><br><br>

    <label for="destcurr">Destination currency:</label>
    <select name="destcurr" id="destcurr">
        <option value="CAD">Canadian Dollar</option>
        <option value="USD">US Dollar</option>
        <option value="NZD">New Zealand Dollar</option>
    </select><br><br>

    <input type="submit" value="Convert">
</form>

<?php
$currencies = array(
    "CAD" => "Canadian Dollar",
    "NZD" => "New Zealand Dollar",
    "USD" => "US Dollar"
);
$rates = array(
    "CAD" => 0.97645,
    "NZD" => 1.20642,
    "USD" => 1.0
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["srcamt"];
    $base_currency = $_POST["basecurr"];
    $dest_currency = $_POST["destcurr"];

    $converted_output = ($amount / $rates[$base_currency]) * $rates[$dest_currency];
    $formatted_amount = number_format($amount, 2);
    $formatted_result = number_format($converted_output, 2);

    echo "<br>Expected Output = $formatted_amount $currencies[$base_currency] converts to $formatted_result $currencies[$dest_currency]";
}?>
<footer id="footer" style="position: fixed">
<?php
include 'Footer.php';
?>
