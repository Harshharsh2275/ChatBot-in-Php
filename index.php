<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <?php
    require_once("db.php");
    ?>
    <link rel="stylesheet" href="style.css">
    <script src="jquery/jquery.js"></script>
    <link rel="stylesheet" href="mobile-style.css">
    <script>
            
            function RequestData() {  
                var req = new XMLHttpRequest();
                req.onreadystatechange = function(){
                    if (req.readyState == 4 && req.status == 200) {
                        var data = req.responseText;
                        document.getElementById("cont").innerHTML = data;
                    }
                }
                req.open('POST','parser_read.php',true);
                req.send();
            }
            setInterval(function(){RequestData()}, 1000);
            </script>
<title>
chatbot
</title>
</head>
<body onload="RequestData();">
    <div class="cont" >
    <div id="cont"></div>
        <div class="msg_cont">
        <textarea type="text" class="send_msg"></textarea>
        <input type="submit" class="submit" value="send">
        </div>
            <script>


            $(document).ready(function() {
                $('.submit').on('click',function (){
                    var msg = $('.send_msg').val();
                    if (msg == '') {
                        alert('Please write something');
                        exit;
                    }
                    $.ajax({
                        url:'parser.php',
                        type:'post',
                        data:{
                            user_id:'4466',
                            user_msg: msg
                        },
                        success:function (data){
                            $('.cont').append(data);
                            $('.send_msg').val("");
                        }
                    });
                });
            });
            
            
            </script>
    </div>
</body>
</html>



