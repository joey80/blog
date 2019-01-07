<?php
    $test = 'Single Article';
?>
<?php require APPROOT . '/views/inc/header.php'; ?>
        <div class="container container--white container--bump">
            <section class="content">
                <div class="content__container" role="main">
                    <h1><?php echo $test ?></h1>
                </div>
                <?php require APPROOT . '/views/inc/sidebar.php'; ?>
            </section>
        </div>
        <?php require APPROOT . '/views/inc/footer.php'; ?>