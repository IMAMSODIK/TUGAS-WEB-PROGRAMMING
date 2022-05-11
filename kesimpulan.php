<?php 

	require("menu.php");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>modularitas</title>
    <style type="text/css">
        img{
            width: 80%;
            border: 1px solid black;
            margin-right: auto;
            margin-left: auto;
            display: block;
        }
        p{
            font-size: 20px;
        }
    </style>
 </head>
 <body>
 
    <h1>Perbedaan antara include dan require</h1>
 	<div class="content">
        <p>Jika menggunakan include, saat terjadi kesalahan, maka hanya akan menghasilkan peringatan saja dan program akan terus dijalankan seperti pada gambar di bawah.</p>
        <img src="assets/include.png">
        <p>Berbeda jika menggunakan require, program akan menghasilkan pesan "fatal-error" dan program di bawahnya tidak akan di eksekusi lagi seperti pada gambar di bawah.</p>
        <img src="assets/require.png">
    </div>

 </body>
 </html>