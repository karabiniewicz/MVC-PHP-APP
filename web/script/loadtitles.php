<?php
if (session_status() == true) {
    session_start();
}
require '../../vendor/autoload.php';
require_once '../../DB.php';

function CheckPrivate($zdjecie, &$private)
{
    $private = '';
    if (isset($zdjecie['private']) && $zdjecie['private'] != '') {
        if (isset($_SESSION['login'])) {
            if ($_SESSION['login'] == $zdjecie['private']) {
                $private = "prywatne";
                return true;
            }
        }
        return false;
    } else
        return true;
}

$titlesNew = $_POST['titleNew'];

$query = [
    'tytul' =>
    [
        '$regex' => $titlesNew, '$options' => 'i'
    ]
];
$zdjecie = DB::get()->zdjecia->find($query);

if ($zdjecie != NULL) {
    foreach ($zdjecie as $zdjecie) {
        if (CheckPrivate($zdjecie, $private)) {
            $name = $zdjecie['_id'];
            $author = $zdjecie['autor'];
            $title = $zdjecie['tytul'];
            echo <<<END
        <figure>
            <p class="rozgrywki">/od: $author  </p>
            <div class="przepelnienie">
            <a href="zdjecia/$name" target="_blank"><img src="miniatury/$name" alt="$name" />$private</a>
            </div>
            <figcaption>$title</figcaption>
        </figure>
END;
        }
    }
}
