<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Bibliteka Ligi Mistrzów</title>
    <meta name="description" content="Biblioteka LM, czyli multimedialna encyklopedia o najważniejszych meczach w rozgrywkach Ligi Mistrzów" />
    <meta name="keywords" content="football, piłka nożna, tv, sport" />
    <meta name="author" content="Adam Karabiniewicz" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-Ua-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="script/main.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet" />
</head>

<body>
    <header>
        <h1 class="naglowek">Biblioteka Ligi Mistrzów</h1>

        <div id="przywitanie">Witamy!</div>

        <div class="login">
            <?php

            if (isset($_SESSION['login'])) {
                echo "Zalogowany jako " . $_SESSION['login'];
                echo "</br><b>Aby wylogować <a href='/logout'>kliknij tutaj</a>.</b>";
            }

            ?>
        </div>

        <div class="logoimg">
            <img src="img/Logo_uefa_2012.png" alt="UEFA" />
        </div>

        <nav>
            <div class="nawigacja">
                <ul>
                    <li><a href="/register">Rejestracja</a></li>
                    <li><a href="/login">Logowanie</a></li>
                    <li><a href="/">Strona główna</a></li>
                    <li><a href="/gallery">Galeria Kibica</a></li>
                    <li><a href="/gallery_user">Twoja Galeria!</a></li>
                    <li><a href="/search">Wyszukiwarka</a></li>
                </ul>
            </div>
        </nav>
    </header>