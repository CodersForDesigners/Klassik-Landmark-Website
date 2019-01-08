<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", 1 );
	ini_set( "error_reporting", E_ALL );

	// Is this running under a production or development one?
	$productionEnv = include __DIR__ . '/inc/env.php' ?? false;

	/*
	 * Versioning Assets to invalidate the browser cache
	 */
	$ver = '?v=20190103';

	// included external php files with functions.
	require ('inc/head.php');
	require ('inc/lazaro.php'); /* -- Lazaro disclaimer and footer -- */

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
	prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">

<head>


	<!-- Nothing Above This -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Page Title | Page Name -->
	<title>Klassik | Landmark | 3BHK Flats & Apartments for Sale | Sarjapur Road</title>

	<?php echo gethead(); ?>

	<link rel="canonical" href="https://klassikbuild.com/landmark/">

</head>

<body id="body" class="body">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKCJ5FN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--  ★  MARKUP GOES HERE  ★  -->

<div id="page-wrapper"><!-- Page Wrapper -->

	<!-- Navigation Section -->
	<section class="navigation-section js_navigation_section"><!-- Add Show Class Here -->
		<div class="row">
			<div class="scrollee">
				<div class="container">
					<a href="landmark/pricing" target="_blank" class="link pricing columns small-3">
						<div class="title label text-light-0">Download Price</div>
						<div class="sub-title small text-neutral-0">Real-time Availability</div>
						<!-- <hr class="dash"> -->
						<!-- <div class="description small text-light-0"></div> -->
						<div class="icon" style="background-image: url('/media/icons/download.svg<?php echo $ver ?>');"></div>
					</a>
					<a href="landmark/pricing" target="_blank" class="link variant columns small-3 active">
						<div class="title label text-light-0">Island 3BHK</div>
						<div class="sub-title small text-neutral-0">2035sft to 2170sft</div>
						<hr class="dash">
						<div class="description small text-light-0">READY TO MOVE IN</div>
					</a>
					<a href="landmark/pricing" target="_blank" class="link variant columns small-3">
						<div class="title label text-light-0">Plush 3BHK</div>
						<div class="sub-title small text-neutral-0">1600sft to 2000sft</div>
						<hr class="dash">
						<div class="description small text-light-0">READY TO MOVE IN</div>
					</a>
					<a href="landmark/pricing" target="_blank" class="link variant columns small-3">
						<div class="title label text-light-0">Elevate 3BHK</div>
						<div class="sub-title small text-neutral-0">1400sft to 1600sft</div>
						<hr class="dash">
						<div class="description small text-light-0">READY IN DEC 2019</div>
					</a>
				</div>
			</div>
		</div>
	</section>


	<!-- Landing Section -->
	<section class="landing-section section-height" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/landmark-graded-photos/Klassik_Landmark_048_retouched_extendedsky.jpg<?php echo $ver ?>');">
		<div class="container">
			<div class="row">
				<div class="card-0 columns small-3 fill-light-0 large-2 large-offset-4">
					<img class="block" src="https://res.cloudinary.com/klassik/image/upload/Website/klassik-logo-color-light.svg<?php echo $ver ?>">
				</div>
			</div>
			<div class="row">
				<div class="card card-1 columns small-9 small-offset-3 large-6 large-offset-6 fill-light-0">
					<div class="h2 strong text-dark-1">The only <span class="text-red-1">all 3BHK</span> apartment development</div>
					<div class="h3 text-red-1">in the Sarjapur Road vicinity</div>
				</div>
			</div>
			<div class="row">
				<div class="card card-2 columns small-12 medium-9 large-6 fill-red-1">
					<div class="h1 strong text-light-0">Rich, Comfy and Better Engineered</div>
				</div>
			</div>
			<div class="row">
				<div class="card card-3 columns small-12 medium-9 medium-offset-3 large-6 large-offset-6 fill-dark-1">
					<div class="h2 strong text-light-0">Klassik <span class="text-red-1">Landmark</span></div>
					<div class="h3 text-light-0">You <span class="h3 strong">don’t</span> have to be a big builder to do things better</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Apartment Section -->
	<!-- Apartment Section: Floorplan -->
	<section class="apartment-section-floorplan section-height fill-light-0">
		<div class="row">
			<div class="container">
				<div class="layer-2 columns small-12 large-6 section-height block-space-top-bottom">
					<div class="floorplan" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/diagrams/Island_Floorplan.png<?php echo $ver ?>');"></div>
					<div class="h2 strong text-red-1">Island 3BHK</div>
					<div class="label text-dark-1">2035sft of Privacy</div>
				</div>
				<div class="layer-1 columns small-12 large-6 fill-light-1 section-height block-space-top-bottom">
					<div class="row">
						<div class="points-roman">
							<div class="point h4 text-dark-1 columns small-8 small-offset-2 medium-6 medium-offset-3 large-8 large-offset-2">Aerodynamic Tower Boosts Ventilation</div>
							<div class="point h4 text-dark-1 columns small-8 small-offset-2 medium-6 medium-offset-3 large-8 large-offset-2">Bright, Airy Kitchen & Utility</div>
							<div class="point h4 text-dark-1 columns small-8 small-offset-2 medium-6 medium-offset-3 large-7 large-offset-3">9'6" Clear Ceiling-Height</div>
							<div class="point h4 text-dark-1 columns small-8 small-offset-2 medium-6 medium-offset-3 large-7 large-offset-3">20% More Room Volume</div>
							<div class="point h4 text-dark-1 columns small-8 small-offset-2 medium-6 medium-offset-3 large-6 large-offset-4">Only 3 Flats Per Floor</div>
							<div class="point h4 text-dark-1 columns small-8 small-offset-2 medium-6 medium-offset-3 large-6 large-offset-4">Tall 8 Feet Entry Door</div>
							<div class="point h4 text-dark-1 columns small-8 small-offset-2 medium-6 medium-offset-3 large-6 large-offset-4">No Common Walls</div>
							<div class="point h4 text-dark-1 columns small-8 small-offset-2 medium-6 medium-offset-3 large-5 large-offset-5">Larger Balconies</div>
							<div class="point h4 text-dark-1 columns small-8 small-offset-2 medium-6 medium-offset-3 large-5 large-offset-5">No Visible Beams</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Apartment Section: Collage -->
	<section class="section-height collage-section">
		<div class="row layer-1">
			<div class="columns small-12 large-6">
				<div class="row">
					<div class="photo quarter columns small-6 large-12" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/landmark-graded-photos/Klassik_Podium_01_retouched.jpg<?php echo $ver ?>');"></div>
					<div class="photo quarter columns small-6 large-12" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/landmark-graded-photos/Klassik_Landmark_014_retouched.jpg<?php echo $ver ?>');"></div>
				</div>
			</div>
			<div class="photo half columns small-12 large-6" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/landmark-graded-photos/Klassik_Landmark_012_retouched.jpg<?php echo $ver ?>');"></div>
		</div>
		<div class="row layer-2">
			<div class="container">
				<div class="card columns small-9 medium-6 large-4 large-offset-6 fill-dark-2-75 flex-center">
					<div>
						<div class="h2 strong text-light-0">Private and Detached</div>
						<div class="h4 text-red-1">Your privacy is a <br>necessity</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-height fill-neutral-0">
		<div class="row">
			<div class="container">
				<div class="columns small-12 large-6 fill-neutral-2">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-light-0">No common walls, <br>only 3 flats per floor</div>
							<hr class="underline">
							<div class="p block-space-bottom text-neutral-0">The 2000sft ‘Island 3BHK’ does not share any common walls with any other apartment. It is the only apartment in the vicinity that opens to the East and the West. Every lift lobby only serves 3 apartments per floor. Each lift lobby has 2 lifts, one 13 person lift and one 6 person lift.</div>

							<div class="p text-light-1 fill-dark-0" style="padding: 15px;">
								ISLAND /ˈ ʌɪlənd/
								Noun - a thing regarded as resembling an island, especially in being isolated or detached.
							</div>
						</div>
					</div>
				</div>
				<div class="columns small-12 large-6 fill-light-1">
					<div class="row section-height block-space-top-bottom flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2" data-loginner="Enquiry" data-context="Landing Page">
							<div class="h4 text-red-1 block-space-bottom">Enquire Now</div>
							<form class="js_enquiry_form js_user_required">
								<div class="form-row">
									<label>
										<span class="">Name</span><br>
										<input class="block" type="text" name="name" required>
										<img class="icon" src="/media/icons/name.svg<?php echo $ver ?>">
									</label>
								</div>
								<div class="form-row">
									<label>
										<span class="">Email</span><br>
										<input class="block" type="email" name="email" required>
										<img class="icon" src="/media/icons/email.svg<?php echo $ver ?>">
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
											<?php require __DIR__ . '/inc/phone-country-codes.php'; ?>
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
										<input class="block" type="text">
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
			</div>
		</div>
	</section>

	<section class="diagram-section section-height fill-light-1">
		<div class="row">
			<div class="container fill-light-0">
				<div class="diagram columns small-12 large-6" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/diagrams/diagram_1.png<?php echo $ver ?>');">
				</div>
				<div class="columns small-12 large-6">
					<div class="content row flex-center block-space-top-bottom">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">Aerodynamics to improve ventilation</div>
							<hr class="underline">
							<div class="p">A direct benefit of the 'wing-shaped' towers, better airflow around the buildings. Placing 3 balconies on this aerodynamic curve significantly boosts the flow of air into all rooms. Klassik Landmark has more balconies per apartment than any other project in the vicinity.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="diagram-section section-height fill-light-2">
		<div class="row">
			<div class="container fill-light-1 flex-rtl">
				<div class="diagram columns small-12 large-6" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/diagrams/diagram_2.png<?php echo $ver ?>');">
				</div>
				<div class="columns small-12 large-6">
					<div class="content row flex-center block-space-top-bottom">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">Large openings, more balconies, more sunlight</div>
							<hr class="underline">
							<div class="p">The sliding doors that lead to a balcony are a much larger openings, compared to a regular window, they let in more sunlight and fresh air.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="diagram-section section-height fill-light-1">
		<div class="row">
			<div class="container fill-light-0">
				<div class="diagram columns small-12 large-6" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/diagrams/diagram_3.png<?php echo $ver ?>');">
				</div>
				<div class="columns small-12 large-6">
					<div class="content row flex-center block-space-top-bottom">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">Bright airy kitchen and utility</div>
							<hr class="underline">
							<div class="p">The Kitchen is positioned closer to the building line, it opens out into a fully ventilated utility. This is a best in class feature.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="action-section section-height fill-red-2">
		<div class="row">
			<div class="action-bg container section-height fill-red-0 block-space-top-bottom" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/diagrams/phonetrap_brochure_1.png<?php echo $ver ?>');">
				<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-4 large-offset-1" data-loginner="Brochure" data-context="Landing Page">
					<div class="h1 strong text-light-0 block-space-bottom">
						Download Brochure
					</div>
					<form class="js_get_brochure">
						<div class="form-row">
							<label>
								<a href="download/klassik_brochure.pdf" target="_blank" class="button block fill-dark-2 js_user_required" style="position: relative;">
									Download
									<img class="icon" src="/media/icons/pdf.svg<?php echo $ver ?>">
								</a>
							</label>
						</div>
					</form>
					<!-- Phone Trap -->
					<!-- Phone form -->
					<form class="loginner_form_phone hidden">
						<div class="form-row phone-field">
							<label for="enquire-form-phone-field">
								<span class="text-light-0">Please provide your phone number</span>
							</label>
							<div class="phone-country-code">
								<select class="js_phone_country_code">
									<?php require __DIR__ . '/inc/phone-country-codes.php'; ?>
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
								<button type="submit" class="button block fill-dark-0" style="position: relative;">
									<span>Send</span>
									<img class="icon" src="/media/icons/send.svg<?php echo $ver ?>">
								</button>
							</label>
						</div>
					</form>
					<form class="loginner_form_otp hidden">
						<div class="form-row">
							<label>
								<span class="text-light-0">We've sent you an OTP</span><br>
								<input class="block" type="text">
							</label>
						</div>
						<div class="form-row">
							<label>
								<span class="invisible">Verify with OTP</span><br>
								<button type="submit" class="button block fill-dark-0" style="position: relative;">
									<span>Verify with OTP</span>
									<img class="icon" src="/media/icons/send.svg<?php echo $ver ?>">
								</button>
							</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="diagram-section section-height fill-light-1">
		<div class="row">
			<div class="container fill-light-0">
				<div class="diagram columns small-12 large-6" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/diagrams/diagram_4.png<?php echo $ver ?>');">
				</div>
				<div class="columns small-12 large-6">
					<div class="content row flex-center block-space-top-bottom">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">20% higher room volume</div>
							<hr class="underline">
							<div class="p">The ‘flat-slab’ engineering upgrade allows for larger room sizes, an improved ceiling height of 9’6” and no visible beams, because there are no beams. All internal walls are not load bearing.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="diagram-section section-height fill-light-2">
		<div class="row">
			<div class="container fill-light-1 flex-rtl">
				<div class="diagram columns small-12 large-6" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/diagrams/logo_grid_1.png<?php echo $ver ?>');">
				</div>
				<div class="columns small-12 large-6">
					<div class="content row flex-center block-space-top-bottom">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">Takeover a Fresh Apartment</div>
							<hr class="underline">
							<div class="p">We changed one engineering process to make your new apartment feel new.  The Doors, Sanitary Fixtures and Kitchen Counter are installed just before you move in. They are not soiled by construction workers. The apartment truly feels brand new.</div>
							<div class="p">Top of the line building materials from Schindler, Grohe, Legrand, Grundfos, Pyramid, Saint Gobain & Nippon paint.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Building Section -->
	<!-- Building Section: Collage -->
	<section class="section-height collage-section">
		<div class="row layer-1">
			<div class="columns small-12 large-6">
				<div class="row">
					<div class="photo quarter columns small-6 large-12" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/landmark-graded-photos/Klassik_Landmark_085_retouched.jpg<?php echo $ver ?>');"></div>
					<div class="photo quarter columns small-6 large-12" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/landmark-graded-photos/Klassik_Landmark_015_retouched.jpg<?php echo $ver ?>');"></div>
				</div>
			</div>
			<div class="photo half columns small-12 large-6" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/landmark-photos/Klassik-Site_01A.jpg<?php echo $ver ?>');"></div>
		</div>
		<div class="row layer-2">
			<div class="container">
				<div class="card columns small-9 medium-6 large-4 large-offset-6 fill-dark-2-75 flex-center">
					<div>
						<div class="h2 strong text-light-0">Responsible Engineering</div>
						<div class="h4 text-red-1">Airplane Wing <br>Design</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="photo-bleed-section fill-dark-2">
		<div class="row layer-1">
			<div class="container fill-dark-1">
				<div class="columns small-12 large-6">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-light-0">Adjusted for local wind and sunlight conditions</div>
							<hr class="underline">
							<div class="p">Constructing a curved aerodynamic building is close to 10% more expensive. The result is benefits that are worth it, considering the long lifespan of a civil construction.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row layer-2">
			<div class="photo columns small-12 large-6 large-offset-6 section-height" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/landmark-graded-photos/Klassik_Landmark_0110_retouched.jpg<?php echo $ver ?>');">
			</div>
		</div>
	</section>

	<!-- <section class="diagram-section section-height fill-light-1">

		<div class="row">
			<div class="container fill-light-0">
				<div class="columns small-12 large-6">
					< - insert diagram - >
				</div>
				<div class="columns small-12 large-6">
					<div class="content row flex-center block-space-top-bottom">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">Aligned to Bangalore’s natural wind direction  Design Upgrade</div>
							<hr class="underline">
							<div class="p">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proiden.</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section> -->

	<section class="diagram-section section-height fill-light-2">
		<div class="row">
			<div class="container fill-light-1 flex-rtl">
				<div class="diagram columns small-12 large-6" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/diagrams/diagram_5.png<?php echo $ver ?>');">
				</div>
				<div class="columns small-12 large-6">
					<div class="content row flex-center block-space-top-bottom">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1"><span class="text-red-1">Aircraft Wing Section</span> tower design</div>
							<hr class="underline">
							<div class="p">We changed one engineering process to make your new apartment feel new.  The Doors, Sanitary Fixtures and Kitchen Counter are installed just before you move in. They are not soiled by construction workers. The apartment truly feels brand new.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="diagram-section section-height fill-light-1">
		<div class="row">
			<div class="container fill-light-0">
				<div class="diagram columns small-12 large-6" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/diagrams/diagram_6.png<?php echo $ver ?>');">
				</div>
				<div class="columns small-12 large-6">
					<div class="content row flex-center block-space-top-bottom">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">8.5 acres of open, traffic-free podium Design Upgrade</div>
							<hr class="underline">
							<div class="p">We optimised the building footprint down to just 20% of the total of 11 acres. The remaining 80% is a combination of green space & amenities for residents. We also improved on the industry norm by completely removing surface parking along the boundary wall. There is no vehicular traffic at the podium level. So that’s less noise, less dust, and a much needed child-friendly zone.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Building Section: Air Quality -->
	<section class="building-section-air-quality photo-bleed-section fill-neutral-1">
		<div class="row layer-2">
			<div class="photo columns small-12 large-6 section-height" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/landmark-graded-photos/Klassik_Landmark_0114_retouched.jpg<?php echo $ver ?>');">
			</div>
		</div>
		<div class="row layer-3">
			<div class="container">
				<div class="card columns small-9 medium-6 large-4 fill-dark-2-75">
					<div class="h3 text-light-0">Scientifically proven higher air quality</div>
					<hr class="underline">
					<div class="p text-neutral-0">Periodically conducted, scientific measurements of air quality at the project.</div>
				</div>
			</div>
		</div>
		<div class="row layer-1">
			<div class="container section-height fill-light-2">
				<div class="columns small-12 large-6 large-offset-6">
					<div class="row section-height flex-center block-space-top-bottom">
						<div>
							<div class="points-roman columns small-8 small-offset-2 medium-6 medium-offset-3 large-8 large-offset-2">
								<div class="point h4 text-dark-1">Optimised Building Footprint</div>
								<div class="point h4 text-dark-1">80% open space</div>
								<div class="point h4 text-dark-1">Wide views from curved balconies</div>
								<div class="point h4 text-dark-1">Balconies Either Face East or West</div>
								<div class="point h4 text-dark-1">Aligned With 80% Of Bangalore’s Wind</div>
								<div class="point h4 text-dark-1">Privacy For Ground Floor Flats</div>
							</div>
							<div class="air-quality-certificate columns small-10 small-offset-1 medium-5 medium-offset-3 large-7 large-offset-2" data-loginner="Air Certificate" data-context="Landing Page">
								<div class="title p text-red-1">Pollution Board Air Quality Certificate:</div>
								<a href="download/klassik_airquality_web.pdf" target="_blank" class="button block fill-dark-2 js_user_required js_get_air_certificate">
									Download
									<img class="icon" src="/media/icons/certificate.svg<?php echo $ver ?>">
								</a>
								<!-- Phone Trap -->
								<!-- Phone form -->
								<form class="loginner_form_phone hidden">
									<div class="form-row phone-field">
										<label for="enquire-form-phone-field">
											<span class="text-dark-0">Please provide your phone number</span>
										</label>
										<div class="phone-country-code">
											<select class="js_phone_country_code">
												<?php require __DIR__ . '/inc/phone-country-codes.php'; ?>
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
											<button type="submit" class="button block fill-dark-0" style="position: relative;">
												<span>Send</span>
												<img class="icon" src="/media/icons/send.svg<?php echo $ver ?>">
											</button>
										</label>
									</div>
								</form>
								<form class="loginner_form_otp hidden">
									<div class="form-row">
										<label>
											<span class="text-dark-0">We've sent you an OTP</span><br>
											<input class="block" type="text">
										</label>
									</div>
									<div class="form-row">
										<label>
											<span class="invisible">Verify with OTP</span><br>
											<button type="submit" class="button block fill-dark-0" style="position: relative;">
												<span>Verify with OTP</span>
												<img class="icon" src="/media/icons/send.svg<?php echo $ver ?>">
											</button>
										</label>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="section-height fill-red-2">
		<div class="row">
			<div class="container section-height fill-red-0">
				<div class="columns small-12 large-6">
					< - Action Section - >
				</div>
			</div>
		</div>
	</section> -->

	<!-- Location Section -->
	<section class="location-section section-height fill-dark-1">
		<div class="row layer-2">
			<div class="container">
				<div class="card columns small-9 small-offset-3 large-6 large-offset-6 fill-dark-2-75">
					<div class="h2 strong text-light-0">The only <span class="text-red-1">all 3BHK</span> apartment development</div>
					<div class="h3 text-red-1">in the Sarjapur Road vicinity</div>
				</div>
			</div>
		</div>
		<div class="row layer-1">
			<div class="container">
				<div class="location-map columns small-12 large-9 section-height" style="background-image: url('/media/diagrams/Location-Map.svg<?php echo $ver ?>');">
				</div>
				<div class="columns small-12 large-3">
					<div class="points row block-space-top-bottom">
						<div class="columns small-6 small-offset-3 medium-3 medium-offset-2 large-8 large-offset-4">
							<div class="point p text-light-0"><span class="icon distance h4 text-red-1">6 km</span><br> from Ecospace on the Outer Ring Road</div>
							<div class="point p text-light-0"><span class="icon time h4 text-red-1">10 min</span><br> drive to Wipro Head Office</div>
						</div>
						<div class="columns small-6 small-offset-3 medium-3 medium-offset-2 large-8 large-offset-4">
							<div class="point p text-light-0"><span class="icon distance h4 text-red-1">9 km</span><br> before Electronic City</div>
							<div class="point p text-light-0"><span class="icon time h4 text-red-1">10 min</span><br> to Hosa Road Metro Station</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Location Section: Collage -->
	<section class="location-section-collage fill-dark-1">
		<div class="row layer-1">
			<div class="container">
				<div class="columns small-12 large-3">
					<div class="row">
						<div class="photo quarter columns small-6 large-12" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/location-photos/Wipro_Sarjapur.jpg<?php echo $ver ?>');"></div>
						<div class="photo quarter columns small-6 large-12" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/location-photos/Ecospace.png<?php echo $ver ?>');"></div>
					</div>
				</div>
				<div class="photo half columns small-12 large-9" style="background-image: url('https://res.cloudinary.com/klassik/image/upload/Website/location-photos/Infosys_Electronic.jpg<?php echo $ver ?>');"></div>
			</div>
		</div>
		<div class="row layer-2">
			<div class="container">
				<div class="card columns small-6 fill-dark-2-75 large-3 large-offset-3 flex-center">
					<div>
						<div class="h3 text-light-0">Optimal commutes to work</div>
						<hr class="underline">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer Section -->
	<section class="footer-section fill-light-1 block-space-top-bottom">
		<!-- <div class="row">
			<div class="container block-space-bottom">
				<div class="columns small-12">
					<div class="h2 strong text-neutral-1">Quick Links</div>
				</div>
			</div>
		</div> -->
		<div class="row">
			<div class="container">
				<!-- <div class="columns small-6 large-3 block-space-bottom">
					<div class="h4 text-dark-1">Island 3BHK</div>
					<hr class="underline">
					<div><a class="link p text-red-1" href="">Floorplan</a></div>
					<div><a class="link p text-red-1" href="">Masterplan</a></div>
					<div><a class="link p text-red-1" href="">Amenities</a></div>
					<div><a class="link p text-red-1" href="">Specifications</a></div>
					<div><a class="link p text-red-1" href="">Location</a></div>
				</div>
				<div class="columns small-6 large-3 block-space-bottom">
					<div class="h4 text-dark-1">Plush 3BHK</div>
					<hr class="underline">
					<div><a class="link p text-red-1" href="">Floorplan</a></div>
					<div><a class="link p text-red-1" href="">Masterplan</a></div>
					<div><a class="link p text-red-1" href="">Amenities</a></div>
					<div><a class="link p text-red-1" href="">Specifications</a></div>
					<div><a class="link p text-red-1" href="">Location</a></div>
				</div>
				<div class="columns small-6 large-3 block-space-bottom">
					<div class="h4 text-dark-1">Elevate 3BHK</div>
					<hr class="underline">
					<div><a class="link p text-red-1" href="">Floorplan</a></div>
					<div><a class="link p text-red-1" href="">Masterplan</a></div>
					<div><a class="link p text-red-1" href="">Amenities</a></div>
					<div><a class="link p text-red-1" href="">Specifications</a></div>
					<div><a class="link p text-red-1" href="">Location</a></div>
				</div> -->
				<!-- <div class="columns small-6 medium-4 large-3 block-space-bottom contact"> -->
				<div class="columns small-6 medium-4 large-3 block-space-bottom contact" style="text-align: left !important;"><!-- M: Delete this line -->
					<div class="h4 text-dark-1">Project Office</div>
					<hr class="underline">
					<div class="p address">
						Sy No.34/9 - 34/13, Junnasandra, Varthur,
						Near Amritha College Of Engineering,
						Bangalore - 560 035.
					</div>
					<div><a class="link h4 text-red-1" href="tel:+919663396887">+91–96633–96887</a></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="columns small-12">
					<a class="seyonii-badge" href="https://seyonii.com/" target="_blank"><img src="https://res.cloudinary.com/klassik/image/upload/Website/seyonii-badge.svg<?php echo $ver ?>"></a>
				</div>
			</div>
		</div>
	</section>

	<section class="fill-light-2">
		<div class="row">
			<div class="container block-space-top-bottom">
				<div class="columns small-12 text-justify">
					<div class="block-space-bottom">
						<small class="text-dark-0">PHASE 2 - PRM/KA/RERA/1251/446/PR/171015/000760 | MARKETED BY SEYONII - PRM/KA/RERA/1251/309/AG/180727/001045</small>
					</div>
					<small>
						<span class="text-red-1">DISCLAIMER :</span> The content mentioned on this website is for general information purposes only. While enough care is taken by Klassik Enterprises Pvt Ltd to ensure that information on the website is up to date, accurate and correct, readers are requested to make their independent enquiry before relying upon the same. In no event will Klassik Enterprises offer any warranty on the information made available, or be liable for any loss or damage including without limitation, indirect or consequential loss or damage in connection with, the use of information in this website. By using or accessing the website, you agree with the Disclaimer without any qualification or limitation. Design, specifications, floor plans, brochures, 360 degree views and interactive plans etc., are subject to change without prior notice. Computer generated images; walkthroughs and render images are the artist’s impression and are an indicative of the actual designs. The contents of this website are meant to provide information to the readers of this website about ourselves including our various projects, etc. They are only for general information and are subject to change. By no stretch of imagination, the information on the website shall be construed as an advertisement and/or invitation or offer for sale. To find out more about projects/developments, please call 9663-396-887 or visit our sales office during working hours and get in touch with authorized Klassik Enterprises sales representative.
					</small>
					<br><br><br><br><br><br>
				</div>
			</div>
		</div>
	</section>


	<!-- Lazaro Signature -->
	<?php // lazaro_signature(); ?>
	<!-- END : Lazaro Signature -->

