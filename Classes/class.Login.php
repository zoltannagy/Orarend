<?php
/**
 * Login osztály
 * 
 * @propery Object $Database -> A már példányosított mysqli objektum
 * @property String $UserName -> A megadott felhasználónév
 * @property String $Password -> A megadott jelszó
 * @property Boolean $Error -> A futás során fellépő hibák állapotát tárolja
 * @property String $href -> TableModel-ből veszi, hogy hova kell átirányítani a felhasználót
 * 
 * @author Petró Balázs Máté <petrobalazsmate@gmail.com>
 */
class Login extends Session{
    
    private $Database;
    private $UserName;
    private $Password;
    private $Error;
    private $href;
    
    public function __construct($database, $username, $password){
        $this->Database = $database;
        $this->setUserName($username);
        $this->setPassword($password);
    }
    
    /**
     * Lekéri adatbázisból a jelszót, majd visszatér vele. (Ha megfelelő a felhasználónév!)
     * @return string - Jelszó
     */
    private function getPasswordByUserName(){
        $password = '';
        $tableModels = $this->getTableModels();
        foreach($tableModels as $key => $value){
            $result = $this->query($value);
            if($result !== false){
                $password = $result;
                break;
            }
        }
        return $password;
    }
    
    /**
     * Lekérdezést hajt végre a paraméterben megadott táblából.
     * @propery array $from - A tábla adatai.
     * @return mixed
     */
    private function query($from){
        $ret = false;
        $password = '';
        $database = $this->getDatabase();
        $query = $database->query(
                "SELECT ".$from['passwordField']." 
                FROM ".$from['tableName']." 
                WHERE ".$from['usernameField']." 
                LIKE '".$database->real_escape_string($this->getUserName())."' LIMIT 1");
        if($query->num_rows == 1){
            while($data = $query->fetch_object()){
                $password = $data->$from['passwordField'];
            }
            $this->href = $from['href'];
            $ret = $password;
        }
        return $ret;
    }
    
    /**
     * Megvizsgája, hogy a megadott jelszó megegyezik-e az adatbázisban lévővel.
     * @return boolean
     */
    private function validatePassword(){
        if($this->Password === $this->getPasswordByUserName()){
            return true;
        }
        else{
            return false;
        }
    }
    
    /**
     * Bejelentkezésért felelős metódus.
     */
    public function Login(){
        if($this->validateForm() && $this->validatePassword()){
            $nameSession = new Session('Username', $this->getUserName());
            $passSession = new Session('Password', $this->getPassword());
            $nameSession->create();
            $passSession->create();
            header("Location: ".$this->href.".php");
            exit;
        }
        else{
            $this->Error = true;
            return false;
        }
    }
    
    /**
     * Azt vizsgálja, hogy az Error attribútum true értéket kapott-e.
     * @return boolean
     */
    public function hasError(){
        if($this->Error === true){
            return true;
        }
        else{
            return false;
        }
    }
    
    /**
     * Validálja a formot.
     * @return boolean
     */
    private function validateForm(){
        if(strlen($this->getUserName()) > 4 && strlen($this->getPassword()) > 4){
            return true;
        }
        else{
            return false;
        }
    }
    
    /**
     * Tömbök modeljeivel (adatokkal) tér vissza tömb formájában.
     * MEGJEGYZÉS: Ha bármi módosítás történik az adatbázison, akkor azokat itt is át kell írni, különben nem fog működni a bejelentkezés!
     * Szebb megoldás lett volna XML-ben tárolni az adatokat, de végül is teljesen mindegy, az eredmény ugyanaz lesz!
     * @return array - Tömb modelek
     */
    private function getTableModels(){
        return array(
            'admin' => array(
                'tableName' => 'admin',
                'usernameField' => 'felhasznalonev',
                'passwordField' => 'jelszo',
                'href' => 'admin',
            ),
            'tanar' => array(
                'tableName' => 'tanar',
                'usernameField' => 'felhasznalonev',
                'passwordField' => 'jelszo',
                'href' => 'tanari',
            ),
        );
    }
    
    public function getUserName() {
        return $this->UserName;
    }

    public function getDatabase(){
        return $this->Database;
    }
    
    public function getPassword() {
        return $this->Password;
    }

    public function setUserName($UserName) {
        $this->UserName = $UserName;
    }

    public function setPassword($Password) {
        $this->Password = md5($Password);
    }
    
    public function __toString() {
        $str = 'A felhasználónév vagy a jelszó nem egyezik!';
        return $str;
    }
}