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


 //File containing the information of database connection
include("db.php");
/**
 * @param string $name_class
 * takes the name of the class
 */
//Function take class names and include the files accordingly

function __autoload($name_class)
{
    $class = "$name_class".".php";
    include_once($class);
}
/**
 * 
 * class InsertDb
 * Inserts the message into The Database
 */
trait InsertDb
{
    /**
     * @param string $sts
     * informs about the status of the process
     * 
     * @param resource $connect_Insert
     * contains the connection handler to database present in db.php
     */
    public $sts;
    public $connect_Insert;
    // function to Insert message in database
    /**
     * 
     * @param string $query
     * Accepts a valid mysql query
     * 
     * @param bool $buffered
     * Accepts bool to perform a buffered query
     * 
     */
    protected function InsertQuery($query,$buffered){
        
            $prep =  $this->connect_Insert->prepare($query);
            if ($prep) {
                if ($buffered === false) {
                    $this->connect_Insert->use_result();
                }
                if($prep->execute()):
                    echo "<audio autoplay='true' loop='false' hidden='true' src=''> </audio>";
                    $this->sts = true;
                else:
                    echo "Some problem occured while sending the message".$this->connect_Insert->error;
                endif;
            }
            else{
                echo "Some problem occured while sending the message".$this->connect_Insert->error;
                $this->sts = $this->connect_Insert->error;
    }
    //$this->connect_Insert->close();
}
}

/**
 * 
 * class Instance
 * Used to create a single Instance for insert process
 */

class Instance 
{
    /**
     * @param mixed static $Instance
     * it is object for Chatbot()
     */
    public static $Instance = null;
    /**
     * 
     * @param mixed $conHandler
     * Accepts a connection handler to database
     * 
     */
    public function __construct($conHandler)
    {
        if(self::$Instance == null):
            self::$Instance = new ChatBot($conHandler);
        endif;
        return self::$Instance;   
    }
}


class ChatBot
{
    /**
 * @param protected $statusMsgRun
 * 
 * @param string $message
 * it keeps the user provided sanatized massage
 * 
 * @param int $user_id
 * it keeps the id for user for logging purposes
 */

    protected $statusMsgRun;
    public  $message;
    public  $user_id;
    //includes InsertDb trait
    use InsertDb;
    public function __construct($conHandler){
        //Assigns a connectio handler to member variable $connect_Insert
        $this->connect_Insert = $conHandler;
    }
    public function MsgRun()
    {
        $stmt = "INSERT INTO `nikunj`( `user_id`, `msg`, `status`) VALUES ('$this->user_id','$this->message','offline')";
        $start = memory_get_usage();
        $this->InsertQuery($stmt,true);
        $end = memory_get_usage();
        $this->statusMsgRun = true;
    } 
     

    public function CheckMsg()
    {
        if ($this->statusMsgRun) {
            include_once("db.php");
            //halts the execution for 2 sec
            sleep(2);
            //includes the trained php file
            $Bot = new GreetingsBot($this->connect_Insert,$this->message);
            foreach ($Bot::$Greets as $key => $value) {
                $method = "Greet".$value;
                $Bot->$method();
            }
            //json interface
            //include all the file names here
            $json_files = array("Personal");
            //iterate through array
            foreach($json_files as $Index=>$value_json){
                $perBot = new JsonBotInterFace($value_json,$this->message,$this->connect_Insert);
            }
            if($Bot->statusMsg == true):
                if ( $perBot::$instanceNew->statusFile == true) {
                    $statement_last = "INSERT INTO `nikunj`( `user_id`, `msg`, `status`) VALUES ('4400','I don\'t understand that\!please allow me to Analyse the word','offline')";
                    $this->InsertQuery($statement_last,true);
            }
        endif;
        }
        else {
            $this->MsgRun();
        }
    }

}
//id and message provided by user
//id
$usr = $_POST['user_id'];
//message
$msg = mysqli_real_escape_string($connect,$_POST['user_msg']);
//connection to Instance()
//use singleton design pattern through factory
$usr_msg = new Instance($connect);
$usr_msg::$Instance->connect_Insert = &$connect;
$usr_msg::$Instance->message = $msg;
$usr_msg::$Instance->user_id = $usr;
$usr_msg::$Instance->MsgRun();
$usr_msg::$Instance->CheckMsg();
?>