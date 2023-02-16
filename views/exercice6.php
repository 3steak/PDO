<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Exercice 6</h1>
            <h2>Les spectacles par ordre alphabétique.
            </h2>
            <div class="row">
                <?php foreach ($shows as $show) {
                    echo '<div class="col-4 m-2 mx-auto text-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title"> Spectacle ' . $show->title  . '</h5>
                            <p class="card-text">Réalisé par ' . $show->performer . 'le ' . $show->date . ' à ' . $show->startTime . '</p>
                        </div>
                    </div>
                  </div>';
                } ?>
            </div>
        </div>
    </div>
</div>