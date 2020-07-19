<?php include "include/head.php"; ?>
<main>
  <article>
    <h3 class="naglowek">Biblioteka fotografi</h3>
    <div class="galeria">
      <form action="/remember" class="wybrane" method="post">
        <?php
        echo "<div class='Pages' >";
        for ($i = 0; $i < $cnt; $i++)
          echo "<a " . ($i == $strona ? "class='currentPage'" : "") . " href='gallery?page=" . ($i + 1) . "'>" . ($i + 1) . "</a>/";
        echo "</div>";
        for ($i = $start; $i < $length && $i < $end; $i++) {
          CheckPrivate($i, $name, $title, $author, $private);
          
echo <<<END
        <figure>
        <label class='box'> Wybierz! <input type="checkbox" name="photo[]" value="$name[$i]"
END;
          if (IsChecked($strona, $name[$i])) {
            echo 'checked="checked"';
          }
echo <<<END
        ></label>
        <p class="rozgrywki">/od: $author</p>
        <div class="przepelnienie">
        <a href="zdjecia/$name[$i]" target="_blank"><img src="miniatury/$name[$i]" alt="$name[$i]" />$private</a>
        </div>
        <figcaption>$title</figcaption>
      </figure>
END;
        }
        echo "<div class='czyszczenie'></div>";
        echo "<input type='submit' value='Zapamiętaj wybrane' name='$strona'>";
        ?>
      </form>
    </div>

    <div id="przycisk">
      Dodaj zdjęcie na naszą strone, a zaraz się pojawi!
    </div>

    <div class="center_form">
      <form action="/image" method="POST" enctype="multipart/form-data">
        <fieldset>
          Wybierz zdjęcie:
          <input type="file" name="fileToUpload" id="fileToUpload">
          Znak wodny:
          <input type="text" name="watermark" required />
          Tytuł:
          <input type="text" name="title" required />
          Autor:
          <input type="text" name="author"
          <?php
          if (UserLogIn()) {
            echo "value=".$_SESSION['login'];
            ?>
             required />
             <p>Dodatkowa opcje dla zalogowanych:</p>
             <div><label class='box'><input type="radio" name="radio" value="public" checked>Dodaj publicznie</label></div>
             <div><label class='box'><input type="radio" name="radio" value="private">Dodaj prywatnie </label></div>
             <?php
          }
          else
          {
          ?>
          required />
          <?php
          }
          ?>
          
          <div><input type="submit" value="Załaduj" name="submit"></div>
        </fieldset>
      </form>
    </div>

    <div class="center_form">
            <?php
            for ($i = 0; $i < 3; $i++) {
              if (isset($errors[$i])) {
                echo "<p style='color:red;'>$errors[$i]</p>";
                unset($errors[$i]);
              }
            }
            if(isset($com)){
              echo "<p style='color:gold;'>$com</p>";
              unset($com);
            }
            ?>
    </div>
  </article>
</main>
<?php include "include/footer.php"; ?>