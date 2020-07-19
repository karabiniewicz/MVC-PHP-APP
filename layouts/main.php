<?php include "include/head.php"; ?>
<main>
<?php
if(isset($com))
{
    echo "<p style='color:gold;'>$com</p>";
    unset($com);
}
?>
  <article>
    <h3 class="naglowek">
      Multimedialna encyklopedia najważniejszych rozgrywek w Europie!
    </h3>
    <section id="Wprowadzenie">
      <div class="zaczynajmy">
        <p>
          Od zawsze interesowała mnie piłka nożna na najważniejszym
          poziomie, a jeżeli najważniejszy poziom to tylko rozgrywki Ligi
          Mistrzów, którym postanowiłem stworzyć internetową biblioteke.
        </p>
        <h3>Dla niewtajemniczonych w piłke nożną:</h3>
        <p>
          <b> Liga Mistrzów UEFA </b> to międzynarodowe, europejskie,
          klubowe rozgrywki piłkarskie, utworzone z inicjatywy UEFA w 1992,
          jako kontynuacja Pucharu Europy Mistrzów Krajowych (zwanego też
          Pucharem Europy lub Pucharem Mistrzów) i regularnie prowadzone
          przez tę organizację od sezonu 1992/1993 w ramach europejskich
          pucharów. Przeznaczone dla najlepszych męskich drużyn klubowych
          (zajmujących czołowe miejsca w europejskich ligach krajowych) oraz
          rozgrywane na europejskich stadionach. Są to najbardziej
          prestiżowe klubowe zmagania piłkarskie w Europie.
        </p>
      </div>
    </section>

    <section id="wpisy">
      <h3 class="naglowek">Ostatnio dodane wątki</h3>

      <div class="pojedynczyWpis">
        <p class="rozgrywki" id="pierwszy_wpis">/1 finały ligi mistrzów</p>

        <div class="obrazkiWpis">
          <h5 id="mecz1">TOTTENHAM – LIVERPOOL 0:2</h5>

          <div onmouseout="zmienfoto()" id="zdjecie1" title="Zjechanie z obrazka = zmiana fotografi">
            <img src="img/l1.jpg" alt="l1" />
          </div>

          <p>
            Finał Ligi Mistrzów: Tottenham – Liverpool 0:2. The Reds w
            Madrycie nie dali większych szans Kogutom i po trafieniach
            Mohameda Salaha oraz Divocka Origiego zdobyli szósty w histroii
            klubu Puchar Europy.
          </p>
          <p>
            The Reds byli faworytem starcia w Madrycie. W lidze dzieliły ich
            co prawda tylko dwa miejsca w tabeli, ale w rzeczywistości aż 26
            punkty. Do jedenastki sezonu Premier League dostarczyli czterech
            graczy, a Tottenham żadnego. Piłkarz sezonu? Również z
            Liverpoolu (Virgil Van Dijk). Koguty miały chęci, ale w stolicy
            Hiszpanii to nie wystarczyło. Nic nie wskórał Harry Kane, który
            wrócił do gry po siedmiu tygodniach przerwy. Heung-min Son nie
            terroryzował obrony rywali, jak potrafi. Christian Eriksen jak
            dochodził do sytuacji, strzelał ponad bramką lub zatrzymywał go
            Allison (ładny rzut wolny w 85. minucie). Także Dele Alli mógł
            zmienić bieg historii, ale w dogodnej sytuacji w drugiej połowie
            zawiódł. Poderwać kolegów starał się jeszcze po wejściu z ławki
            Lucas Moura, ale to było za mało.
          </p>
          <p>
            <b>Do trzech razy sztuka.</b> Klopp wreszcie wygrał Ligę
            Mistrzów po nieudanych próbach z Borussią Dortmund (2013) i
            Liverpoolem (2018). Cały ten mecz można streścić tak, że to
            Spurs mieli piłkę, ale Liverpool był bardziej konkretny.
            Obserwując The Reds w obronie dało się zauważyć, że nie starają
            się za wszelką cenę osaczyć rywala i zabrać mu futbolówkę, tylko
            czekają na błąd i odpowiedni moment, by go wykorzystać.
          </p>
          <p>
            W odróżnieniu od Tottenhamu można było też odczuć, że
            liverpoolczycy po przejęciu posiadania na połowie przeciwnika
            wiedzą, co zrobić, a wiele ich akcji wyglądało tak
            schematycznie, jakby żywo zostały wyciągnięte z boiska
            treningowego. To wciąż była odmiana kloppowskiego heavy-metalu,
            przy czym tym razem Niemiec nie włączył go na pełny regulator od
            samego początku meczu, a bardziej zwiększał głośność w
            najważniejszych momentach. Klopp zmodyfikował styl gry swojej
            drużyny, nie rezygnując jednocześnie z podstaw swojej filozofii
            i doczekał się zdobycia pucharu, który jest wielką nagrodą za
            cały jego wysiłek, nie tylko na Anfield.
          </p>

          <div id="opinia"></div>
          <button onclick="opinia()" title="Można dodać więcej niż raz">
            Dodaj opinie experta!
          </button>

          <table id="tabela1">
            <caption>
              <h4>Najważniejsze statystyki spotkania</h4>
              <button id="przycisk1" class="przycisk" title="Ukryj tabele">
                X
              </button>
            </caption>
            <tr>
              <th>ZESPOŁY</th>
              <th>Posiadanie piłki</th>
              <th>Ilość strzałów</th>
            </tr>
            <tr>
              <td class="zespol1">LIVERPOOL</td>
              <td>34%</td>
              <td>14</td>
            </tr>
            <tr>
              <td class="zespol2">TOTTENHAM</td>
              <td>66%</td>
              <td>16</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="pojedynczyWpis">
        <p class="rozgrywki">/2 finały ligi mistrzów</p>

        <div class="obrazkiWpis">
          <h5 id="mecz2">LIVERPOOL - AC MILAN 3:3</h5>

          <div onmouseout="zmienfoto()" id="zdjecie2" title="Zjechanie z obrazka = zmiana fotografi">
            <img src="img/Liv1.jpg" alt="LIVERPOOL" />
          </div>

          <p>
            W finale Ligi Mistrzów FC Liverpool pokonał AC Milan w rzutach
            karnych 3:2. Mecz zakończył się remisem po regulaminowym czasie
            gry 3:3. W konkursie rzutów karnych dwa strzały obronił polski
            bramkarz - Jerzy Dudek.
          </p>

          <p>
            Mecz nie zaczął się optymistycznie dla Anglików. Już w 53
            sekundzie spotkania zaczęli przegrywać po strzale Maldiniego.
            Jeszcze przed przerwą kolejne dwa gole dla Milanu zdobył Hernan
            Crespo. Po przerwie nastąpiła istna metamorfoza. Drużyna z
            Liverpoolu rzuciła się do ataku i już w 54 minucie było widać
            pierwsze efekty w postaci bramki strzelonej przez kapitana The
            Reds - Gerrarda. Chwilę później na 3:2 podwyższył Smicer, a
            potem po dobitce z rzutu karnego wyrównał Alonso. Przez
            pozostałe 60 minut reszty meczu i obydwu dogrywek żadna z drużyn
            nie przeprowadziła śmiałego ataku. Wyglądało na to, że wszyscy
            zbierali siły na karne. Dwie minuty przed końcem dogrywki
            rewelacyjną interwencją popisał się polski bramkarz. Obronił
            intuicyjnie dwa strzały Szewczenki, które mogły przechylić szalę
            zwycięstwa na stronę włoskiego klubu. Wielu światowych
            komentatorów dziwiło się, w jaki sposób ktokolwiek mógłby
            obronić takie strzały.
          </p>

          <p>
            W rzutach karnych bohaterem został bez wątpienia
            <b>Jerzy Dudek</b>. Sprowokował do spudłowania Serginho, a
            następnie obronił strzały Pirlo oraz Szewczenki.
          </p>

          <p>
            Przed meczem Obie drużyny wierzyły, że wygrana Champions League
            pozwoli im zapomnienieć o niepowowodzeniach w krajowych ligach.
            Liverpool zajął w lidze angielskiej piąte miejsce, a Milan na
            kolejkę przed końcem traci pięć punktów do prowadzącego w Serie
            A Juventusu. Finaliści tej edycji LM znają już smak zwycięstwa w
            Lidze Mistrzów - Milan zdobył tytuł mistrzowski sześć razy
            (1963, 1969, 1989, 1990, 1994, 2003), zaś Liverpool - cztery
            (1977, 1978, 1981, 1984). Drużyna Jerzego Dudka zagrała w finale
            po raz pierwszy od 20 lat. W roku 1985, 29 maja na stadionie
            Heysel w Brukseli, podczas meczu z Juventusem w wyniku zamieszek
            na trybunach zginęło 39 osób, a blisko 400 zostało rannych.
          </p>

          <table id="tabela2">
            <caption>
              <h4>Najważniejsze statystyki spotkania</h4>
              <button id="przycisk2" class="przycisk" title="Ukryj tabele">
                X
              </button>
            </caption>
            <tr>
              <th>ZESPOŁY</th>
              <th>Posiadanie piłki</th>
              <th>Ilość strzałów</th>
            </tr>
            <tr>
              <td class="zespol1">LIVERPOOL</td>
              <td>44%</td>
              <td>23</td>
            </tr>
            <tr>
              <td class="zespol4">AC MILAN</td>
              <td>56%</td>
              <td>13</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="pojedynczyWpis">
        <p class="rozgrywki" id="ostatni_wpis">/3 finały ligi mistrzów</p>

        <div class="obrazkiWpis">
          <h5 id="mecz3">JUVENTUS - BARCELONA 1:3</h5>

          <div onmouseout="zmienfoto()" id="zdjecie3" title="Zjechanie z obrazka = zmiana fotografi">
            <img src="img/b1.jpg" alt="messi suarez Neymar" />
          </div>

          <p>
            Finał Ligi Mistrzów. Juventus - Barcelona 1:3. Wielkie
            zwycięstwo Katalończyków.
          </p>
          <p>
            Pierwsze minuty finału Ligi Mistrzów nie zapowiadały wielkich
            emocji. Juventus zdołał się jednak podnieść po fatalnym początku
            i napędził stracha Barcelonie. Jednak Katalończycy okazali się
            po prostu za mocni. To zdecydowanie najlepsza drużyna minionego
            sezonu.
          </p>
          <p>
            Barcelona wyglądała niepewnie przez dwie pierwsze minuty. Ale
            już pierwszy jej atak skończył się bramką. Wszyscy zawodnicy z
            pola mieli przy niej udział, wymienili między sobą 16 podań.
            Wszyscy zastanawiali się, jak powstrzymać Messiego, Suareza i
            Neymara, a tymczasem akcję po podaniu Andresa Iniesty wykończył
            strzałem Ivan Rakitić. Obrońcy Juventusu zostali wrzuceni na
            karuzelę i nie mieli pojęcia, co się stało. Zawodnicy Barcelony
            - a zwłaszcza Messi i Neymar - upodobali sobie swoją lewą
            stronę, gdzie terroryzowali Stephane'a Lichtsteinera. Szwajcar
            jest świetny, jeśli chodzi o ofensywne wejścia, ale jego braki w
            obronie zostały brutalnie obnażone.
          </p>

          <p>
            <b>Vidal powinien wylecieć!</b>
            Zupełnie z rywalami oraz z własnymi emocjami nie radził sobie
            Arturo Vidal. Już w ciągu pierwszych 25 minut popełnił cztery
            faule, z czego trzy zasługujące na żółte kartki. Dostał ją tylko
            za pierwsze przewinienie na Sergio Busquetsie. Zaledwie cztery
            minuty później sfaulował Neymara i sędzia dał mu kolejne
            ostrzeżenie. Zgubił też Iniestę przy pierwszym golu.
          </p>
          <p>
            To piąty triumf Barcelony w Pucharze Europy / Lidze Mistrzów. Po
            raz drugi w historii sięgnęła też po potrójną koronę - oprócz LM
            wygrała również Puchar Hiszpanii i ligę hiszpańską. Juventus
            sezon kończy z podwójną koroną. Po raz czwarty z rzędu wygrał
            ligę włoską i po dwudziestu latach triumfował w Pucharze Włoch.
          </p>

          <table id="tabela3">
            <caption>
              <h4>Najważniejsze statystyki spotkania</h4>
              <button id="przycisk3" class="przycisk" title="Ukryj tabele">
                X
              </button>
            </caption>
            <tr>
              <th>ZESPOŁY</th>
              <th>Posiadanie piłki</th>
              <th>Ilość strzałów</th>
            </tr>
            <tr>
              <td class="zespol5">BARCELONA</td>
              <td>62%</td>
              <td>17</td>
            </tr>
            <tr>
              <td class="zespol6">JUVENTUS</td>
              <td>36%</td>
              <td>14</td>
            </tr>
          </table>
        </div>
      </div>

      <div id="przycisk" onclick="ulubiony();">
        Który najnowszy wpis Ci się spodobał? Wybierz i kliknij!
      </div>

      <div id="center">
        <input id="numer" type="number" max="3" min="0" />
      </div>

      <div id="wynik">
        Nie wybrano ulubionego najnowszego wpisu
      </div>
    </section>
  </article>
</main>

<script src="/script/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="/script/jquery-ui.min.css" type="text/css" />
<link rel="stylesheet" href="/script/jquery-ui.theme.min.css" type="text/css" />
<script src="/script/external/jquery/jquery.js"></script>
<script src="/script/jquery-ui.min.js"></script>
<script src="/script/script.js"></script>
<?php include "include/footer.php"; ?>