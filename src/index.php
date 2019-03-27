<?php
session_start();
// lire le paramètre de langue
if ( isset( $_GET[ 'lang'] )) {
  $lang = $_GET[ 'lang'];
  // contrôler!
  if ( !in_array( $lang, [ 'fr', 'en'])  ) {
    $lang = 'fr';
  }
  $_SESSION[ 'lang' ] = $lang;
} else if ( isset( $_SESSION[ 'lang' ] )) {
  $lang = $_SESSION[ 'lang' ];
} else {
  // langue par défaut
  $lang = 'fr';
  $_SESSION[ 'lang' ] = $lang;
}
  // ouvrir le fichier de langue
  $json = file_get_contents( 'lang/' . $lang . '.json' );
  $trans = json_decode( $json, true );
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $trans[ 'index_title' ]?></title>
    <meta name="google-site-verification" content="_YVRNl_krwDPMCv_6gT7J88_8aD5tZvIEuX8XN-uPXw" />
    <meta name="description" content="Bonjour à tous je m'appelle Hugo DUPRAT, je suis actuellement étudiant en deuxième année de MMI à Angoulême, une formation pluridisciplinaire dans le domaine du multimédia, du web et de la communication. Pour présenter un panel de mes compétences, j'ai choisi de créer ce portfolio. Venez donc visiter mon univers et mes créations ! " />
    <meta name="author" content="DUPRAT Hugo"/>
    <meta property="og:title" content="DUPRAT Hugo | Portfolio"/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content="hduprat.mmi-angouleme.fr"/>
    <meta property="og:site_name" content="Portfolio DUPRAT Hugo"/>
    <meta property="og:description" content="Bonjour à tous je m'appelle Hugo DUPRAT, je suis actuellement étudiant en deuxième année de MMI à Angoulême, une formation pluridisciplinaire dans le domaine du multimédia, du web et de la communication. Pour présenter un panel de mes compétences, j'ai choisi de créer ce portfolio. Venez donc visiter mon univers et mes créations ! "/>
    <meta name="twitter:title" content="Portfolio DUPRAT Hugo" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="hduprat.mmi-angouleme.fr" />
    <meta name ="reply-to" content = "hugo.duprat@laposte.net"/>
    <meta name ="author" content = "Hugo DUPRAT"/>
    <meta name="theme-color" content="#040d23">
    <meta name="msapplication-navbutton-color" content="#040d23">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="robots" content="index">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
    <link rel="stylesheet" href="style/style.scss">
    <link rel="icon" href="./img/favicon.ico" />
    <script defer type="text/javascript" src="./js/javascript.js"></script>
    
