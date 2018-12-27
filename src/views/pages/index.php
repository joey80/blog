<?php
    $test = 'Leaflet Map Test';
?>
<?php require APPROOT . '/views/inc/header.php'; ?>
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
                        <a href="../pages/single" class="main">Read More ...</a><br />
                        <button class="button">Hello There</button>
                    </p>
                </div>
                <?php require APPROOT . '/views/inc/sidebar.php'; ?>
            </section>
        </div>
        <?php require APPROOT . '/views/inc/footer.php'; ?>