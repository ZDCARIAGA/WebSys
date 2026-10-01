<!DOCTYPE html>
<html>
<head>
    <title>User Accounts - POS System</title>
</head>

<body>

<?= view('partials/navbar') ?>

    <h1>User Accounts</h1>

    <table border="1">
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Created At</th>
        </tr>

        <?php foreach ($users as $user): ?>

            <tr>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['created_at']) ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>