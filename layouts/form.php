<?php include "include/head.php"; ?>
<main>
  <article>
    <h3 class="naglowek">Rejestracja / logowanie</h3>

    <form method="POST">
      <fieldset>
        <legend>Logowanie</legend>
        <div><label>Login:<input type="text" placeholder="login" /></label></div>
        <div><label>Hasło:<input type="password" placeholder="hasło" /></label></div>
        <div><label>Email:<input type="email" placeholder="tu nie potrzebny" /></label></div>
      </fieldset>

      <fieldset>
        <legend>Główny formularz</legend>

        <div>
          <label>
            Ile spodobało Ci się podstron:
            <input min="0" max="3" type="number" /></label>
        </div>

        <div>Twoja propozycja nazwy strony(link): <input type="url" /></div>

        <div><label for="komentarz">Uwagi do strony:</label></div>
        <textarea name="komentarz" id="komentarz" cols="35" rows="30"></textarea>
        <br />
        <input type="submit" value="Wyślij!" />
        <input type="reset" value="Wyczyść!" />
      </fieldset>
    </form>

  </article>
</main>
<?php include "include/footer.php"; ?>