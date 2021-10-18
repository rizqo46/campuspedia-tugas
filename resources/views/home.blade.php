<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat surat lamaran pekerjaan</title>
    <style>
        .main {
            display: relative;
            position: center;
            margin:0 auto;
            flex-direction: column;
            width:50%;
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
        <h3 style="color:blue">{{$message}}</h3>
        <h2>Buat Surat lamaran</h2>
        <p>Buat surat lamaran anda secara otomatis. Anda dapat langsung download dalam format pdf.</p>
        <button class='button' style='background:blue;'><a href='/form'>Buat Sekarang</a></button>

        <h2>Sudah pernah membuat? </h2>
        <p>Anda sudah pernah membuat surat lamaran disini? Dan ingin mengedit?</p>
        <form action="/update" method="post">
        @csrf
        <input type="text" name="uuid" placeholder="ID Surat lamaran anda" required>
        <button class='button' style='background:green;' type="submit">Edit</button>
        </form>
        
    </div>
    
</p>
</body>
</html>