</head>
<body>
<!--<body oncontextmenu="return false" ondragstart="return false" onmouseover="window.status='Il est strictement interdit de copier les images sur ce site'; return true;">-->


  <div class="objets">
        <div class="objet" data-rellax-speed="-4"><img src="./img/sun.svg" alt="sun"></div>
        <div class="objet" data-rellax-speed="4"><img src="./img/birds.svg" alt="birds"></div>
        <div class="objet" data-rellax-speed="3"><img src="./img/birds_2.svg" alt="birds"></div>
        <div class="objet" data-rellax-speed="-3"><img src="./img/fils.svg" alt="fils"></div>
        <div class="objet" data-rellax-speed="-4"><img src="./img/fils_2.svg" alt="fils"></div>
        <div class="objet" data-rellax-speed="-2"><img src="./img/plane.svg" alt="avion"></div>
        <div class="objet" data-rellax-speed="0"><img src="./img/arriere_devant.svg" alt="fils"></div>
        <div class="objet" data-rellax-speed="-4"><img src="./img/arriere_fond.svg" alt="avion"></div>
    </div>
    <!--FOND-->
    <div id="immeuble">    
        <!--SECTION ACCUEIL -->
            <section id="welcome">
                <img src="./img/titre.svg" alt="Portfolio DUPRAT Hugo">
                <a href="#presentation" class="bas"><i class="demo-icon icon-down-open">&#xe800;</i></a>
            </section>

            <section id="presentation">
                <article class="textes" id="press">
                        <h2><?php echo $trans[ 'presentation_h2' ]?></h2>
                        <p><?php echo $trans[ 'presentation_p' ]?></p>
                        
                </article>
                <a href="#multi" class="bas"><i class="demo-icon icon-down-open">&#xe800;</i></a>
            </section>

            <section id="multi">
                <article class="textes" id="multis">
                        <h2><?php echo $trans[ 'multimedia_h2' ]?></h2>
                        <p><?php echo $trans[ 'multimedia_p' ]?></p>
                        <span class="discover">
                            <strong><?php echo $trans[ 'multimedia_strong' ]?></strong>
                            <img src="./img/arrow.png" alt="arrow">
                        </span>
                </article>                
                <a href="./multimedia.html" class="left" title="Mes créations multimédia"><i class="demo-icon icon-info">&#xe802;</i></a>
                <a href="#dev" class="bas"><i class="demo-icon icon-down-open">&#xe800;</i></a>

            </section>

            <section id="dev">
                <article class="textes" id="devs">
                        <h2><?php echo $trans[ 'web_h2' ]?></h2>
                        <p><?php echo $trans[ 'web_p' ]?></p>
                        <span class="discover">
                                <strong><?php echo $trans[ 'web_strong' ]?></strong>
                                <img src="./img/arrow.png" alt="arrow">
                        </span>
                </article>
                <a href="./multimedia.html" class="left" title="Mes créations en développement web"><i class="demo-icon icon-info">&#xe802;</i></a>                
                <a href="#mus" class="bas"><i class="demo-icon icon-down-open">&#xe800;</i></a>
            </section>

            <section id="mus">
                <article class="textes" id="muss">
                        <h2><?php echo $trans[ 'musique_h2' ]?></h2>
                        <p><?php echo $trans[ 'musique_p' ]?></p>
                        <span class="discover">
                                <strong><?php echo $trans[ 'musique_strong' ]?></strong>
                                <img src="./img/arrow.png" alt="arrow">
                        </span>
                </article>
                <a href="./multimedia.html" class="left" title="Mes créations musicales"><i class="demo-icon icon-info">&#xe802;</i></a> 
                <a href="#contact" class="bas"><i class="demo-icon icon-down-open">&#xe800;</i></a>
            </section>	

            <section id="contact">
                <article class="contacts">
                        <h2><?php echo $trans[ 'contact_h2' ]?></h2>
                        <div class="contact">
                            <h3><?php echo $trans[ 'contact_h3_1' ]?></h3>
                            <div class="contact__line">
                                <div>
                                    <a href="mailto:hugo.duprat@laposte.net"  rel="nofollow" title="Mon e-mail"><i class="demo-icon icon-mail-alt">&#xf0e0;</i></a>
                                </div>
                                <div>
                                    <a href="https://www.linkedin.com/in/hugo-duprat-088a14171/"  rel="nofollow"><i class="demo-icon icon-linkedin-squared" title="Ma page linkedin">&#xf30c;</i></a>
                                </div>
                            </div>
                            <h3><?php echo $trans[ 'contact_h3_2' ]?></h3>
                            <div class="contact__line">
                                <div>
                                    <a href="https://www.instagram.com/dugodup/"  rel="nofollow" title="Mon compte instagram"><i class="demo-icon icon-instagram">&#xf16d;</i></a>
                                </div>
                                <div>
                                    <a href="https://soundcloud.com/hugo-duprat"  rel="nofollow" title="Ma page soundcloud"><i class="demo-icon icon-soundcloud">&#xf1be;</i></a>
                                </div>                            
                                <div>
                                    <a href="https://github.com/dupratzah"  rel="nofollow" title="Mon profil github"><i class="demo-icon icon-github-circled">&#xe803;</i></a>
                                </div>
                            </div>
                        </div>
                </article>
                <a href="#welcome" class="home"><i class="demo-icon icon-home">&#xe801;</i></a>
            </section>
    </div>

    <footer>
        <p><?php echo $trans[ 'footer_p' ]?></p>
        <a href="./mentions_legales.html" title="mentions légales"><?php echo $trans[ 'footer_a' ]?></a>
    </footer>
</body>
</html>