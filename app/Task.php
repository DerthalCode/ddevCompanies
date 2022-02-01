<?php
namespace ToDo;
use PDO;
class Task{
    protected $pdo;
    private $companyName;
    private $code;
    private $pvmCode;
    private $address;
    private $phone;
    private $email;
    private $activities;
    private $manager;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function createTask($company){
        $this->companyName = $company['companyName'];
        $this->code = $company['code'];
        $this->pvmCode = $company['pvmCode'];
        $this->address = $company['address'];
        $this->phone = $company['phone'];
        $this->email = $company['email'];
        $this->activities = $company['activities'];
        $this->manager = $company['manager'];
        $this->insertTask();
    }
    private function insertTask(){
        try{
            $query = "INSERT INTO `companies` (`companyName`, `code`, `pvmCode`, `address`, `phone`, `email`, `activities`, `manager`) 
            VALUES (:companyName, :code, :pvmCode, :address, :phone, :email, :activities, :manager)";
            $stmt = $this -> pdo->prepare($query);
            $stmt->bindParam(':companyName', $this->companyName, PDO::PARAM_STR);
            $stmt->bindParam(':code', $this->code, PDO::PARAM_STR);
            $stmt->bindParam(':pvmCode', $this->pvmCode, PDO::PARAM_STR);
            $stmt->bindParam(':address', $this->address, PDO::PARAM_STR);
            $stmt->bindParam(':phone', $this->phone, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':activities', $this->activities, PDO::PARAM_STR);
            $stmt->bindParam(':manager', $this->manager, PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/');
        }catch(\PDOExpection $e){
            echo $e->getMessage();
        }
    }
    public function allTasks(){
        $statement = $this->pdo->prepare('SELECT * FROM `companies`');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC); //grazinam kaip asociatyvu masyva
    }
    public function deleteTask($id){
        $statement = $this->pdo->prepare("DELETE FROM `companies` WHERE id=$id");
        $statement->execute();
        header('Location:/');
        return $statement;
    }
    public function companiesSearch($search) {
        $statement = $this->pdo->prepare("SELECT * FROM `companies` WHERE companyName LIKE '%$search%'");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}