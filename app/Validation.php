<?php
namespace ToDo;

class Validation{
    private static $validationErrors = [];

    public static function validateTask($company) {
        if(strlen(trim($company["companyName"])) < 3 || strlen(trim($company["companyName"])) > 255) {
            self::$validationErrors[] = "Blogai ivestas arba neivestas kompanijos pavadinimas";
        }
        if(!preg_match('/[0-9]{3,11}/', $company["code"])) {
            self::$validationErrors[] = "Blogai ivestas arba neivestas imones kodas";
        }
        if(!preg_match('/^[A-Za-z0-9]{3,15}$/',$company['pvmCode'])){
            self::$validationErrors[]="Blogai ivestas arba neivestas pvm kodas";
        }
        if(!preg_match('/^[a-zA-Z\s]+$/', $company['address'])){
            self::$validationErrors[]="Blogai ivestas arba neivestas adresas";
        }
        if(!preg_match('/\+?[0-9-()]{9,14}/', $company["phone"])) {
            self::$validationErrors[] = "Blogai ivestas arba neivestas telefono numeris";
        }
        if(!filter_var($company["email"], FILTER_VALIDATE_EMAIL)) {
            self::$validationErrors[] = "Blogai ivestas arba neivestas el. pastas";
        }
        if (strlen($company["activities"]) < 3 || (strlen($company['activities'])) > 255) {
            self::$validationErrors[] = "Blogai ivestos veiklos";
        }
        if(!preg_match("/^[- '\p{L}]{4,255}$/u", $company['manager'])) {
            self::$validationErrors[] = "Blogai ivestas vadovas";
        }

        return self::$validationErrors;
    }
}