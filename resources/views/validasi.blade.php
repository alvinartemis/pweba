<html>

<head>
    <title>Responsive Web</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validateForm(){
            //return true;


            var nrp = document.getElementById("nrp");
            if(nrp.value == ""){
                Swal.fire("Harus diisi")
                return false;
            }
            if (isNaN(nrp.value)){
                Swal.fire("Harus mengisi dengan angka");
                 return false;
            }


            if (nrp.value.length != 10){
                Swal.fire("NRP harus memuat 10 digit angka!");
                return false;


            }
            if (nrp.value.substring(0,4) != 5026){
                Swal.fire("4 Digit awal harus memuat kode Departemen Sistem Informasi");
                return false;
            }




        }
    </script>
</head>

<body>
    <div class="container">
        <h1> Pendaftaran Anggota HMSI</h1>
        <form action="https://www.google.com" onsubmit="return validateForm();">
            <div class="form-group" >
                <label for="nrp">NRP Mahasiswa :</label>
                <input id="nrp" type="text" class="form-control" placeholder="harus diisi" />
            </div>
            <input type="submit" class="btn btn-dark" value="KIRIM">
        </form>
    </div>
</body>

</html>
