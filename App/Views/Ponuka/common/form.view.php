<?php /** @var \App\Models\Ponuka $data */ ?>
<div class="container">
    <form method="post" class="was-validated">
        <div class="row mt-3">
            <div class="col-md-12 bg-dark">
                <h1>Pridajte ponuku na spolujazdu</h1>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control formular" name="meno" id="fname" pattern= "[A-zÀ-ž]{2,}"
                               placeholder="Meno"
                               value="<?= (!empty($data['model']) ? $data['model']->getMeno() : "") ?>"
                               required minlength="2" maxlength="50">
                        <div class="invalid-feedback">Prosím, zadajte meno</div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control formular" name="priezvisko" id="lname" pattern= "[A-zÀ-ž]{2,}"
                               placeholder="Priezvisko"
                               value="<?= (!empty($data['model']) ? $data['model']->getPriezvisko() : "") ?>"
                               required minlength="2" maxlength="50">
                        <div class="invalid-feedback">Prosím, zadajte priezvisko</div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 bg-dark">
                <div class="form-row">
                    <div class="col">
                        <input type="email" class="form-control formular" name="email" id="email"
                               placeholder="E-mail"
                               value="<?= (!empty($data['model']) ? $data['model']->getEmail() : "") ?>"
                               required minlength="3" maxlength="50">
                        <div class="invalid-feedback">Prosím, zadajte e-mail</div>
                    </div>
                    <div class="col">
                        <input type="city" class="form-control formular" name="mesto" id="city" pattern= "^\S[A-zÀ-ž\s]{2,}"
                               placeholder="Mesto odkiaľ je ponúkaný odvoz"
                               value="<?= (!empty($data['model']) ? $data['model']->getMesto() : "") ?>"
                               required minlength="2" maxlength="50">
                        <div class="invalid-feedback">Prosím, zadajte mesto</div>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control formular" name="datum" id="fname"
                               placeholder="datum"
                               value="<?= (!empty($data['model']) ? $data['model']->getDatum() : "") ?>"
                               required minlength="2" maxlength="50">
                        <div class="invalid-feedback">Prosím, zadajte dátum kedy ponúkate spolujazdu</div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 bg-dark">
                <div class="form-row">
                    <div class="col">
                            <textarea type="textarea" name="poznamka" class="form-control formular" placeholder="Poznámka.Tu upresnite informácie o mieste ."
                                      required minlength="2" ><?= (!empty($data['model']) ? $data['model']->getPoznamka() : "") ?></textarea>
                        <div class="invalid-feedback">Prosím, zadajte poznámku</div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 bg-dark ">
                <input type="submit" value="Odoslať">
            </div>
        </div>
    </form>
</div>

