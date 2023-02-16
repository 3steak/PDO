<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Exercice 2</h1>
            <h2>Afficher les différents types de pestacles :</h2>
            <div class="row">
                <?php foreach ($showtypes as $showtype) {


                    echo '<div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text">' . $showtype->type . '</p>
                            </div>
                        </div>
                      </div>';
                } ?>


            </div>
        </div>
    </div>
</div>