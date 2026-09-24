<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts - POS System</title>
</head>

<body>

<?= view('partials/navbar') ?>

    <h1>Customer Accounts</h1>

    <table border="1">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <?php foreach ($customers as $customer): ?>

            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>