<?php
session_name("parser");
session_start();
?>
<html>
    <head> 
        <title>Parser</title> 
            <?php require_once('style/style.php');?>
            <?php require_once('script/script.php');?>
    </head> 
    <body>
        <div id="container">
            <form method="post" action="dao/createDb.php">
            
            <div  class="box" id="player">
                <input type='button' accept='text/plain' value="crea query"   onclick='generateQueryPlayer()'><br>
                <input class="box" type="text" id='queryPlayer' name="queryPlayer"><br>
                <button type="submit"> creaDB</button>
            </div>
            </form>
        </div>
    </body>
</html>