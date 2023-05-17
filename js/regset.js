(function () {
	'use strict'

	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.querySelectorAll('.needs-validation')
	

	// Loop over them and prevent submission
	Array.prototype.slice.call(forms)
		.forEach(function (form) {
			form.addEventListener('submit', function (event) {
				event.preventDefault()
				if (!form.checkValidity()) {
					event.stopPropagation()
				}
				// redirect to index.html if the form is validated
				else {
					var name = document.getElementById('name').value
					var email = document.getElementById('email').value
					var number = document.getElementById('number').value
					var address = document.getElementById('address').value
					let user = {
						name,
						email,
						number,
						address
					}
					// console.log(user)
					let userObj = JSON.stringify(user)
					localStorage.setItem("user", userObj)
					window.location.href = "login.html";
				}
				form.classList.add('was-validated')
			}, false)
		})
})()