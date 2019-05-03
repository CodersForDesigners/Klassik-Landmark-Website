<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", 1 );
	ini_set( "error_reporting", E_ALL );

	// Is this running under a production or development one?
	$productionEnv = include __DIR__ . '/../inc/env.php' ?? false;

	/*
	 * Versioning Assets to invalidate the browser cache
	 */
	$ver = '?v=20190103';

	// included external php files with functions.
	require __DIR__ . '/../inc/head.php';
	require __DIR__ . '/../inc/lazaro.php'; /* -- Lazaro disclaimer and footer -- */

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
	prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">

<head>


	<!-- Nothing Above This -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

	<!-- Page Title | Page Name -->
	<title>Request Brochure | OFFICIAL Klassik | Landmark | 3BHK Flats & Apartments for Sale | Sarjapur Road</title>

	<?php echo gethead(); ?>

</head>

<body id="body" class="body fill-neutral-0">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKCJ5FN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--  ★  MARKUP GOES HERE  ★  -->

<div id="page-wrapper"><!-- Page Wrapper -->

	<style type="text/css">

		input[ disabled ],
		textarea[ disabled ] {
			opacity: 0.5;
			cursor: not-allowed;
		}
		button[ type = "submit" ][ disabled ] {
			background-color: var(--neutral-2);
			cursor: not-allowed;
		}

		.brochure-section .container {
			margin-top: 10px;
			margin-bottom: 10px;
		}
		@media( min-width: 640px ) {
			.brochure-section .container {
				margin-top: 60px;
				margin-bottom: 60px;
			}
		}
		/*@media( min-width: 1040px ) {
			.brochure-section .container {
				margin-top: 60px;
			}
		}
		@media( min-width: 1380px ) {
			.brochure-section .container {
				margin-top: 60px;
			}
		}*/

	</style>

	<section class="brochure-section section-height">
		<div class="row">
			<div class="container">
				<div class="columns small-12 large-6 large-offset-3 fill-light-1">
					<div class="columns small-3 small-offset-1 medium-offset-3 large-4 large-offset-2 fill-light-0">
						<img class="block" src="https://res.cloudinary.com/klassik/image/upload/Website/klassik-logo-color-light.svg<?php echo $ver ?>">
					</div>
					<div class="row section-height block-space-top-bottom flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2" data-loginner="Brochure" data-context="Brochure Request Page">
							<div class="h4 text-dark-1">Please provide the following details so that we can courier a physical copy to you.</div>
							<hr class="underline">
							<form class="js_brochure_form js_user_required">
								<div class="form-row">
									<label>
										<span class="">Name</span><br>
										<input class="block" type="text" name="name" required>
										<img class="icon" src="/media/icons/name.svg<?php echo $ver ?>">
									</label>
								</div>
								<div class="form-row">
									<label>
										<span class="">Address</span><br>
										<textarea class="block" name="address" rows="6" required></textarea>
									</label>
								</div>
								<div class="form-row">
									<label>
										<span class="invisible">Submit</span><br>
										<button type="submit" class="button block fill-red-1" style="position: relative;">
											<span>Send</span>
											<img class="icon" src="/media/icons/send.svg<?php echo $ver ?>">
										</button>
									</label>
								</div>
							</form>
							<!-- Phone Trap -->
							<!-- Phone form -->
							<form class="loginner_form_phone hidden">
								<div class="form-row phone-field">
									<label for="enquire-form-phone-field">
										<span>Please provide your phone number</span>
									</label>
									<div class="phone-country-code">
										<select class="js_phone_country_code">
											<?php require __DIR__ . '/../inc/phone-country-codes.php'; ?>
										</select>
										<!-- Concise phone country code label -->
										<!-- managed in JavaScript -->
										<input type="text" class="js_phone_country_code_label" value="(+91)">
									</div>
									<div class="phone-number">
										<input id="enquire-form-phone-field" class="block js_phone_number" type="text">
										<img class="icon" src="/media/icons/phone.svg<?php echo $ver ?>">
									</div>
								</div>
								<div class="form-row">
									<label>
										<span class="invisible">Submit</span><br>
										<button type="submit" class="button block fill-red-0" style="position: relative;">
											<span>Send</span>
											<img class="icon" src="/media/icons/send.svg<?php echo $ver ?>">
										</button>
									</label>
								</div>
							</form>
							<form class="loginner_form_otp hidden">
								<div class="form-row">
									<label>
										<span class="">We've sent you an OTP</span><br>
										<input class="block" type="text" name="otp">
									</label>
								</div>
								<div class="form-row">
									<label>
										<span class="invisible">Verify with OTP</span><br>
										<button type="submit" class="button block fill-red-0" style="position: relative;">
											<span>Verify with OTP</span>
											<img class="icon" src="/media/icons/send.svg<?php echo $ver ?>">
										</button>
									</label>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="columns small-12 large-6 fill-neutral-2 hidden">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-light-0">You don't have to be a big brochure, <br>to provide all the relevant details.</div>
							<hr class="underline">
							<div class="p block-space-bottom text-neutral-0">
								We've designed the brochure to have all the essential details a prospective home buyer would care about.
								<br>
								It's small, yet packs a lot, and best of all, you can put it in your pocket!
							</div>

							<div class="p text-light-1 fill-dark-0" style="padding: 15px;">
								BROCHURE /ˈ brəʊʃə,brɒˈʃʊə/
								Noun - a small book or magazine containing pictures and information about a product or service.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>

<script type="text/javascript" src="/js/modules/omega/utils.js<?= $ver ?>"></script>
<script type="text/javascript" src="/js/modules/omega/user.js<?= $ver ?>"></script>
<script type="text/javascript" src="/js/pages/brochure/forms.js<?= $ver ?>"></script>
<script type="text/javascript" src="/js/pages/brochure/form-traps.js<?= $ver ?>"></script>


</body>

</html>
