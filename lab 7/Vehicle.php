<?php
include 'Header.php';
?>
<style>
    .vehicle {
        float: left;
        width: 40%;
        padding: 20px;
        border: 1px solid #ccc;
        margin: 5px;
        background-color: #f5f5f5;
    }
    </style>
<title>Vehicle</title>
</head>
<body>
    <header id='header'>
        <h2>Computer Engineering Technology - Computing Science</h2>
        <h2>Web-Programming (CST8238_360)</h2>
    </header>

<?php
include 'Menu.php';
?>
<?php
interface Vehicle {
    public function displayVehicleInfo();
}

class LandVehicle implements Vehicle {
    protected $make;
    protected $model;
    protected $year;
    protected $price;

    public function __construct($make, $model, $year, $price) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }

    public function displayVehicleInfo() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Price: $" . $this->price . "<br>";
    }
}

class Car extends LandVehicle {
    private $speedLimit;

    public function __construct($make, $model, $year, $price, $speedLimit) {
        parent::__construct($make, $model, $year, $price);
        $this->speedLimit = $speedLimit;
    }

    public function displayVehicleInfo() {
        parent::displayVehicleInfo();
        echo "Speed Limit: " . $this->speedLimit . " mph<br><br>";
    }
}

class WaterVehicle implements Vehicle {
    protected $make;
    protected $model;
    protected $year;
    protected $price;

    public function __construct($make, $model, $year, $price) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }

    public function displayVehicleInfo() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Price: $" . $this->price . "<br>";
    }
}

class Boat extends WaterVehicle {
    private $boatCapacity;

    public function __construct($make, $model, $year, $price, $boatCapacity) {
        parent::__construct($make, $model, $year, $price);
        $this->boatCapacity = $boatCapacity;
    }

    public function displayVehicleInfo() {
        parent::displayVehicleInfo();
        echo "Boat Capacity: " . $this->boatCapacity . " persons<br><br>";
    }
}

$car1 = new Car("Toyota", "Camry", 1992, 2000, 180);
$car2 = new Car("Honda", "Accord", 2002, 6000, 200);

$boat1 = new Boat("Mitsubishi", "Turbo", 1999, 20000, 18);
$boat2 = new Boat("Hyundai", "XT", 2012, 26000, 8);
?>
<div class='vehicle'>
    <h2>Cars Information</h2>
    <div class='vehicle'>
        <h3>Car 1</h3>
        <?php $car1->displayVehicleInfo(); ?>
    </div>
    <div class='vehicle'>
        <h3>Car 2</h3>
        <?php $car2->displayVehicleInfo(); ?>
    </div>
</div>

<div class='vehicle'>
    <h2>Boats Information</h2>
    <div class='vehicle'>
        <h3>Boat 1</h3>
        <?php $boat1->displayVehicleInfo(); ?>
    </div>
    <div class='vehicle'>
        <h3>Boat 2</h3>
        <?php $boat2->displayVehicleInfo(); ?>
    </div>
</div>
<div style="margin-bottom: 700px;"></div>

<footer id="footer" style="position: relative; bottom: 0; width: 100%; background-color: #212529; text-align: center; color: #1A32E2; font-style: italic;">
<?php
include 'Footer.php';
?>