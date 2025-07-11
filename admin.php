<?php
require 'db_connect.php';

$result = mysqli_query($conn, "SELECT * FROM orders ORDER BY order_date DESC");
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['customer_name']); ?></td>
            <td><?php echo htmlspecialchars($row['phone_number']); ?></td>
            <td><?php echo htmlspecialchars($row['address']); ?></td>
            <td><?php echo htmlspecialchars($row['product_name']); ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['order_date']; ?></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
