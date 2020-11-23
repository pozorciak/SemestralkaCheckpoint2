<?php

namespace App\Models;

use App\Core\Model;

class Ponuka extends Model
{
    protected $id;
    protected $meno;
    protected $priezvisko;
    protected $email;
    protected $datum;
    protected $mesto;
    protected $poznamka;

    /**
     * Ponuka constructor.
     * @param $meno
     * @param $priezvisko
     * @param $email
     * @param $mesto
     * @param $datum
     * @param $poznamka
     */
    public function __construct($meno = "", $priezvisko ="", $email= "", $mesto="",$datum= null,$poznamka = "")
    {
        $this->meno = $meno;
        $this->priezvisko = $priezvisko;
        $this->email =$email;
        $this->mesto = $mesto;
        $this->datum = $datum;
        $this->poznamka = $poznamka;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMeno()
    {
        return $this->meno;
    }

    /**
     * @param mixed $meno
     */
    public function setMeno($meno): void
    {
        $this->meno = $meno;
    }

    /**
     * @return mixed
     */
    public function getPriezvisko()
    {
        return $this->priezvisko;
    }

    /**
     * @param mixed $priezvisko
     */
    public function setPriezvisko($priezvisko): void
    {
        $this->priezvisko = $priezvisko;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * @param mixed $datum
     */
    public function setDatum($datum): void
    {
        $this->datum = $datum;
    }


    /**
     * @return mixed
     */
    public function getPoznamka()
    {
        return $this->poznamka;
    }

    /**
     * @param mixed $poznamka
     */
    public function setPoznamka($poznamka): void
    {
        $this->poznamka = $poznamka;
    }

    /**
     * @return mixed|string
     */
    public function getMesto()
    {
        return $this->mesto;
    }

    /**
     * @param mixed|string $mesto
     */
    public function setMesto($mesto): void
    {
        $this->mesto = $mesto;
    }




    static public function setDbColumns()
    {
       return ['id','meno','priezvisko','email','mesto','datum','poznamka'];
    }

    static public function setTableName()
    {
        return "ponuky";
    }


}