<?php
$lvl = '';
$path = 'index.php';
$title = 'Silkeborg Mandskor - mandskorsang med stor underholdningsværdi';
$description = 'Silkeborg Mandskor er et moderne fremadrettet mandskor, der består af 26 aktive medlemmer, fordelt på fire stemmer (TTBB).
Koret er meget velsyngende, og har gennem mange år hørt til blandt de bedste amatørmandskor i Danmark.';
$image = '';
$style = '';
$script = '';
include "php/head.php";
?>
<body itemscope itemtype="http://schema.org/MusicGroup">
<header>
    <div class="topnav row">
        <section class="content">
            <nav>
                <div><img src="gfx/facebook.png" width="17" height="21" alt=""></div>
                <div id="login">Log på<div>
            </nav>
        </section>
    </div>
    <section class="content" role="img">
        <img src="gfx/smk-kor-logo-100.png" width="114" height="100" alt="">
        <span>silkeborg</span>mandskor.dk
    </section>
    <div class="navbar">
        <section class="content">
<?php
include "php/nav.php";
?>
        </section>
    </div>
</header>
<div role="banner">
    <section class="content">
<?php
include "php/banners.php";
?>
    </section>
</div>
<main role="main">
    <section class="content teasers">
        <div class="row">
            <div class="c-03 c-m-06">
                <div class="teaser">
                <img src="gfx/icons/day-28-of-a-calendar.png">
                <h2>Kommende arrangementer</h2>
                <ul>
                    <li>Julekoncert i Baunekirken.<br><span class="date">6. december 2017 kl. 19.30</span></li>
                    <li>Midnatskoncert i Silkeborg kirke.<br><span class="date">8. december 2017 kl. 23.00</span></li>
                    <li>Julekoncert i Vester Velling kirke.<br><span class="date">14. december 2017 kl. 19.30</span></li>
                    <li>...</span></li>
                </ul>
                <button id="arrangementer">Se hele listen</button>
                </div>
            </div>
            <div class="c-03 c-m-06">
                <div class="teaser">
                <img src="gfx/icons/speaker-inside-a-dialogue-symbol.png">
                <h2>Lyt til os</h2>
                <ul>
                    <li>Julekoncert i Baunekirken.<br><span class="date">6. december 2017 kl. 19.30</span></li>
                    <li>Midnatskoncert i Silkeborg kirke.<br><span class="date">8. december 2017 kl. 23.00</span></li>
                    <li>...</span></li>
                </ul>
                <button id="lyt-til-os">Lyt til mere</button>
                </div>
            </div>
            <div class="c-03 c-m-06">
                <div class="teaser">
                <img src="gfx/icons/3-circles-inside-a-dialogue-symbol.png">
                <h2>Om os</h2>
                <ul>
                    <li>Julekoncert i Baunekirken.<br><span class="date">6. december 2017 kl. 19.30</span></li>
                    <li>Midnatskoncert i Silkeborg kirke.<br><span class="date">8. december 2017 kl. 23.00</span></li>
                    <li>Julekoncert i Vester Velling kirke.<br><span class="date">14. december 2017 kl. 19.30</span></li>
                    <li>...</span></li>
                </ul>
                <button id="hvem-er-vi">Læs mere</button>
                </div>
            </div>
            <div class="c-03 c-m-06">
                <div class="teaser">
                <img src="gfx/icons/down-arrow-inside-a-circle.png">
                <h2>Bliv medlem</h2>
                <p>
                Kan du li´ at synge?<br>
                Vil du gerne lære det?<br>
                Kan du li ' socialt samvær?<br>
                Kunne du tænke dig at synge i mandskor?
                </p>
                <p>
                Har du lyst til at prøve, så kontakt os, og kom og lyt til os en torsdag aften når vi øver.
                </p>
                <button id="bliv-medlem">Kom nærmere</button>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <section class="content">
        <div class="credit">
            Icons made by <a href="https://www.flaticon.com/authors/appzgear" title="Appzgear">Appzgear</a> 
            from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> 
            is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC 3.0 BY</a>
        </div>
    </section>
</footer>
<script>
$(document).ready(function() {
<?php include "php/jdocready.php" ?>
});
</script>
</body>
</html>