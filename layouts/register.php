<?php include "include/head.php"; ?>
<main>
    <article>
        <h3 class="naglowek">Rejestracja</h3>

        <form method="POST" action="/new_user" class="center_form">
            <fieldset>
                <legend>Rejestracja</legend>
                <div><label><b>Email:</b><input type="email" name="email" required></label></div>
                <div><label><b>Login:</b><input type="text" name="login" placeholder="login" /></label></div>
                <div><label><b>Hasło:</b><input type="password" name="haslo" required><br></label></div>
                <div class="margin"><label><b>Powtórz hasło:</b><input type="password" name="powtorz_haslo" required></label></div>
                <div><label><input type="submit" value="Utwórz konto!" name="rejestruj"></label></div>
            </fieldset>
        </form>
        <div class="center_form">
            <?php
            for ($i = 0; $i < 6; $i++) {
                if (isset($errors[$i])) {
                    echo "<p style='color:red;'>$errors[$i]</p>";
                    unset($errors[$i]);
                }
            }
            ?>
        </div>
    </article>
</main>
<?php include "include/footer.php"; ?>