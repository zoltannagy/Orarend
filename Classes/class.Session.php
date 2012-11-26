<?php
/**
 * Session osztály
 * 
 * Mindkét attribútum értékét kötelező kitölteni!
 *
 * @property string - Session indexe
 * @property mixed - Session értéke
 * 
 * @example
 * Példa a használatra:
 * 
 * Create:
 * $usenameSession = new Session('username', 'Géza');
 * $usernameSession->create();
 * 
 * Delete:
 * $usernameSession = new Session('username', '');
 * $usernameSession->delete();
 * 
 * Write:
 * $usernameSession = new Session('username', 'ÚjÉrték');
 * $usernameSession->write();
 */
class Session{
    
    private $Index;
    private $Value;
    
    public function Session($index, $value){
        $this->setIndex($index);
        $this->setValue($value);
    }
    
    /**
     * Session létrehozása.
     */
    public function create(){
        $_SESSION[$this->getIndex()] = $this->getValue();
    }
    
    /**
     * Session törlése.
     */
    public function delete(){
        unset($_SESSION[$this->getIndex()]);
    }
    
    /**
     * Session értékének felülírása.
     */
    public function write(){
        if($this->sessionExists()){
            $this->create();
        }
    }
    
    /**
     * Azt vizsgálja, hogy létezik-e a session
     * @return boolean
     */
    private function sessionExists(){
        return (boolean)isset($_SESSION[$this->getIndex()]);
    }
    
    // Getter
    public function getIndex() {
        return $this->Index;
    }

    public function getValue() {
        return $this->Value;
    }

    // Setter
    public function setIndex($Index) {
        $this->Index = $Index;
    }
    
    public function setValue($Value) {
        $this->Value = $Value;
    }
    
}