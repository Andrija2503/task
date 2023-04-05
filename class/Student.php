<?php

require_once 'User.php';
require_once 'interfaces/userinterface.php';
require_once 'trait/connect.php';

class Student extends User implements iUser {
    public $tip = "Student";
    use connectdb;
    
    public function __construct($ime, $prezime, $jmbg, $email)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->jmbg = $jmbg;
        $this->email = $email;
        $this->tip;
        
        $sql = "INSERT into users (id, ime, prezime, jmbg, email, tip) values (null, '$this->ime', '$this->prezime', '$this->jmbg', '$this->email', '$this->tip')";
        $query = $this->db()->prepare($sql);
        $query->execute();

    }
    
    public function info(){
        $sql="SELECT * from users where tip = 'Student'";
        $query = $this->db()->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($results as $v){
            echo "<b>Student </b> " . $v['ime']. " " . $v['prezime'] . ". <b>JMBG broj:</b> " . $v['jmbg'] . " <b>E-Mail adresa: </b>" . $v['email'] . "<br>";
        }
    }
}

?>