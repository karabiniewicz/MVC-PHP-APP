<?php 
include "include/head.php"; 
require_once '../DB.php';
?>
<main>
    <article>
        <h3 class="naglowek">Wyszukiwarka użytkownika</h3>
        <div class="center_form"><input type="text" id="input" placeholder="Wyszukaj po tytule..."></div>
        <div class="galeria">
            <div id="titles">
              <h3 class="newheder"> Tu pojawią się znalezione miniatury!</h3>
            </div>
          <div class='czyszczenie'></div>
        </div>
    </article>
</main>
<script src="/script/jquery-3.4.1.min.js"></script>
<script src="/script/search.js"></script>
<?php include "include/footer.php"; ?>