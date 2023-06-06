<!-- Header -->
<?php include('header.php');

// Tableau des oeuvres
include('oeuvres.php'); 
?>

    <main>
        <div id="liste-oeuvres">

            <?php
                foreach($oeuvres as $key => $oeuvre) {
                    echo '<article class="oeuvre">
                            <a href="oeuvre.php?oeuvre=' . $key .'">
                                <img src="' . $oeuvre['image'] . '" alt="' . $oeuvre['titre'] . '">
                                <h2>' . $oeuvre['titre'] . '</h2>
                                <p class="description">' . $oeuvre['artiste'] . '</p>
                            </a>
                    </article>';
                }
            ?>

        </div>
    </main>
    
<!-- Footer -->
<?php include('footer.php') ?>
