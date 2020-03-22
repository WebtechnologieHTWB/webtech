var  v=0;
var min1 = 0, max1 = 2;
var zwischenstand='';

var auto=Math.floor(Math.random() * (max1 - min1 + 1)) + min1;
 
function answer(id,x){
	
	var min = 0, max = 1;
    var zufahl=Math.floor(Math.random() * (max - min + 1)) + min;

  switch (v){
	case 0:   
        if(id==0){	
		
     	if(zufahl==0){document.getElementById('2').src='/pic/ziege.jpg';}
		 else{ document.getElementById('1').src='/pic/ziege.jpg';}
	
	    }else if(id==1){
		 if(zufahl==0){document.getElementById('0').src='/pic/ziege.jpg';}
		 else{document.getElementById('2').src='/pic/ziege.jpg';}
		
	    }else if(id==2){
		if(zufahl==0){ document.getElementById('1').src='/pic/ziege.jpg';}
		else{ document.getElementById('0').src='/pic/ziege.jpg';}
		 
		}
		
	       v++;
		   break;
	case 1: 
	                 if(id==auto){
                 if(id==0){document.getElementById('0').src='/pic/auto.jpg';}
                 else if(id==1){document.getElementById('1').src='/pic/auto.jpg';}
                 else if(id==2){document.getElementById('2').src='/pic/auto.jpg';}
				  
		               }else if(id!=auto){
				      if(id==0){document.getElementById('0').src='/pic/ziege.jpg';}
                 else if(id==1){document.getElementById('1').src='/pic/ziege.jpg';}
                 else if(id==2){document.getElementById('2').src='/pic/ziege.jpg';} 
				
					   }
		   v++;
					   break;
	default:   
	break;
   }
}

function loadDoc(){
	v=0;
	
	document.getElementById('0').src='/pic/door.jpg';
	document.getElementById('1').src='/pic/door.jpg';
	document.getElementById('2').src='/pic/door.jpg';
	
	answer(id,x);
}


	
   


