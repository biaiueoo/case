<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .message {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            background-color: #d4edda;
            color: #155724;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            color: white;
            background-color: #4CAF50;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Users List</h1>
    <a href="<?= site_url('users/create'); ?>">Tambahkan User Baru</a>
    
    <?php if (session()->getFlashdata('message')): ?>
        <div class="message">
            <?= session()->getFlashdata('message'); ?>
        </div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                    <td><?= $user['id']; ?></td>
                        <td><?= $user['username']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><?= $user['password']; ?></td>
                        <td><?= $user['status']; ?></td>
                        <td><?= $user['created_at']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Tidak ada user active</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
