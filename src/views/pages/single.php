<?php
    $test = 'Single Article';
?>
<?php require APPROOT . '/views/inc/header.php'; ?>
        <div class="container container--white container--bump">
            <section class="content">
                <div class="content__container">
                    <h1><?php echo $test ?></h1>
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
        
        <script src="<?php echo URLROOT; ?>/js/bundle.js"></script>
    </body>
</html>