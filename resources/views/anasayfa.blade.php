<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <style>
        /* Temel stiller */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            display: inline-block; /* Düzeltme: Blok yerine inline-block */
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin-right: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #555; /* Değiştirme: Tüm alan yerine sadece metin alanını değiştir */
        }

    </style>
</head>
<body>
<nav>
    <a href="{{route('homePage')}}">Anasayfa</a>
    <a href="{{route('about')}}">Hakkımızda</a>
    <a href="{{route('cv')}}">CV</a>
    <a href="{{route('contact')}}">İletişim Bilgileri</a>

</nav>
</body>
</html>
