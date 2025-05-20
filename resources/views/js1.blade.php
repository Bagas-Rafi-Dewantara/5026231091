<html><head>

    <title>

    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // function dibuat agar tidak langsung di load waktu web dibuka tapi sesuai kebutuhan(kalo dipanggil)
        // execute js ada di console, klo kosong artinya ga eror
        function hello()
        {
            alert("Selamat Anda mendapat 1 Milyar");
            
        }

        function tambah()
        {
            // baca isinya dan ambil value
            var bilangan1= document.getElementById("bil1").value;
            var bilangan2= document.getElementById("bil2").value;
            var hasil = Number.parseInt(bilangan1) + Number.parseInt(bilangan2) ;

            // use innerhtml karna bukan bagian dari form
            document.getElementById("hasil").innerHTML = hasil;

        }


    </script>

</head>

<body>
    <div class="container">
        <button class="btn btn-primary" onclick="hello();">Klik Disini</button>
        <p>
            Bilangan pertama :
            <input type="text" class="form-control" id="bil1" value="0">
            <br>

            Bilangan kedua :
            <input type="text" class="form-control" id="bil2" value="0">
            <br>

            Hasil Penjumlahan :
            </p><div id="hasil"></div>
            <br>
            <button class="btn btn-success" onclick="tambah();">Tambah</button>
        <p></p>
    </div>


</body></html>