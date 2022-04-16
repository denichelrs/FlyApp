function validateForm(){
	let bt = document.getElementById('bt');
	let log_email = document.getElementById('login_email');
	let log_password = document.getElementById('login_password');

	bt.addEventListener('click', function() {
		if (log_email.lenght == 0) {
			alert('The email cannot be equal to 0.');
		}
	})
	
}

