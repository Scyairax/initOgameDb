<body>
    <div id="container">
        <form method="post" action="dao/createDb.php">
            <div  class="box" id="player">
                <input type='button' accept='text/plain' value="crea query" onclick='generateQueryPlayer()'><br>
                <input class="box" type="text" id='queryPlayer' name="queryPlayer"><br>
                <button type="submit"> creaDB</button>
            </div>
        </form>
    </div>
    <?php require_once('script/script.php');?>
</body>