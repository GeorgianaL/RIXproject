$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

// Modals
$(document).ready(function(){
	$("#signupBtn").click(function(){
		$('#loginModal').modal('hide');
		$("#signupModal").modal();
	});
	$("#addBtn").click(function(){
		$("#addModal").modal();
	});
	$("#loginBtn").click(function(){
		$("#loginModal").modal();
	});
	$("#addPrefBtn").click(function(){
		$("#addPrefModal").modal();
	});
	$("#myPrefNewsBtn").click(function(){
		$("#myPrefNewsModal").modal();
	});

// sign up

	$(document).on('click', '#signupSubmit', function(){
		var full_name = $('#fullname').val();
		var email = $('#username').val();
		var password = $('#passw').val();
		if (full_name.length == 0)
			$('#fullname').addClass('error');
		else $('#fullname').removeClass('error');
		if (!validateEmail(email))
			$('#username').addClass('error');
		else $('#username').removeClass('error');
		if (password.length < 6)
			$('#passw').addClass('error');
		else $('#passw').removeClass('error');
		if (full_name.length > 0 && validateEmail(email) && password.length >= 6) {
			$.post('/request/signup', {fullname: full_name, email:email, password: password}, function(data) {
				$('#username').val("");
				$('#fullname').val("");
				$('#passw').val("");
				alert("Inregistrarea s-a facut cu success!");
			});
		}
	});


// login

	$(document).on('click', '#loginBut', function() {
		var email = $('#emails').val();
		var password = $('#psw').val();
		if (!validateEmail(email))
			$('#emails').addClass('error');
		else $('#emails').removeClass('error');
		if (password.length < 6)
			$('#psw').addClass('error');
		else $('#psw').removeClass('error');
		if (validateEmail(email) && password.length >= 6) {
			$.post('/request/login', {email: email, password: password}, function(data) {
				$('#emails').val("");
				$('#psw').val("");
				alert(data);
				if (data=="Login successfull!") location.reload();
			});
		}
	});

// like button

	$(document).on('click', '.animated-like', function() {
		var id = $(this).find('span').attr('data-id');
		$.post('/likevideo', {id: id}, function(data) {
			if (data==0) {
				alert("You've already liked it!");
			}
			else if (data==1) {
				//user like
			}
		});
	});

// preferences button


});