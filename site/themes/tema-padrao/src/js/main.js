$(function () {

	$(window).on('beforeunload', function () {
		$(window).scrollTop(0);
	});

	//Preloader
	function hidePreloader() {

		$('.bg_load').fadeOut(500);
		$('body').removeClass('overflow-hidden');

	}

	if ($('.bg_load').length) {
		hidePreloader();
	}

	//Button back to top
	$('.back-to-top').on('click', function () {

		$('html, body').animate({ scrollTop: 0 }, 'slow');
	});

	//Menu mobile button
	$('.ham').on('click', function () {
		$('body').toggleClass('is-nav');
		$('.open-menu').animate({ height: 'toggle' });
	});

	//Scroll Menu
	if ($(window).width() >= 1000) {

		$(window).scroll(function () {

			if ($(this).scrollTop() > 600) {
				$('.main-header').addClass('active-header');
				$('.header-title').addClass('header-title-none');
			} else {
				$('.main-header').removeClass('active-header');
				$('.header-title').removeClass('header-title-none');
			}

		});

	} else {

		$(window).scroll(function () {

			if ($(this).scrollTop() > 350) {
				$('.main-header').addClass('active-header');
				$('.header-title').addClass('header-title-none');
			} else {
				$('.main-header').removeClass('active-header');
				$('.header-title').removeClass('header-title-none');
			}

		});
	}

	// =============================================================================================

	// Ancora Menu
	$('.ancora').click(function (e) {

		if (IS_HOME) {
			e.preventDefault();
		}

		var id_divs = $(this).data('id');

		$('html, body').animate({
			scrollTop: $(id_divs).offset().top - 100
		}, 500);

		if ($(window).width() <= 768) {
			$('.ham').trigger('click');
		}

	});

	// =============================================================================================

	//Banner
	if ($('.banner__slider').length) {
		$('.banner__slider').slick({
			dots: false,
			arrows: false,
			slidesToScroll: 1,
			slidesToShow: 1,
			// adaptiveHeight: true,
			fade: true,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 2500,
		});
	}

	// Mascaras
	$('#mask-cnpj').mask('00.000.000/0000-00', { reverse: true });
	$('#mask-phone').mask('(00) 0 0000-0000');

});

document.addEventListener("wpcf7submit", function (event) {

	var alertFake = document.querySelectorAll('.alert-fake');

	alertFake.forEach(function (elemento) {
		elemento.classList.remove('alert-fake');
	});

	if ($('.wpcf7-list-item label input') && !$('.wpcf7-list-item label input').is(":checked")) {
		handleNotify("danger", 'Você precisa aceitar os <a href="' + BASE_URL + '/termos-e-condicoes-gerais-de-uso">Termos e Condições Gerais de Uso</a> e a <a href="' + BASE_URL + '/politica-de-privacidade">Política de Privacidade</a> para prosseguir.');
		$(".fadeInDown").addClass('border-notify');
		setTimeout(() => {
			$('#wpcf7-submit-subscribe').prop('disabled', false);
		}, 1000);

	} else if (event.detail.status == "validation_failed") {
		handleNotify("danger", event.detail.apiResponse.message);
		$(".fadeInDown").addClass('border-notify');

		if ($('.qtd-equipe').length) {
			validateSelectQty();
		}

		if ($('.faturamento').length) {
			validateSelectFaturamento();
		}

		setTimeout(() => {
			$('#wpcf7-submit-subscribe').prop('disabled', false);
		}, 1000);

	}

	else if (event.detail.status == "mail_sent") {
		handleNotify("success", event.detail.apiResponse.message);
		$(".fadeInDown").addClass('border-notify');

		setTimeout(() => {
			$('#wpcf7-submit-subscribe').prop('disabled', false);
		}, 1000);
	}
});

function handleNotify(type, message) {
	//type: 'info', 'danger', 'success'
	$.notify({
		// options
		message: message
	}, {
		// settings
		type: type,
		z_index: 9999
	});
}