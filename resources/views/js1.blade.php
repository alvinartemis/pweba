<html>

<head>
    <title>Responsive Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function changeText() {
            var span = document.getElementById("output");
            var textBox = document.getElementById("textbox"); textBox.style.color = "red";
            span.innerHTML = textBox.value;
            span.className = "text-primary";
        }
    </script>
    <!-- jQuery library -->
    <script src="myfunction.js"></script>


</head>

<body>
    <script>
        function showAlert() {
            alert("Selamat Anda memenangkan Undian 1 Milyar!");
        }

    </script>
    <button class="btn btn-danger" onclick="showAlert();">Klik disini!</button>
    <br>
    <button onclick="changeText();" class="btn btn-success">Click me!</button>
    <span id="output">replace me</span>
    <input id="textbox" type="text" class="form-control" />
    <br>
    <div class="form-group">
        <label for="bil1">Bilangan 1 : </label>
        <input id="bil1" type="number" class="form-control" placeholder="Masukkan Bilangan 1" />
    </div>
    <div class="form-group">
        <label for="bil2">Bilangan 2 : </label>
        <input id="bil2" type="number" class="form-control" placeholder="Masukkan Bilangan 2" />
    </div>
    <div class="btn-group">
        <button onclick="tambah();" class="btn btn-success">Penjumlahan</button>
        <button onclick="perkalian();" class="btn btn-warning">Perkalian</button>
    </div>
    <h2>Hasil operasi = <div id="hasil"></div></h2>


</body>

</html>
