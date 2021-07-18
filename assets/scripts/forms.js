window.addEventListener("load", function () {
	submit_forms_with_loading_state();
	submit_forms_with_bootstrap_validation();
});

function submit_forms_with_loading_state() {
	// Fetch all the forms we want to apply the loading state to
	var forms = document.querySelectorAll("form.with-loading-state");
	// Loop over them and add loading class to submit button
	Array.prototype.forEach.call(forms, function (form) {
		form.addEventListener("submit", function (event) {
			form.querySelector('[type="submit"]').disabled = true;
			form.querySelector('[type="submit"]').classList.add("loading");
		});
	});
}

function submit_forms_with_bootstrap_validation() {
	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.getElementsByClassName("needs-validation");
	// Loop over them and prevent submission
	Array.prototype.filter.call(forms, function (form) {
		form.addEventListener(
			"submit",
			function (event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();

					if (form.classList.contains("with-loading-state")) {
						form.querySelector('[type="submit"]').disabled = false;
						form.querySelector('[type="submit"]').classList.remove(
							"loading"
						);
					}
				}
				form.classList.add("was-validated");
			},
			false
		);
	});
}
