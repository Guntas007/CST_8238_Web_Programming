<?php
include 'Header.php';
?>
<title>Product info</title>
</head>
<body>
    <header id='header'>
        <h2>Computer Engineering Technology - Computing Science</h2>
        <h2>Web-Programming (CST8238_360)</h2>
    </header>

<?php
include 'Menu.php';
$Product = array(
    "Printer" => array(
        array(
            "Brand" => "Epson",
            "Quantity" => 100,
            "Price" => 250
        ),
        array(
            "Brand"=>"Canon",
            "Quantity"=>100,
            "Price"=>3000
        ),
        array(
            "Brand"=>"Xerox",
            "Quantity"=>500,
            "Price"=>2000
        )
    ),
    "Laptop"=>array(
        array(
            "Brand" => "Apple",
            "Quantity" => 200,
            "Price" => 2000
        ),
        array(
            "Brand"=>"HP",
            "Quantity"=>300,
            "Price"=>1500
        ),
        array(
            "Brand"=>"Toshiba",
            "Quantity"=>100,
            "Price"=>1200
        )
    ),
    "TV"=>array(
        array(
            "Brand" => "Samsung",
            "Quantity" => 500,
            "Price" => 1200
        ),
        array(
            "Brand"=>"LG",
            "Quantity"=>500,
            "Price"=>1050
        ),
        array(
            "Brand"=>"Sony",
            "Quantity"=>100,
            "Price"=>1200
        )
    )
);
var_dump($Product);
?>

<style>
table {
    border-collapse: collapse;
    width: 50%;
}

th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}
</style>
<br>
<br>
<h1><b><u>Table view:</u></b></h1>
<table>
    <tr>
        <th>Category</th>
        <th>Brand</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>

    <?php
    $prevCategory = null;
    foreach ($Product as $category => $products) {
        $rowspan = count($products);
        foreach ($products as $index => $product) {
            echo '<tr>';
            if ($index === 0) {
                echo '<td rowspan="' . $rowspan . '">' . $category . '</td>';
            }
            echo '<td>' . $product['Brand'] . '</td>';
            echo '<td>' . $product['Quantity'] . '</td>';
            echo '<td>' . $product['Price'] . '</td>';
            echo '</tr>';
        }
    }
    ?>
</table>
<br>
<h2><b><u>List Format:</u></b></h2>
<div id="text">
<?php foreach ($Product as $category => $items) : ?>
    <h3><?= $category ?></h3>
    
    <?php foreach ($items as $item) : ?>
        <li>
        Brand: <?= $item["Brand"] ?>,
        Quantity: <?= $item["Quantity"] ?>,
        Price: <?= $item["Price"] ?></li>
    <?php endforeach; ?>
    <?php endforeach; ?>
</div>
<footer id="footer" style="position: relative">
<?php
include 'Footer.php';
?>
