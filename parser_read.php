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


    if (isset($_POST)) {
        //connection to the database
    require_once("db.php");
    //memory used in the process
    $start_memory = memory_get_usage();
    $start = microtime(true);
            $query = "SELECT * FROM nikunj ORDER BY id DESC";
            $result = $connect->query($query,MYSQLI_USE_RESULT);
            while ($row = $result->fetch_assoc()) {
               $time = date('H:i',strtotime($row["time"]));
               if($row["user_id"] == 4400):
                ?>
                <div class="msg" style="background-color: #ececec;left:50%;">
            <p class="time">
            <?php echo $time;?>
            </p>
            <p class="msg_string">
            <?php echo $row["msg"];?>
            </p>
        </div>
        <?php
        else:
                ?>
        <div class="msg">
            <p class="time">
            <?php echo $time;?>
            </p>
            <p class="msg_string">
            <?php echo $row["msg"];?>
            </p>
        </div>
        <?php
        endif;
            }
            $connect->close();
            $end_memory = memory_get_usage();
            $end = microtime(true);
            //for developers purposes 
            //and can be disabled using # or //
            echo $end-$start."\n";
            echo $end_memory-$start_memory;
        }
        ?>