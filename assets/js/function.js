/*----- Password Display -----*/
let eyeBtn = Array.from(document.querySelectorAll('.passDisplay'));
if (eyeBtn) {
	eyeBtn.forEach(e => {
		e.addEventListener('click', function () {
			let passwordWrapper = e.closest('.passwordWrapper');
			let passInput = passwordWrapper.querySelector('.passInput');
			let eyeIcon = passwordWrapper.querySelector('.passDisplay i');
			if (passInput.type == 'password') {
				passInput.setAttribute('type', 'text');
				eyeIcon.setAttribute('class', 'fas fa-eye');
			}
			else {
				passInput.setAttribute('type', 'password');
				eyeIcon.setAttribute('class', 'fas fa-eye-slash');
			}
		})
	})

}
/*----- Path Actions -----*/
let path = window.location.pathname;
path = path.split('/');
let activePath = path[path.length - 2];
let sideMenu = Array.from(document.querySelectorAll('.main-menu .nav-item'));
sideMenu.forEach(e => {
	let sideMenuLink = e.querySelector('.main-menu .nav-item a').href;
	sideMenuLink = sideMenuLink.split('/');
	let sideMenuActive = sideMenuLink[sideMenuLink.length - 2];
	if (sideMenuActive == activePath) {
		e.classList.add('active');
	}
})

/*----- Go Back To page -----*/
let backLink = Array.from(document.querySelectorAll('.go-back-icon'));
backLink.forEach(e => {
	e.addEventListener('click', function () {
		window.history.go(-1)
	})
})

/*----- Open SubMenu -----*/
let subNavItem = document.querySelector('.subactive');
if (subNavItem) {
	let navItem = subNavItem.closest('.has-sub');
	navItem.classList.add('open');
};


$(document).ready(function () {
	$("input:radio").click(function () {
		//alert("clicked");
		if ($(this).val() == "other") {
			$("#textarea").removeClass('d-none');
		} else {
			$("#textarea").addClass('d-none');
		}
	});

	$(".modal").on('shown.bs.modal', function () {
		$("body").addClass("modal-open");
	});


	$('.modal').on('hidden.bs.modal', function (event) {
		$("body").removeClass("modal-open");
	})
	/*
   $(".q-option input:radio").click(function(event){
	 event.preventDefault();
	 $('.inputDisabled').prop("disabled", false); // Element(s) are now enabled.
   });
*/

	let dis_radios = document.querySelectorAll(".radio-ss");


	for (let i = 0; i < dis_radios.length; i++) {
		let radio_here = dis_radios[i];
		radio_here.addEventListener('click', function () {
			for (let j = 0; j < dis_radios.length; j++) {
				dis_radios[j].parentElement.nextElementSibling.children[0].disabled = true
			}
			this.parentElement.nextElementSibling.children[0].disabled = false
		});
	}

});

/*modal click change start here*/

$(function () {


	/**** Pasword Visible***/


	$(".enter-icon").click(function () {
		//console.log("ds");
		//alert ("ds"); 
		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $(".enter-input");
		if (input.attr("type") === "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}

	});
});





/*modal click change end here*/



/*date picker start here*/

