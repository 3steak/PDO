<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Exercice 2</h1>
            <h2>Afficher les différents types de pestacles :</h2>
            <ul>
                <?php foreach ($showtypes as $showtype) {
                    echo "<li> $showtype[0] </li>";
                } ?>

            </ul>
        </div>
    </div>
</div>