</div><!-- END : Page Wrapper -->









<!-- ⬇ All Modals below this point ⬇ -->

<div id="modal-wrapper"><!-- Modal Wrapper -->
	<div class="modal-box js_modal_box">
		<!-- Modal Content : Sample Video -->
		<div class="modal-box-content js_modal_box_content" data-mod-id="sample-video">
			<div class="container">
				<div class="row">
					<div class="columns small-12">
						<!-- video embed -->
						<div class="youtube_embed ga_video" data-src="https://www.youtube.com/embed/lncVHzsc_QA?rel=0&amp;showinfo=0" data-ga-video-src="Sample - Video">
							<div class="youtube_load"></div>
							<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END : Sample Video -->

		<!-- Modal Content : Sample Form -->
		<div class="modal-box-content js_modal_box_content" data-mod-id="sample-form">
			<div class="container">
				<div class="row">
					<div class="columns small-12">
						<h2>Form Title Goes Here</h2>
					</div>
				</div>
				<div class="row">
					<!-- video embed -->
					<div class="columns small-12">
						<div class="youtube_embed ga_video" data-src="https://www.youtube.com/embed/lncVHzsc_QA?rel=0&amp;showinfo=0" data-ga-video-src="Sample - Video">
							<div class="youtube_load"></div>
							<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="columns small-12">
						<p>Augmented reality chrome network skyscraper Tokyo camera military-grade cardboard footage ablative otaku warehouse Kowloon table tower monofilament. Bicycle girl tower network face forwards towards fetishism corporation tiger-team. Monofilament decay hacker RAF dolphin DIY franchise narrative math-skyscraper realism systemic order-flow corrupted. Math-sentient tube cyber-paranoid order-flow long-chain hydrocarbons Chiba boy. RAF advert narrative dissident car wristwatch soul-delay cardboard nano-neon silent. Wonton soup pistol nano-otaku assault franchise realism RAF denim skyscraper geodesic tube into weathered youtube artisanal grenade. Youtube monofilament smart-corporation military-grade Tokyo meta-papier-mache corrupted disposable plastic savant shanty town dolphin 8-bit wonton soup. Military-grade Tokyo digital 3D-printed boat advert San Francisco engine tattoo computer skyscraper physical construct. Sub-orbital computer media market order-flow nodal point j-pop spook Chiba soul-delay tiger-team tanto cartel. Camera tower-space franchise range-rover futurity network military-grade Shibuya. Saturation point tanto physical BASE jump 3D-printed neural fetishism long-chain hydrocarbons rain. Bicycle apophenia futurity digital boat denim post-jeans free-market car corporation range-rover cardboard convenience store concrete. Long-chain hydrocarbons j-pop Tokyo crypto-table cardboard render-farm. Tokyo boy disposable industrial grade bridge A.I. carbon footage BASE jump cartel free-market euro-pop long-chain hydrocarbons-ware grenade. Pre-man voodoo god towards euro-pop cyber-crypto-Legba systema modem beef noodles. Free-market boy sensory post--space systemic jeans. Uplink singularity shanty town voodoo god rifle tank-traps smart-katana shrine human. Hotdog savant human garage wonton soup tube dolphin j-pop. Tiger-team wristwatch engine vehicle cartel apophenia augmented reality man network stimulate. Shrine claymore mine monofilament hotdog voodoo god geodesic knife. Voodoo god silent otaku hacker computer post-singularity office tower shanty town. Tokyo lights corrupted marketing skyscraper receding beef noodles uplink footage gang rebar order-flow table nano-bicycle tube. </p>
					</div>
				</div>
			</div>
		</div><!-- END : Sample Form -->


		<!-- Modal Close Button -->
		<div class="modal-close js_modal_close">&times;</div>
	</div>

