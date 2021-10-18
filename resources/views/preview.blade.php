<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview surat lowongan</title>
    <style>
        .main {
            display: relative;
            position: center;
            margin:0 auto;
            flex-direction: column;
            width:50%;
        }
        .main2 {
            padding:3px;
            border: 1px solid #000000;
        }
        .button {
            font-size: 16px;
            letter-spacing: 2px;
            font-weight: 400 !important;
            background-color: #e63946ff;
            color: #fff;
            padding: 3px 5px;
            margin: auto;
            text-align: center;
            display: inline-block !important;
            text-decoration: none;
            border: 0px;
            width: max-content;
            cursor: pointer;
            transition: all 0.3s 0s ease-in-out;
        }

        .button:hover {
            transform: scale(1.04, 1);
            background-color: rgb(216, 10, 27);
            text-decoration: none;
        }
        .button a{
            color:#fff;
        }
    </style>
</head>
<body>
    <div class="main">
        <h3 style="color:blue;">{{$uuid}} adalah id surat anda.</h3> <p>ID tersebut dapat anda gunakan untuk menedit surat dikemudian hari.<p>
        <p>Berikut hasil surat lamaran anda</p>

        <div class="main2">

        <p>Yth. Hiring Manager dari {{$company}}</p>

        <p>Perkenalkan saya {{$name}}. Saya menemukan lowongan untuk {{$position}} di {{$company}} dan saya tertarik untuk mengajukan lamaran pada lowongan tersebut.

        <br><br>{{$experience}}<br><br>

        Bersama dengan email ini terlampir CV saya. Bila ada pertanyaan lebih lanjut dapat menghubungi kontak dibawah. Terima kasih atas perhatiannya.</p>

        Hormat saya,

        <p>{{$name}}<br>
        Email: {{$email}}</p>
        <button class='button' style='background:red;'><a href='/delete/{{$uuid}}' alt='Delete'>Delete</a></button>
        <button class='button' style='background:blue;'><a href='/print/{{$uuid}}.pdf' alt='Print'>Print</a></button>
        <button class='button' style='background:green;'><a href='/edit/{{$uuid}}' alt='Edit'>Edit</a></button>
    </div>
    </div>
    
</p>
</body>
</html>