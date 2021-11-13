
$(".email > input").focus();

$(".email > input").on("keydown", (event) => {
	if (event.which === 13 || event.keyCode === 13) {
		$(".email > input").blur();
		$(".next").click();
	}
});

$(".password > input").on("keydown", (event) => {
	if (event.which === 13 || event.keyCode === 13) {
		$(".login").click();
	}
});

$(".next").on("click", (event) => {
	let emailInput = $(".email > input").val();
	if (validandoEmail(emailInput)) {
		event.preventDefault();
		$(".inputs").addClass("shift");
		$(".back").addClass("active-back");
		$(".email > input").css({
			border: "1px solid #cccccc"
		});
		$(".warning").empty();
		setTimeout(() => {
			$(".password > input").focus();
		}, 400);
	} else {
		event.preventDefault();
		$(".warning").empty();
		$(".email > input").css({
			border: "1px solid red"
		});
		$(".warning").append("Campo email Incorrecto");
	}
});

$(".back").on("click", (event) => {
	event.preventDefault();
	$(".inputs").removeClass("shift");
	$(".back").removeClass("active-back");

	$(".email > input").focus();

});

$(".login").on("click", (event) => {
	event.preventDefault();

	var password = $("input#password").val();
	var email =  $("input#email").val();

	location.href="verificar_sesion.php?password="+password+"&email="+email; 

	$("form").empty();
	$("form").append('<div class="loader"></div>');
});

const validandoEmail = (email) => {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
};