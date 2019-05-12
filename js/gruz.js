var servResponse = document.querySelector('#response');

document.forms.gruz.onsubmit = function (e) {
 	e.preventDefault();

 	//var userInput = document.forms.gruz.region.value;
 	//userInput = encodeURIComponent(userInput);

 	var xhr = new XMLHttpRequest();

 	xhr.open('POST', 'gruz.php');

 	var formData = new  FormData(document.forms.gruz);

 	//xhr.setRequestHeader('Content-Type',
 	//	'application/x-www-form-urlencoder');

 	xhr.onreadystatechange = function(){
 		if (xhr.readyState === 4 && xhr.status === 200 ){
 			servResponse.textContent = xhr.responseText;
 		}
 	}
 		xhr.send(); 	
};