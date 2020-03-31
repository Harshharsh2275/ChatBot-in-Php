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


class GreetingsBot
{
    public static $Greets;
    public static $mess;
    public $statusMsg = true;
    use InsertDb;
    public function __construct($con,$msg)
    {
        include("db.php");
        self::$mess = $msg;
        self::$Greets = array("GoodMorning","Hi","Hello","HowAreYou","GoodEvening","GoodNight","GoodAfternoon","Sir");
        $this->connect_Insert = &$connect;
    }  
    public function GreetHi()
    {
        $pattern = "/hi/i";
        $reply = "Hi I am Here To help you";
        if (preg_match($pattern,self::$mess,$matchesArray)) {
            $statement = "INSERT INTO `nikunj`( `user_id`, `msg`, `status`) VALUES ('4400','$reply','offline')";
        $this->InsertQuery($statement,true);
        $this->statusMsg = false;
        }
    }

    public function GreetHello()
    {
        $pattern = "/hello/i";
        $reply = "Hi I am Here To help you";
        if (preg_match($pattern,self::$mess,$matchesArray)) {
            $statement = "INSERT INTO `nikunj`( `user_id`, `msg`, `status`) VALUES ('4400','$reply','offline')";
        $this->InsertQuery($statement,true);
        $this->statusMsg = false;
        }
    }

    public function GreetHowAreYou()
    {
        $pattern = "/How Are You?/i";
        $reply = "Sir ! I am fine . What about you?";
        if (preg_match($pattern,self::$mess,$matchesArray)) {
            $statement = "INSERT INTO `nikunj`( `user_id`, `msg`, `status`) VALUES ('4400','$reply','offline')";
        $this->InsertQuery($statement,true);
        $this->statusMsg = false;
    }
    }

    public function GreetGoodMorning()
    {
        $pattern = "/Good Morning/i";
        $reply = "Yes,Sir ! And it must be good for you Also";
        if (preg_match($pattern,self::$mess,$matchesArray)) {
            $statement = "INSERT INTO `nikunj`( `user_id`, `msg`, `status`) VALUES ('4400','$reply','offline')";
        $this->InsertQuery($statement,true);
        $this->statusMsg = false;
        }
    }

    public function GreetGoodNight()
    {
        $pattern = "/Good Night/i";
        $reply = "Yes,Sir ! And it must be good for you Also";
        if (preg_match($pattern,self::$mess,$matchesArray)) {
            $statement = "INSERT INTO `nikunj`( `user_id`, `msg`, `status`) VALUES ('4400','$reply','offline')";
        $this->InsertQuery($statement,true);
        $this->statusMsg = false;
        }
    }

    public function GreetGoodAfternoon()
    {
        $pattern = "/Good Afternoon/i";
        $reply = "Yes,Sir ! And it must be good for you Also";
        if (preg_match($pattern,self::$mess,$matchesArray)) {
            $statement = "INSERT INTO `nikunj`( `user_id`, `msg`, `status`) VALUES ('4400','$reply','offline')";
        $this->InsertQuery($statement,true);
        $this->statusMsg = false;
        }
    }

    public function GreetGoodEvening()
    {
        $pattern = "/Good Evening/i";
        $reply = "Indeed sir! its very sweet";
        if (preg_match($pattern,self::$mess,$matchesArray)) {
            $statement = "INSERT INTO `nikunj`( `user_id`, `msg`, `status`) VALUES ('4400','$reply','offline')";
        $this->InsertQuery($statement,true);
        $this->statusMsg = false;
        }
    }

    public function GreetSir()
    {
        $pattern = "/Sir/i";
        $reply = "Please dont call me that. I am here to serve you";
        if (preg_match($pattern,self::$mess,$matchesArray)) {
            $statement = "INSERT INTO `nikunj`( `user_id`, `msg`, `status`) VALUES ('4400','$reply','offline')";
        $this->InsertQuery($statement,true);
        }
    }
}


?>