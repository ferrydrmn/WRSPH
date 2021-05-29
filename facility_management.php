<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widli=device-widli, initial-scale=1.0">
    <link rel='stylesheet' href="style/main.css">
    <link rel='stylesheet' href="style/button.css">
    <link rel='stylesheet' href="style/management.css">
    <title>SMA Puncak Harapan</title>
</head>
<body>
    <?php include('include/header.php') ?>
    <main>
        <div class="sidebar">
            <h1>MANAJEMEN</h1>
            <a href="#">FASILITAS</a>
            <a href="#">BERITA</a>
        </div>
        <div class="main-container">
            <a href="#" class="green-button" style="width: 25%; font-size: 24px;">+ Tambah Informasi Fasilitas</a>
            <table class="zebra-table">
                <tr>
                    <th>No.</th>
                    <th>Nama Fasilitas</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Lorem Ipsum</td>
                    <td>
                        <a href="#" class="orange-button">Edit</a>
                        <a href="#" class="red-button">Hapus</a>
                    <td>
                <tr>
            </table>
        </div>
    </main>
    <?php include('include/footer.php') ?>
</body>
</html>