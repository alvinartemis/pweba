<html>

<head>
    <title>Sinau CSS </title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
        body {
            background-color: cyan;
            color: violet;
            padding: 25px 50px 75px 100px;
        }

        p {
            text-align: center;
        }

        .ratakanan {
            text-align: right;
            text-transform: uppercase;
            font-weight: bold;
        }

        .warnaharga {
            color: black;

        }
    </style>
</head>

<body>
    <!--Inline CSS hanya digunakan untuk setting spesifik hanya di 1 bagian-->
    Halo <b style="
color:red;
text-shadow: 2px 2px black;
">apa</b> kabar
    <!--Inpage CSS digunakan untuk setting yang berbeda di halaman ini saja-->
    <div class="ratakanan warnaharga">Halo apa kabar</div>
    <!--Eksternal File, digunakan untuk setting global satu situs-->
    <span class="sembunyi"> Halo apa kabar</span>

    <p>Halo apa kabar</p>
</body>

</html>
