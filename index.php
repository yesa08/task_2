<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <form class="bg-white w-fit" action="detail.php" method="get" >
        <h1>Form Pendaftaran Lomba</h1>
        <div class="display-block w-100 margin-bottom">
            <label for="nama" class="w-100">Nama</label>
            <input type="text" class="w-100" id="nama" name="nama" value="">
        </div>
        <div class="display-block w-100 margin-bottom">
            <label for="nim" class="w-100">NIM</label>
            <input type="text" id="nim" name="nim" class="w-100" value="">
        </div>
        <div class="display-block w-100 margin-bottom">
            <label for="prodi" class="w-100">Prodi</label>
            <input type="text" id="prodi" name="prodi" class="w-100" value="">
        </div>
        <button type="submit">
            Submit
        </button>
    </form>
</body>
</html>
