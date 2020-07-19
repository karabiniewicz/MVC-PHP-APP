<?php
require_once '../DB.php';

class Login
{
    public $login;
    public $haslo;

    public function __construct($login, $haslo)
    {
        $this->login = $login;
        $this->haslo = $haslo;
    }
    public function check_log()
    {
        $query = array('login' => $this->login);
        $uzytkownik = DB::get()->uzytkownicy->findOne($query);
        
        if ($uzytkownik) return true;
        else return false;
    }

    public function check_pass()
    {
        $hash = password_hash($this->haslo, PASSWORD_DEFAULT);
        $query = array('login' => $this->login);
        $uzytkownik = DB::get()->uzytkownicy->findOne($query);

        if (password_verify($this->haslo, $uzytkownik['haslo'])) {
            session_regenerate_id();
            $_SESSION['_id'] = $uzytkownik['_id'];
            $_SESSION['login'] = $uzytkownik['login'];
            return true;
        } else return false;
    }
}
