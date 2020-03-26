function answer(id,x){
	 var min = 0, max = 2;
	  var min1 = 0, max1 = 1;
      var auto=Math.floor(Math.random() * (max - min + 1)) + min;
     var zufahl=Math.floor(Math.random() * (max1 - min1 + 1)) + min1;
		
	if(id==auto){
	     document.getElementById(id).src='/pic/auto.jpg';
		
	}else{
		document.getElementById(id).src='/pic/ziege.jpg';
	}
	
}

