function validateForm() {
	var name = document.forms["Rg"]["name"];
	var cnumber = document.forms["Rg"]["mb"];
	var mail = document.forms["Rg"]["em"];
	

	if (name.value == "") {
		window.alert("Please enter your name.");
		name.focus();
		return false;
	}

	if (cnumber.value == "") {
		window.alert("Please enter your Contact Number.");
		cnumber.focus();
		return false;
	}
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(Rg.mail.value)) {
		return (true)
	}
	alert("You have entered an invalid email address!")
	return (false)

}