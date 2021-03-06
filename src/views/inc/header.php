<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Blog CMS developed with PHP created by Joey Leger">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <title><?php echo SITENAME; ?></title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Sansita">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css">
    </head>
    <body>
        <div class="header__section">
            <div class="header">
                <div class="header__container">
                    <a href="../pages/index" class="none">
                        <div class="header__logo" tabindex="1">
                            blog<span class="header__logo__big">S</span>torn
                        </div>
                    </a>
                    <div class="nav__container">
                        <div class="popup__container">
                            <button class="nav__avatar">
                            </button>
                            <div class="popup"></div>
                        </div>
                        <button class="nav__menu">
                            <i class="fas hamburger fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="header__links" role="navigation">
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
            </nav>
        </div>