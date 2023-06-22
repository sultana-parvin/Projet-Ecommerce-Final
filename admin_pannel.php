<?php
session_start();

// Check if the user is logged in as an admin
if (!isset($_SESSION['admin_name'])) {
    header('Location: login_form.php');
    exit();
}

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
}

// Handle product addition
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])) {
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Insert product into the database
    $insert_query = "INSERT INTO products (product_name, price, description) VALUES ('$product_name', '$price', '$description')";
    if (mysqli_query($conn, $insert_query)) {
        $success_message = "Product added successfully.";
    } else {
        $error_message = "Failed to add product: " . mysqli_error($conn);
    }
}

// Handle product deletion
if (isset($_GET['delete_product'])) {
    $product_id = $_GET['delete_product'];

    // Delete product from the database
    $delete_query = "DELETE FROM products WHERE id = '$product_id'";
    if (mysqli_query($conn, $delete_query)) {
        $success_message = "Product deleted successfully.";
    } else {
        $error_message = "Failed to delete product: " . mysqli_error($conn);
    }
}

// Fetch all products from the database
$select_query = "SELECT * FROM products";
$result = mysqli_query($conn, $select_query);
if (!$result) {
    die('Query execution error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    

    <!-- Product Addition Form -->
    
    <h2>Add Product</h2>
    <?php if (isset($success_message)) { ?>
        <p style="color: green;"><?php echo $success_message; ?></p>
    <?php } ?>
    <?php if (isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="admin_p">
        <div class="admin_pannel">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required>
        </div>
        <div class="admin_pannel">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>
        </div>
        <div class="admin_pannel">
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div class="add_pro">
            <input type="submit" name="add_product" value="Add Product">
        </div>
    </form>

   <!-- Product Listing -->
<h2>Product List</h2>
<?php if (mysqli_num_rows($result) > 0) { ?>
    <table>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td>
                    <a href="admin_panel.php?delete_product=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p>No products found.</p>
    
    
<?php } ?>
   
