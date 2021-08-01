function ajax(){
            let email = document.getElementById('email').value;
	        const http = new XMLHttpRequest();
			http.open('POST', 'emailCheck.php', true);
			http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			http.send('email='+email);

			http.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('emailMsg').innerHTML = this.responseText;
				}else{
					document.getElementById('emailMsg').innerHTML = "";
				}
				
			}	
        }
    }