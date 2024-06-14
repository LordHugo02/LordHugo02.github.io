<?php
    include('controller/accueil.php')
?>
<main class="mx-5 bg">
    <h2>Les poissons</h2>
    
    
    <?php
    foreach ($listeForum as $forum) {
    ?>
    <article>
        <div class="card my-3">
            <div class="card-header">
                <h3>
                    <a href="/forum/<?php echo($forum["id"]) ?>" class="" aria-hidden="true"> <?php echo($forum["titre"]) ?></a>
                </h3>
            </div>
            
            
            <div class="mx-5">
                <div class="row bgc5 p-1">
                    <div class="col-9  p-1">
                        <div class="row  h-50 p-1">
                            <p> <?php echo($forum["description"]) ?></p>
                        </div>
                        <div class="row  h-50 p-1">
                            <div class="col-3">
                                <p aria-hidden="true">Commentaires : 6</p>
                            </div>
                            <div class="d col-9">
                            </div>
                        </div>
                    </div>
                    <div class="col-3 ">
                        <img class="img-fluid rounded" alt="<?php echo($forum["titre"]) ?>" src="../img/fish/<?php echo($forum["id"]) ?>.png">
                    </div>
                </div>
           </div>
            <div class="card-footer">
                <a href="/forum/<?php echo($forum["id"]) ?>" class="btn btn-primary" aria-label=" <?php echo "Consulter les six commentaires sur " .  $forum["titre"] ?>"</a>
            </div>
        </div>
    </article>
    
    
    <?php } ?>

</main>


