<?php

/**
 * 
 * @author HarshPathak
 * 
 * @version 0.1.01
 * 
 * @license GNU GPL v3
 * 
 * This is chat bot which can be trained easily and use to interact with customers
 * This Bot(vishal) is developed by HarshPathak("owner") H.A.V.E.R.S Pvt. ltd.
 */


 include_once("db.php");
class ExecuteBot 
{
    use InsertDb;
    protected static $mess;
    public static $json;
    public $file;
    public $read;
    public $FileName;
    public $statusFile;
    public $matchedObj;
    public function __construct($msg)
    {
        self::$mess = $msg;
    }
    public function __call($name, $arguments)
    {
        $this->FileName = $name.".json";
    } 
    public function Read()
    {
        $open = "json/".$this->FileName;
        $this->file = fopen($open,'r+');
        if ($this->file) {
            $file = $this->FileName;
            $size = filesize("json/".$file);
            if ($size > 0) {
            $this->read = fread($this->file,$size);
            }else {
                die("Unable to connect to the host".$this->file);
            }
            if ($this->read) {
                self::$json = json_decode($this->read,true);
            }
        }
    }
    public function ExecBot(){
       foreach (self::$json as $key => $value) {
           $pattern = $value['pattern'];
           $reply = $value['reply'];
        if (preg_match($pattern,self::$mess,$matchesArray)) {
            $statement = "INSERT INTO `nikunj`( `user_id`, `msg`, `status`) VALUES ('4400','$reply','offline')";
            $this->matchedObj[] = $key;
       if ($this->InsertQuery($statement,true)  !== false){
        //for logging purposes;
        $this->statusFile = false;
    }
       else {
           die("some problem occur");
       }
    }else {
        $this->statusFile = true;
    }
}
}
}



class JsonBotInterFace 
{
    public static $instanceNew = null;
    public function __construct($method,$msg,$connHandler)
    {
        if (self::$instanceNew == null) {
            self::$instanceNew = new ExecuteBot($msg);
            include_once("db.php");
            self::$instanceNew->connect_Insert = $connHandler;
            self::$instanceNew->$method();
            self::$instanceNew->Read();
            self::$instanceNew->ExecBot();
        }
    }
    
}


?>