<!-- Header -->
<?php include('header.php') ?>

<!-- Tableau des oeuvres -->
<?php include('oeuvres.php') ?>

<main>
    <?php //var_dump($_GET['oeuvre']); 
    //echo $_GET['oeuvre'];
    //var_dump($oeuvres);
    //echo $oeuvres[$_GET['oeuvre']]['image'];
    ?>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvres[$_GET['oeuvre']]['image']; ?>" alt="<?php echo $oeuvres[$_GET['oeuvre']]['titre']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvres[$_GET['oeuvre']]['titre']; ?></h1>
            <p class="description"><?php echo $oeuvres[$_GET['oeuvre']]['artiste']; ?></p>
            <p class="description-complete">
            <?php echo $oeuvres[$_GET['oeuvre']]['description']; ?>
            </p>
        </div>
    </article>
</main>

<!-- Footer -->
<?php include('footer.php') ?>