</div><!-- END : Modal Wrapper -->

<!--  ☠  MARKUP ENDS HERE  ☠  -->

<?php //lazaro_disclaimer(); ?>









<!-- JS Modules -->
<!-- <script type="text/javascript" src="/js/modules/device-charge.js"></script> -->
<!-- <script type="text/javascript" src="/js/tracking.js" defer></script> -->
<script type="text/javascript" src="/js/modules/navigation.js"></script>
<script type="text/javascript" src="/js/modules/video_embed.js"></script>
<script type="text/javascript" src="/js/modules/modal_box.js"></script>
<script type="text/javascript" src="/js/modules/smoothscroll.js"></script>
<script type="text/javascript" src="/js/modules/forms.js"></script>
<script type="text/javascript" src="/js/modules/disclaimer.js"></script>
<!-- Omega -->
<script type="text/javascript" src="/js/modules/omega/utils.js"></script>
<script type="text/javascript" src="/js/modules/omega/user.js"></script>
<script type="text/javascript" src="/js/modules/form-traps.js"></script>

<script type="text/javascript">

// JAVASCRIPT GOES HERE
$(document).ready(function(){
});

</script>

<!-- Other Modules -->
<?php // require __DIR__ . '/inc/can-user-hover.php' ?>
	<!-- LivProp Chat -->
<script src="https://cwc.livserv.in/chat.js?lid=8623"></script>
<script src="https://cw1.livserv.in?did=8623&pid=1"></script>


</body>

</html>
