<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Sertifikat</title>
    <style>
        .button {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .container {
            float: left;
            font-family: Calibri, Sans-serif;
            font-size: 11pt;
            width: 890px;
            height: 630px;
            border: 1px solid #000000;
        }
        .sertifikat {
            float: left;
            margin-left: 25px;
            margin-top: 15px;
        }
        .nama {
            float: left;
            position: absolute;
            margin-top: 242px;
            margin-left: 453px;
        }
        .noBdan {
            float: left;
            position: absolute;
            margin-top: 265px;
            margin-left: 453px;
        }
        .tglBdan {
            float: left;
            position: absolute;
            margin-top: 287px;
            margin-left: 453px;
        }
        .alamat {
            float: left;
            position: absolute;
            margin-top: 309px;
            margin-left: 453px;
        }
        .nilai {
            float: left;
            position: absolute;
            margin-top: 331px;
            margin-left: 453px;
        }
        .predikat {
            float: left;
            position: absolute;
            margin-top: 355px;
            margin-left: 453px;
        }
        .noThn {
            float: left;
            position: absolute;
            margin-top: 379px;
            margin-left: 559px;
        }
        .noThn2 {
            float: left;
            position: absolute;
            margin-top: 433px;
            margin-left: 442px;
        }
        .tglTtd {
            float: left;
            position: absolute;
            margin-top: 473px;
            margin-left: 621px;
        }
        .ttd {
            float: left;
            position: absolute;
            margin-top: 530px;
            margin-left: 633px;
        }
    </style>
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
</head>
<body>

    <div class="container" id="app">
        <img src="{{asset('sertifikat/sertifikat.jpeg')}}" class="sertifikat">
        <p class="nama" id="nama"> Lala </p>
        <p class="noBdan" id="nohukum"> Lala </p>
        <p class="tglBdan"> Lala </p>
        <p class="alamat" id="alamat"> Lala </p>
        <p class="nilai" id="op3"> Lala </p>
        <p class="predikat" id="op4"> Lala </p>
        <p class="noThn"><small>2010</small></p>
        <p class="noThn2"><small>2010</small></p>
        <p class="tglTtd">12 November 2011</p>
    </div>
    <a id="btncetak" class="button" href="#"> Cetak </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script src="{{ asset('js/kesehatan.js') }}"></script>
    <script>
        function cetak() {
          print({
            printable: "#app",
            type: "html",
            onPrintDialogClose: () => alert("Data Berhasil dicetak.")
          });
        }
        document.getElementById("btncetak").addEventListener("click", cetak);
    </script>
</body>
</html>
