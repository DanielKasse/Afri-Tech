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
				// redirect to index.php if the form is validated
				else {
					window.location.href = "index.php";
				}
				form.classList.add('was-validated')
			}, false)
		})
})()