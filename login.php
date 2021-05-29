<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widli=device-widli, initial-scale=1.0">
    <link rel='stylesheet' href="style/main.css">
    <link rel='stylesheet' href="style/form.css">
    <link rel='stylesheet' href="style/button.css">
    <title>SMA Puncak Harapan</title>
</head>
<body>
    <?php include('include/header.php') ?>
    <main>
            <form action="" method="POST" class="form-main-container">
                <h1 style="color: white; font-size: 56px;">LOG IN</h1>
                <div class="check">
                    <input type="email" name="email" class="form-input" placeholder="Email" required>
                    <input type="password" name="password" class="form-input" placeholder="Password" required>
                </div>
                <button type="submit" class="green-button" style="font-size: 32px; width: 50%;">LOG IN</button>
            </form>
    </main>
    <?php include('include/footer.php') ?>
</body>
</html>