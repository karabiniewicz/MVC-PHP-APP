<?php include "include/head.php"; ?>
<main>
    <article>
        <h3 class="naglowek">Biblioteka użytkownika</h3>
        <div class="galeria">
            <form action="/unremember" class="wybrane" method="post">
                <?php
                echo "<div class='Pages' >";
                for ($i = 0; $i < $cnt; $i++)
                    echo "<a " . ($i == $strona ? "class='currentPage'" : "") . " href='gallery_user?page=" . ($i + 1) . "'>" . ($i + 1) . "</a>/";
                echo "</div>";
                for ($i = $start; $i < $length && $i < $end; $i++) 
                {
                    printTitAut($i, $name, $title, $author);                    
echo <<<END
                            <figure>
                                <label class='box'> Wybierz! <input type="checkbox" name="~photo[]" value="$name[$i]"
                                ></label>
                                <p class="rozgrywki">/od: $author  </p>
                                <div class="przepelnienie">
                                <a href="zdjecia/$name[$i]" target="_blank"><img src="miniatury/$name[$i]" alt="$name[$i]" /></a>
                                </div>
                                <figcaption>$title</figcaption>
                            </figure>
END;
            }
                echo "<div class='czyszczenie'></div>";
                echo "<input type='submit' value='Usuń zaznaczone z zapamiętanych' name='$strona'>";
                ?>
            </form>
        </div>
    </article>
</main>
<?php include "include/footer.php"; ?>