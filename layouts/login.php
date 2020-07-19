<?php include "include/head.php"; ?>
<main>
    <article>
        <h3 class="naglowek">Logowanie</h3>

        <form method="POST" action="/connect" class="center_form">
            <fieldset>
                <legend>Logowanie</legend>
                <div><label>Login:<input type="text" name="login" placeholder="login" /></label></div>
                <label><label>Hasło:<input type="password" name="haslo" placeholder="haslo" required /></label></label>
                <div><label><input type="submit" value="Zaloguj się!" name="zaloguj" required></label></div>
            </fieldset>
        </form>
        <div class="center_form">
            <?php
            if (isset($com)) {
                echo "<p style='color:gold;'>$com</p>";
                unset($com);
            }
            ?>
        </div>
    </article>
</main>
<?php include "include/footer.php"; ?>