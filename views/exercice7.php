<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-white p-4">Exercice 7</h1>
            <h2 class="text-white">Listes des clients !</h2>
            <div class="row">
                <?php foreach ($listClients as $client) { ?>
                    <div class="col-12 col-lg-4 m-2 mx-auto text-center wrapper">
                        <div class="card cardtest">
                            <div class="card-body">
                                <p class="card-text">Prénom : <?= $client->firstName ?> Nom : <?= $client->lastName ?>. Possède une carte ?
                                    <?php
                                    if (($client->card == '1') && ($client->cardtypesId == '1')) {
                                        echo  " Oui, son numéro est $client->cardNumber";
                                    } else {
                                        echo 'Non';
                                    } ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>