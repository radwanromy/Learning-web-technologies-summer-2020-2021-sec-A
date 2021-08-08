function ajax(){

	const json = getAllUser();
	const data = JSON.stringify(json);

	/*let name = document.getElementById('name').value;
	const http = new XMLHttpRequest();
	http.open('GET', `server.php?name=${name}`, true);
	http.send();
	
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
	}*/

	let name = document.getElementById('name').value;
	const http = new XMLHttpRequest();
	http.open('POST', `server.php`, true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send(`mydata=${data}`);
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			//document.getElementById('result').innerHTML = this.responseText;
			//alert(this.responseText);
			let data = JSON.parse(this.responseText);
			document.getElementById('result').innerHTML = data.name;
		}
	}
}