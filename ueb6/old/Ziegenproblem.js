var gameStatus=1;
var wins;
var losses;

var doorStatus =[true,true,true];
var gewonnen =0;
var verloren =0;

function set_up(){
	
        document.getElementById('playerChoice').innerHTML = "";
	document.getElementById('playerChoice').innerHTML = "Choose a door<br>";
        doorStatus =[true,true,true];
        gameStatus=1;
        
	for(var i=0;i<3;i++){
		document.getElementsByTagName('img')[i].src="/pic/door.jpg";
	}	
        
        var xhttp;
        if (window.XMLHttpRequest) {
            xhttp = new XMLHttpRequest();
         } 
	else {
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}  
}



function chooseDoor(door_id){
    
	var xhttp;
        var firstGoatDoor;
        var result;

	if (window.XMLHttpRequest) {
            xhttp = new XMLHttpRequest();
         } 
	else {
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}  
        if(gameStatus==1){
            if(doorStatus[Number(door_id)]){
                     firstGoatDoor = firstRequest(xhttp,door_id);
                }
                else{
                    document.getElementById('playerChoice').innerHTML = "";
                    document.getElementById("playerChoice").innerHTML = "Please choose a closed door";
                }
            }
        else if(gameStatus==2){
                if(doorStatus[Number(door_id)]){
                    result = secondRequest(xhttp,door_id,firstGoatDoor);
                    //write_statistic(xhttp,result);
                }
                else{
                    document.getElementById('playerChoice').innerHTML = "";
                    document.getElementById("playerChoice").innerHTML = "Please choose a closed door";
                }
           }
        else{
            document.getElementById('playerChoice').innerHTML = "";
            document.getElementById("playerChoice").innerHTML = "Please start a new game or end it to see you statistics";
        }
        
    }
      


function firstRequest(xhttp,door_id){
    xhttp.open("POST", "ersteEntscheidung.php", true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send("door_id="+door_id);
        
        var goatDoor;
        
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
                    
                    goatDoor = Number(this.responseText); 
                    document.getElementsByTagName('img')[goatDoor].src="/pic/ziege.jpg";
                    document.getElementById('playerChoice').innerHTML = "";
                    document.getElementById("playerChoice").innerHTML = "You chose door " + (Number(door_id)+1) +"<br> Do you wish to change your choice?";
                    doorStatus[goatDoor] = false;
                    gameStatus +=1;
                    return goatDoor;
		}
	}
        return goatDoor;
}

function secondRequest(xhttp,door_id,firstGoatDoor){
        xhttp.open("POST", "zweiteEntscheidung.php", true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send("door_id="+door_id+"&firstGoatDoor="+firstGoatDoor);
        var result;
        
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
                    
                    result = this.responseText;
                    if(result==1){
                        document.getElementById('playerChoice').innerHTML = "";
                        document.getElementById("playerChoice").innerHTML = "You won!";
                        document.getElementsByTagName('img')[door_id].src="/pic/Auto.jpg";
                        doorStatus[door_id]=false;
                        for(var i=0;i<3;i++){
                            if(doorStatus[i]==true){
                                 document.getElementsByTagName('img')[i].src="/pic/Auto.jpg";
                            }
                        } 
                    }
                    else{
                        document.getElementById('playerChoice').innerHTML = "";
                        document.getElementById("playerChoice").innerHTML = "You lost :(";
                        document.getElementsByTagName('img')[door_id].src="/pic/ziege.jpg";
                        doorStatus[door_id]=false;
                        for(var i=0;i<3;i++){
                            if(doorStatus[i]==true){
                                document.getElementsByTagName('img')[i].src="/pic/Auto.jpg";
                        } 
                    }
		}
	}
        gameStatus +=1;
        return result;
    }
}


function end_game(){
 
        var xhttp;
	if (window.XMLHttpRequest) {
            xhttp = new XMLHttpRequest();
         } 
	else {
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}  
        xhttp.open("POST", "beenden.php", true);
        xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhttp.send();
        
          xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('playerChoice').innerHTML = "";
                    document.getElementById("playerChoice").innerHTML = this.responseText;
                }
    }	
    }
