$(document).ready(function () {
	$('#submit').click(function (event) {
		event.preventDefault();
		var datastring = $('#contactform').serialize();

		document.getElementById("submit").disabled = true;
		
		$.ajax({
			type: 'POST',
			url: base_url + '/contact',
			data: datastring,
			dataType: 'json',
			success: function (json, text, status) {
				if (text == 'success') {
					Swal.fire({
						title: 'Success',
						icon: "success",
						text: status.statusText,
					});
					setTimeout(function () {
						window.location.href = base_url;
					}, 2000);
				} else {
					Swal.fire({
						title: 'Warning',
						icon: "warning",
						text: status.responseJSON.message,
						timer: 2000
					});
				}
				document.getElementById("submit").disabled = false;
			},
			error: function (json) {
				if (json.status == 422) {
					Swal.fire({
						title: "Error",
						icon: "error",
						text: json.responseJSON.message,
						timer: 2000
					});
				}

				document.getElementById("submit").disabled = false;
			}
		});
	});
});
