<body class=QnAA></body>

<div class="container">
    <div class="row">
        <?php /** @var \App\Models\Ponuka[] $data */
        foreach ($data as $ponuka) { ?>
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 >Meno : </h5> <p><?= $ponuka->getMeno()?> <?= $ponuka->getPriezvisko() ?></p>
                        <h5>Kontakt :</h5><p> <?= $ponuka->getEmail()?></p>
                        <h5>Mesto :</h5><p> <?= $ponuka->getMesto()?></p>

                        <h5>Dátum odjazdu do strediska : </h5><p><?= $ponuka->getDatum()?></p>
                        <p class="card-text"><?= $ponuka->getPoznamka() ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="?c=Ponuka&a=delete&id=<?= $ponuka->getId() ?>" class="btn btn-sm btn-outline-secondary" role="button" aria-pressed="true">Delete</a>
                                <a href="?c=Ponuka&a=edit&id=<?= $ponuka->getId() ?>" class="btn btn-sm btn-outline-secondary" role="button" aria-pressed="true">Edit</a>
                            </div>
                            <small class="text-muted"></small>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="container">
    <a href="?c=Ponuka&a=add" class="btn btn-info" role="button"> + Pridať ponuku spolujazdy</a>
</div>


