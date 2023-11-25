function    writeCreationDbQuery(XMLHttpRequest){
    var query=' DROP DATABASE ogame;'
            +'CREATE DATABASE ogame;'
            +'USE	ogame;'
            +'CREATE TABLE user ('
            +'user varchar(255),'
            +'pwd varchar(255),'
            +'PRIMARY KEY (user)'
            +');'
            +' CREATE TABLE alliance ('
            +'ID varchar(255),'
            +'Name varchar(255),'
            +'Logo varchar(255),'
            +'Home varchar(255),'
            +'open varchar(255),'
            +'PRIMARY KEY (ID) );'
            +' CREATE TABLE player ('
            +'ID varchar(255),'
            +'Name varchar(255),'
            +'Score varchar(255),'
            +'Status varchar(255),'
            +'AllianceID varchar(255),'
            +'PRIMARY KEY (ID),'
            +'FOREIGN KEY (AllianceID) REFERENCES alliance(ID));'
            +'CREATE TABLE planet ('
            +'ID varchar(255),'
            +'PlayerID varchar(255),'
            +'Name varchar(255),'
            +'Cords varchar(255),'
            +'PRIMARY KEY (ID),'
            +'FOREIGN KEY (PlayerID) REFERENCES player(ID));'
            +' CREATE TABLE moon ('
            +'ID varchar(255),'
            +'Name varchar(255),'
            +'size varchar(255),'
            +'PlanetID varchar(255),'
            +'PRIMARY KEY (ID),'
            +' FOREIGN KEY (PlanetID) REFERENCES planet(ID) );'
            +'CREATE TABLE server ('
            +'Name varchar(255),'
            +'time_zone varchar(255),'
            +'version varchar(255),'
            +'spped varchar(255),'
            +'speedFleetPeaceful varchar(255),'
            +'speedFleetWar varchar(255),'
            +'speedFleetHolding varchar(255),'
            +'galaxies varchar(255),'
            +'systems varchar(255),'
            +'PRIMARY KEY (Name)'
            +');'
            +'    SET FOREIGN_KEY_CHECKS = 0;';

        document.getElementById('creazioneDb').value=query
}
function    writeAllianceQuery(XMLHttpRequest){
  //creazione oggetto xml
  xmlhttp.open("GET", "https://s192-it.ogame.gameforge.com/api/alliances.xml", false); 
  xmlhttp.send(null);
      if (xmlhttp.status==200) {
                  xmlDoc = xmlhttp.responseXML; 
      }
      else if (xmlhttp.status==404) {
      alert("XML could not be found");
      }
  // Start to fetch the data by using TagName 
  var x = xmlDoc.getElementsByTagName("alliance"); 
  var query="";
  for (i = 0; i < x.length; i++) { 
      query+="INSERT INTO alliance VALUES (\'"+x[i].getAttribute('id')+"\',\'"
              +x[i].getAttribute('name')+"\',\'"
              +x[i].getAttribute('logo')+"\',\'"
              +x[i].getAttribute('home')+"\',\'"
              +x[i].getAttribute('open')+"\');";
  } 
  document.getElementById('alliance').value=query

}
function    writePlayerQuery(XMLHttpRequest){
//creazione oggetto xml
    xmlhttp.open("GET", "https://s192-it.ogame.gameforge.com/api/players.xml", false); 
    xmlhttp.send(null);
    if (xmlhttp.status==200) {
                xmlDoc = xmlhttp.responseXML; 
    }
            else if (xmlhttp.status==404) {
    alert("XML could not be found");
    }
    // Start to fetch the data by using TagName 
    var x = xmlDoc.getElementsByTagName("player"); 
    query="";
    for (i = 0; i < x.length; i++) { 
        query+="INSERT INTO player VALUES (\'"+x[i].getAttribute('id')+"\',\'"
                +x[i].getAttribute('name')+"\',\'"
                +"toUpdate"+"\',\'"
                +x[i].getAttribute('status')+"\',\'"
                +x[i].getAttribute('alliance')+"\');";
    } 
    document.getElementById('player').value=query      

}
function    writePlanetQuery(XMLHttpRequest){
    

    //creazione oggetto xml
    xmlhttp.open("GET", "https://s192-it.ogame.gameforge.com/api/universe.xml", false); 
    xmlhttp.send(null);
        if (xmlhttp.status==200) {
                    xmlDoc = xmlhttp.responseXML; 
        }
        else if (xmlhttp.status==404) {
        alert("XML could not be found");
        }
    // Start to fetch the data by using TagName 
    var x = xmlDoc.getElementsByTagName("planet"); 
    query="";
    for (i = 0; i < x.length; i++) { 
        query+="INSERT INTO planet VALUES (\'"+x[i].getAttribute('id')+"\',\'"
                +x[i].getAttribute('player')+"\',\'"
                +x[i].getAttribute('name')+"\',\'"
                +x[i].getAttribute('coords')+"\');";

           var moon= x[i].getElementsByTagName("moon");

            if(moon.length>0){
                query+="INSERT INTO moon VALUES (\'"+moon.item(0).getAttribute('id')+"\',\'"
                +moon.item(0).getAttribute('name')+"\',\'"
                +moon.item(0).getAttribute('size')+"\',\'"
                +x[i].getAttribute('id')+"\');";
            }
    } 
    document.getElementById('planet').value=query      
}
function    writeScoreQuery(XMLHttpRequest){

     //creazione oggetto xml
     xmlhttp.open("GET", "https://s192-it.ogame.gameforge.com/api/highscore.xml?category=1&type=1", false); 
     xmlhttp.send(null);
         if (xmlhttp.status==200) {
                     xmlDoc = xmlhttp.responseXML; 
         }
         else if (xmlhttp.status==404) {
         alert("XML could not be found");
         }
     // Start to fetch the data by using TagName 
     var x = xmlDoc.getElementsByTagName("player"); 
     query="";
 
     for (i = 0; i < x.length; i++) { 
         query+="UPDATE player SET score = "+"\'"+x[i].getAttribute('score')+"\'"
                 +"  WHERE ID = "+"\'"+x[i].getAttribute('id')+"\';";
     } 
 
 
     query+="SET FOREIGN_KEY_CHECKS = 1;"
 
     document.getElementById('score').value=query
}
function generateQuery() {
    checkboxes = document.getElementsByName('foo');
    xmlhttp = new XMLHttpRequest()    

    for(i=0;i<checkboxes.length;i++){
        if(checkboxes[i].value=="creazioneDb" && checkboxes[i].checked){
            writeCreationDbQuery(xmlhttp);
            break;
        }
    }

    for(i=0;i<checkboxes.length;i++){
        if(checkboxes[i].value=="alliance" && checkboxes[i].checked){
            writeAllianceQuery(xmlhttp);
            break;
        }
    }
  
    for(i=0;i<checkboxes.length;i++){
        if(checkboxes[i].value=="player" && checkboxes[i].checked){
            writePlayerQuery(xmlhttp);
            break;
        }
    }
  
    for(i=0;i<checkboxes.length;i++){
        if(checkboxes[i].value=="planet" && checkboxes[i].checked){
            writePlanetQuery(xmlhttp);
            break;
        }
    }

    for(i=0;i<checkboxes.length;i++){
        if(checkboxes[i].value=="score" && checkboxes[i].checked){
            writeScoreQuery(xmlhttp);
            break;
        }
    }


};