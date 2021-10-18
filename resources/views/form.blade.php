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
            font-size:16px;
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
        input {
            width: 420px;
            height:20px;
            margin-bottom:3px;
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
    <h1>{{$title}}</h1>
      <form action="{{$to}}" method="post">
      @csrf
        <div class="info">
          <input class="fname" type="name" name="name" placeholder="Nama lengkap" value="{{$name}}" required>
          <input type="email" name="email" placeholder="Email"  value="{{$email}}" required>
          <input type="text" name="position" placeholder="Posisi yang ingin dituju"  value="{{$position}}" required>
          <input type="text" name="company" placeholder="Nama Perusahaan" value="{{$company}}" required>
          <textarea placeholder="Pengalaman kerja yang relevan dengan posisi yang ingin dituju" type="text" name="experience" rows="15" cols="55" required>{{$experience}}</textarea>

        </div>
        
        <button class="button" type="submit" value="Submit">Preview</button>
      </form>
    </div>
    </div>
    
</p>
</body>
</html>