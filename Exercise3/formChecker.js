

document.addEventListener("submit", checkForm);

function checkForm(event) {
	if(document.getElementById("password").value == null){
		alert("Some fields were filled in incorrectly")
		event.preventDefault()
	}
	let username = document.getElementById("username").value
	if(username.substr(username.length - 4, username.length) != ".com" || username.search("@") == -1 || username.search(" ") != -1 || username(0) == "@"){
		alert("Some fields were filled in incorrectly")
		event.preventDefault()
	}
	if(document.getElementById("op1").value == null && document.getElementById("op2").value == null && document.getElementById("op3").value == null){
		alert("Some fields were filled in incorrectly")
		event.preventDefault()
	}
	if(document.getElementById("item1").value == null || document.getElementById("item2").value == null || document.getElementById("item3").value == null || document.getElementById("item1").value < 0 || 			document.getElementById("item2").value < 0 || document.getElementById("item3").value < 0 ){
		alert("Some fields were filled in incorrectly")
		event.preventDefault()
	}
}
