<?php
require_once '../DB.php';

class Registered
{
    public $email;
    public $login;
    private $haslo;
    private $powtorz_haslo;
    public $hash;
    private $_id;

    public function __construct($email, $login, $haslo, $powtorz_haslo)
    {
        $this->email = $email;
        $this->login = $login;
        $this->haslo = $haslo;
        $this->powtorz_haslo = $powtorz_haslo;
    }

    public function check_password(&$wszystko_OK, &$errors)
    {
        if ($this->haslo !== $this->powtorz_haslo) {
            $wszystko_OK = false;
            $errors[0] = "Podane hasła nie są identyczne!";
        }

        if ((strlen($this->haslo) < 5) || (strlen($this->haslo) > 20)) {
            $wszystko_OK = false;
            $errors[1] = "Hasło musi posiadać od 5 do 20 znaków!";
        }
    }

    public function check_login(&$wszystko_OK, &$errors)
    {
        if ((strlen($this->login) < 3) || (strlen($this->login) > 20)) {
            $wszystko_OK = false;
            $errors[2] = "Login musi posiadać od 3 do 20 znaków!";
        }

        $query_login = [
            'login' => $this->login,
        ];

        $uzytkownik_login = DB::get()->uzytkownicy->findOne($query_login);

        if (count($uzytkownik_login)) {
            print_r($uzytkownik_login);
            $wszystko_OK = false;
            $errors[3] = "Użytkownik o podanym loginie już istnieje";
        }
    }

    public function check_email(&$wszystko_OK, &$errors)
    {
        $query_email = [
            'email' => $this->email,
        ];

        $uzytkownik_email = DB::get()->uzytkownicy->findOne($query_email);
        if (count($uzytkownik_email)) {
            $wszystko_OK = false;
            $errors[4] = "Użytkownik o podanym e-mailu już istnieje";
        }
    }

    public function dodawanie(&$com)
    {
        $hash = password_hash($this->haslo, PASSWORD_DEFAULT);

        $uzytkownik = [
            'email' => $this->email,
            'login' => $this->login,
            'haslo' => $hash
        ];
        $uzytkownik = DB::get()->uzytkownicy->insertOne($uzytkownik);
        $com = "Użytkownik został zarejestrowany";
    }    
}
