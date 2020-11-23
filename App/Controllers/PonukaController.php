<?php


namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\Ponuka;

class  PonukaController extends AControllerBase
{
    private $err= [];
    public function index()
    {
        return Ponuka::getAll();
    }

    public function add()
    {

        if (isset($_POST['meno']))
        {
            if ($this->validate($_POST['meno'], $_POST['priezvisko'], $_POST['email'],$_POST['mesto'],$_POST['datum'], $_POST['poznamka']) == true) {
                $ponuka = new Ponuka($_POST['meno'], $_POST['priezvisko'], $_POST['email'], $_POST['mesto'], $_POST['datum'], $_POST['poznamka']);
                $ponuka->save();
                $this->redirectToIndex();
            }
        }

    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $ponuka = Ponuka::getOne($_GET['id']);
            $ponuka->delete();
        }
        $this->redirectToIndex();
    }

    public function edit()
    {
        $val = null;
        $ponuka = Ponuka::getOne($_GET['id']);

        if (isset($_POST['meno'])) {
            if ($this->validate($_POST['meno'], $_POST['priezvisko'], $_POST['email'],$_POST['mesto'],$_POST['datum'], $_POST['poznamka']) == true){
                $ponuka->setMeno($_POST['meno']);
                $ponuka->setPriezvisko($_POST['priezvisko']);
                $ponuka->setEmail($_POST['email']);
                $ponuka->setMesto($_POST['mesto']);
                $ponuka->setDatum($_POST['datum']);
                $ponuka->setPoznamka($_POST['poznamka']);
                $ponuka->save();
                $this->redirectToIndex();

            }
        }

        return [
            'model' => $ponuka
        ];
    }

    public function validate($meno, $priezvisko, $email, $datum, $mesto,$poznamka)
    {
        if (strlen($meno) > 50){
            return false;
        }
        if (strlen($priezvisko) > 50){
            return false;
        }
        if (strlen($mesto) > 50){
            return false;
        }
        if (strlen($email) > 50){
            return false;
        }
        if ($datum == null){
            return false;
        }
        return true;

    }

    public function redirectToIndex()
    {
        header("Location: http://localhost/?c=Ponuka");
        die();
    }
}