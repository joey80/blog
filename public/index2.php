<?php
    $test = 'Leaflet Map Test';
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Blog CMS developed with PHP created by Joey Leger">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <title>blogStorn 2.0</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Sansita">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="header__section">
            <div class="header">
                <div class="header__container">
                    <a href="index2.php" class="none">
                        <div class="header__logo">
                            blog<span class="header__logo__big">S</span>torn
                        </div>
                    </a>
                    <div class="nav__container">
                        <div class="popup__container">
                            <div class="nav__avatar">
                            </div>
                            <div class="popup"></div>
                        </div>
                        <div class="nav__menu">
                            <i class="fas hamburger fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__links">
                <div class="header__links__container">
                    <div class="header__links__section">
                        <span class="header__links__item">link one</span>
                        <span class="header__links__item">link two</span>
                        <span class="header__links__item">link three</span>
                        <span class="header__links__item">link four</span>
                    </div>
                    <div class="header__links__section">
                        <span class="header__links__item">link one</span>
                        <span class="header__links__item">link two</span>
                        <span class="header__links__item">link three</span>
                        <span class="header__links__item">link four</span>
                    </div>
                    <div class="header__links__section">
                        <span class="header__links__item">link one</span>
                        <span class="header__links__item">link two</span>
                        <span class="header__links__item">link three</span>
                        <span class="header__links__item">link four</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container--white container--bump">
            <section class="content">
                <div class="content__container">
                    <h1><?php echo $test ?></h1>
                    <div id="map"></div>
                    <p>Lorem ipsum dolor sit amet, mea virtute eruditi ad. Pri ea nostro oportere, te eos ornatus assentior.
                        No malorum nominati mel, luptatum deserunt posidonium sea te, eam id inani denique. Falli zril
                        definitionem cu per. Cu prima impetus tacimates vis, dicat volutpat sit ut. Odio nominati mei ad.</p>
                    <h2>Hello World</h2>
                    <p>Lorem ipsum dolor sit amet, mea virtute eruditi ad. Pri ea nostro oportere, te eos ornatus assentior.
                        No malorum nominati mel, luptatum deserunt posidonium sea te, eam id inani denique. Falli zril
                        definitionem cu per. Cu prima impetus tacimates vis, dicat volutpat sit ut. Odio nominati mei ad.
                        <br />
                        <a href="single.php" class="main">Read More ...</a></p>
                </div>
                <div class="sidebar">
                    <h2>I'm the sidebar</h2>
                </div>
            </section>
        </div>
        <section class="footer">
            <div class="footer__container">
                <h2>I'm the footer</h2>
            </div>
        </section>
        
        <script src="js/bundle.js"></script>
    </body>
</html>