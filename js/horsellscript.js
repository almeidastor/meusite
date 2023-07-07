	 

	 function ocultarExibir() {

	    document.getElementById("divmailsent").style.display = 'block';
	    closeocex();
	  }

	  function closeocex() {
	  	var inputmailfooter = $("#inputemail-footer");
	 	var inputtextfooter = $("#inputtext-footer");
    	setInterval(() => {
    	document.getElementById("divmailsent").style.display = 'none';
    }, 500);
    	console.log(inputmailfooter.val(""));
	    console.log(inputtextfooter.val(""));
	}


