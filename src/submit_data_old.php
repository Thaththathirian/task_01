<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "product_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data
$productCode = mysqli_real_escape_string($conn, $_POST['productCode']);
$productName = mysqli_real_escape_string($conn, $_POST['productName']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$subCategory = mysqli_real_escape_string($conn, $_POST['subCategory']);
$unit = intval($_POST['unit']);
$hsn = mysqli_real_escape_string($conn, $_POST['hsn']);
$costPrice = floatval($_POST['costPrice']);
$sellingPrice = floatval($_POST['sellingPrice']);
$gstAmount = floatval($_POST['gstCalculation']);
$mrp = floatval($_POST['mrpCalculation']);

// SQL insert statement
$sql = "INSERT INTO products (productCode, productName, category, subCategory, unit, hsn, costPrice, sellingPrice, gstAmount, mrp)
        VALUES ('$productCode', '$productName', '$category', '$subCategory', '$unit', '$hsn', '$costPrice', '$sellingPrice', '$gstAmount', '$mrp')";

// Execute query and check for errors
if ($conn->query($sql) === TRUE) {
    echo "Data saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>






<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "product_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data
$productCode = mysqli_real_escape_string($conn, $_POST['productCode']);
$productName = mysqli_real_escape_string($conn, $_POST['productName']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$subCategory = mysqli_real_escape_string($conn, $_POST['subCategory']);
$unit = intval($_POST['unit']);
$hsn = mysqli_real_escape_string($conn, $_POST['hsn']);
$costPrice = floatval($_POST['costPrice']);
$sellingPrice = floatval($_POST['sellingPrice']);
$gstAmount = floatval($_POST['gstCalculation']);
$mrp = floatval($_POST['mrpCalculation']);

// SQL insert statement
$sql = "INSERT INTO products (productCode, productName, category, subCategory, unit, hsn, costPrice, sellingPrice, gstAmount, mrp)
        VALUES ('$productCode', '$productName', '$category', '$subCategory', '$unit', '$hsn', '$costPrice', '$sellingPrice', '$gstAmount', '$mrp')";

// Execute query and check for errors
if ($conn->query($sql) === TRUE) {
    echo "Data saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>