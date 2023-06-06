<!-- Header -->
<?php include('header.php');

// Tableau des oeuvres
include('oeuvres.php');
?>

<main>
    <?php

    $id =$_GET['oeuvre'];

    if (array_key_exists($id, $oeuvres))
    {
        echo '<article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img src="' . $oeuvres[$id]['image'] . '" alt="' . $oeuvres[$id]['titre'] . '">
                </div>
                <div id="contenu-oeuvre">
                    <h1>' . $oeuvres[$id]['titre'] . '</h1>
                    <p class="description">' . $oeuvres[$id]['artiste'] . '</p>
                    <p class="description-complete">' . $oeuvres[$id]['description'] . '</p>
                </div>
            </article>';
    } else {
        echo 'L\'oeuvre ' . $id . ' n\'existe pas';
    }

    ?>

</main>

<!-- Footer -->
<?php include('footer.php') ?>

