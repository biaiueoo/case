<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error-messages {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            color: #4CAF50;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Register</h1>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="error-messages">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <p><?= $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="form-container">
        <form action="<?= site_url('users/register'); ?>" method="post">
            <?= csrf_field(); ?>
            
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?= old('username'); ?>">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= old('email'); ?>">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password">

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" id="confirm_password">

            <button type="submit">Register</button>
        </form>
    </div>

    <p><a href="<?= site_url('users'); ?>">Back to Users List</a></p>
</body>
</html>
