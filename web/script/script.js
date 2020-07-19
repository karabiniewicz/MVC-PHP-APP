if (window.localStorage) {
  if (localStorage.pojemnik != undefined) {
    document.getElementById("przywitanie").innerHTML = localStorage.pojemnik;
  } else {
    localStorage.setItem("witaj", "Witaj ponownie na naszej stronie");
    localStorage.pojemnik = localStorage.getItem("witaj");
    document.getElementById("przywitanie").innerHTML =
      "Witamy nowego czytelnika!";
  }
}

function ulubiony() {
  if (window.sessionStorage) {
    var wartosc = document.getElementById("numer").value;
    sessionStorage.setItem("wartosc", wartosc);
    if (sessionStorage.getItem("wartosc") == 0) {
      sessionStorage.setItem("wartosc", "Brak ulubionego wpisu.");
      document.getElementById("wynik").innerHTML = sessionStorage.getItem(
        "wartosc"
      );
    } else if (sessionStorage.getItem("wartosc") == 1) {
      var wartosc = document.getElementById("mecz1").innerHTML;
      sessionStorage.setItem("wartosc", "Zainteresował Cię mecz " + wartosc);
      document.getElementById("wynik").innerHTML =
        sessionStorage.getItem("wartosc") +
        ". <br/> Dziękujemy za wybór i postaramy się o podobne posty dla Ciebie.";
    } else if (sessionStorage.getItem("wartosc") == 2) {
      var wartosc = document.getElementById("mecz2").innerHTML;
      sessionStorage.setItem("wartosc", "Zainteresował Cię mecz " + wartosc);
      document.getElementById("wynik").innerHTML =
        sessionStorage.getItem("wartosc") +
        ". <br/> Dziękujemy za wybór i postaramy się o podobne posty dla Ciebie.";
    } else if (sessionStorage.getItem("wartosc") == 3) {
      var wartosc = document.getElementById("mecz3").innerHTML;
      sessionStorage.setItem("wartosc", "Zainteresował Cię mecz " + wartosc);
      document.getElementById("wynik").innerHTML =
        sessionStorage.getItem("wartosc") +
        ". <br/> Dziękujemy za wybór i postaramy się o podobne posty dla Ciebie.";
    }
  }
}

var numer = 0;

function zmienfoto() {
  numer++;
  var mod = (numer % 2) + 1;
  var zdjecie1 = '<img src="img/l' + mod + '.jpg"/>';
  var zdjecie2 = '<img src="img/Liv' + mod + '.jpg"/>';
  var zdjecie3 = '<img src="img/b' + mod + '.jpg"/>';
  document.getElementById("zdjecie1").innerHTML = zdjecie1;
  document.getElementById("zdjecie2").innerHTML = zdjecie2;
  document.getElementById("zdjecie3").innerHTML = zdjecie3;
}

function opinia() {
  var paragraf = document.createElement("P");
  paragraf.innerHTML =
    '"W ostatnich latach finały ligi mistrzów przyzwyczaiły nas do większych emocji niż ten mecz, lecz po tak emocjonujących wcześniejszych etapach rozgrywek, można ich zrozumieć i im to wybaczyć. " - Mateusz Borek';
  document.getElementById("opinia").appendChild(paragraf);
}

$(document).ready(function() {
  var NavY = $(".nawigacja").offset().top;

  var stickyNav = function() {
    var ScrollY = $(window).scrollTop();

    if (ScrollY > NavY) {
      $(".nawigacja").addClass("sticky");
    } else {
      $(".nawigacja").removeClass("sticky");
    }
  };

  stickyNav();

  $(window).scroll(function() {
    stickyNav();
  });
});

$(function() {
  $(document).tooltip();
});

$("#przycisk3").click(function() {
  $("#tabela3").hide("fade", {}, 1000);
});

$("#przycisk2").click(function() {
  $("#tabela2").hide("fade", {}, 1000);
});

$("#przycisk1").click(function() {
  $("#tabela1").hide("fade", {}, 1000);
});
