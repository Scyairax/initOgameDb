<body class="text-center"  background="img/sfondo.jpg">
    <div id="container" class="container">
        <div class="row logo">
            <div class="col-12" style="padding-top:20px;"><?xml version="1.0" encoding="utf-8"?>
                <img src="./img/OGame_logo.png"></img>
            </div>
        </div>
        <form method="post" class="form-signin" action="dao/createDb.php">
            <div class="row" id="box">
                <div class="col-12">
                    <div class="row">
                        <input type="button" onClick="selectAll()" value="Select all"/><br/>
                        <input type='button' accept='text/plain' value="crea query" onclick='generateQueryPlayer()'><br>
                    </div>    
                    <br>
                    <div class="row">
                        <div class="col-1"><input type="checkbox" name="foo" value="creazioneDb"></div>
                        <div class="col-2"><label>creazioneDb  </label></div>
                        <div class="col-3"><input type="text" id="creazioneDb" name="creazioneDb"></div>
                        <div class="col-1"><button type="submit"> creaDB</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1"><input type="checkbox" name="foo" value='alliance'></div>
                        <div class="col-2"><label>alliance  </label></div>
                        <div class="col-3"><input class="box" type="text" id='alliance' name="alliance"><br></div>
                        <div class="col-1"><button type="submit"> creaDB</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1"><input type="checkbox" name="foo" value='player'></div>
                        <div class="col-2"><label>player   </label></div>
                        <div class="col-3"><input class="box" type="text" id='player' name="player"><br></div>
                        <div class="col-1"><button type="submit"> creaDB</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1"><input type="checkbox" name="foo" value='planet'></div>
                        <div class="col-2"><label>planet   </label></div>
                        <div class="col-3"><input class="box" type="text" id='planet' name="planet"><br></div>
                        <div class="col-1"><button type="submit"> creaDB</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1"><input type="checkbox" name="foo" value='score'></div>
                        <div class="col-2"><label>planet   </label></div>
                        <div class="col-3"><input class="box" type="text" id='score' name="score"><br></div>
                        <div class="col-1"><button type="submit"> creaDB</button></div>
                    </div>
                    <br>
                    <div class="row">
                        <button type="submit"> creaDB</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="script/parser.js"  crossorigin="anonymous"></script>
    <script src="script/selectAll.js"  crossorigin="anonymous"></script>
</body>