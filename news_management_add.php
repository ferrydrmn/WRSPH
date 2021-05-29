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
            <h1>TAMBAH INFORMASI BERITA</h1>
            <form class="form-management" action="" method="POST" enctype="multipart/form-data">
                <div class="input-management">
                    <h2>Judul Berita</h2>
                    <input type="text" name="nama_fasilitas" required>
                </div>
                <div class="input-management"> 
                    <h2>Deskripsi</h2>
                    <textarea name="deskripsi" rows="5" required></textarea>
                </div>
                <div class="input-management">
                    <h2>Gambar</h2>
                    <input type="file" name="gambar_berita" required>
                </div>
                <button type="submit" class="green-button" style="width: 15%; font-size: 24px;">Submit</button>
            </form>
        </div>
    </main>
    <?php include('include/footer.php') ?>
</body>
</html>