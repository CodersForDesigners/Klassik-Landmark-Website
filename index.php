<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", "On" );
	ini_set( "error_reporting", E_ALL );

	/*
	 * Versioning Assets to invalidate the browser cache
	 */
	$ver = '?v=20181126';

	// get info on the request
	$view = require "server/pageless.php";
	$viewName = $view[ 0 ];
	$viewPath = $view[ 1 ];

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
	<title>Page Title <?php echo ( $viewName != "404" ? " | " . $viewName : "" ) ?></title>

	<?php echo gethead(); ?>

</head>

<body id="body" class="body">

<!--  ★  MARKUP GOES HERE  ★  -->

<div id="page-wrapper" data-page="<?php echo $viewName ?>"><!-- Page Wrapper -->

	<!-- Landing Section -->
	<section class="landing-section section-height" style="background-image: url('/media/landmark-photos/Klassik-Site_03.jpg');">
		<div class="container">
			<div class="row">
				<div class="columns small-3 fill-light-0 large-2 large-offset-4">
					<img class="block" src="/media/klassik-logo-color-light.svg">
				</div>
			</div>
			<div class="row">
				<div class="card columns small-9 small-offset-3 large-6 large-offset-6 fill-light-0">
					<div class="h2 strong text-dark-1">The only <span class="text-red-1">all 3BHK</span> apartment development</div> 
					<div class="h3 text-red-1">in the Sarjapur Road vicinity</div>
				</div>
			</div>
			<div class="row">
				<div class="card columns small-12 medium-9 large-6 fill-red-1">
					<div class="h1 strong text-light-0">Rich, Comfy and Better Engineered</div>
				</div>
			</div>
			<div class="row">
				<div class="card columns small-12 medium-9 medium-offset-3 large-6 large-offset-6 fill-dark-1">
					<div class="h2 strong text-light-0">Klassik <span class="text-red-1">Landmark</span></div>
					<div class="h3 text-light-0">You <span class="h3 strong">don’t</span> have to be a big builder to do things better</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Apartment Section -->
	<!-- Apartment Section: Floorplan -->
	<section class="section-height fill-light-0">
		<div class="row">
			<div class="container">
				<div class="columns small-12 large-6">
					<div class="h2 strong text-red-1">Island 3BHK</div>
					<div class="label text-dark-1">2035sft of Privacy</div>
				</div>
				<div class="columns small-12 large-6 fill-light-1 section-height">
					<div class="point h4 text-dark-1">Aerodynamic Tower Boosts Ventilation</div>
					<div class="point h4 text-dark-1">Bright, Airy Kitchen & Utility</div>
					<div class="point h4 text-dark-1">9'6" Clear Ceiling-Height</div>
					<div class="point h4 text-dark-1">20% More Room Volume</div>
					<div class="point h4 text-dark-1">Only 3 Flats Per Floor</div>
					<div class="point h4 text-dark-1">Tall 8 Feet Entry Door</div>
					<div class="point h4 text-dark-1">Larger Balconies</div>
					<div class="point h4 text-dark-1">No Visible Beams</div>
					<div class="point h4 text-dark-1">No Common Walls</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Apartment Section: Collage -->
	<section class="section-height collage-section">
		<div class="row layer-1">
			<div class="columns small-12 large-6">
				<div class="row">
					<div class="photo quarter columns small-6 large-12" style="background-image: url('/media/landmark-photos/Klassik-Site_06.jpg');"></div>
					<div class="photo quarter columns small-6 large-12" style="background-image: url('/media/landmark-photos/Klassik_012.jpg');"></div>
				</div>
			</div>
			<div class="photo half columns small-12 large-6" style="background-image: url('/media/landmark-photos/Klassik-Site_01A.jpg');"></div>
		</div>
		<div class="row layer-2">
			<div class="container">
				<div class="card columns small-9 medium-6 large-4 large-offset-6 fill-dark-1">
					<div class="h2 strong text-light-0">Private and Detached</div>
					<div class="h4 text-red-1">Your privacy is a <br>necessity</div>
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
							<div class="h4 text-light-0">No common walls, only 3 flats per floor</div>
							
							<div class="p">The 2000sft ‘Island 3BHK’ does not share any common walls with any other apartment. It is the only apartment in the vicinity that opens to the East and the West. Every lift lobby only serves 3 apartments per floor. Each lift lobby has 2 lifts, one 13 person lift and one 6 person lift.</div>

							<div class="p text-light-1 fill-dark-0">
								ISLAND /ˈ ʌɪlənd/ 
								Noun - a thing regarded as resembling an island, especially in being isolated or detached.
							</div>
						</div>
					</div>
				</div>
				<div class="columns small-12 large-6 fill-light-1">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-red-1">Enquire Now</div>
							<form>
								<div class="form-row">
									<label>
										<span class="">Name</span><br>
										<input class="block" type="text">
									</label>
								</div>
								<div class="form-row">
									<label>
										<span class="">Email</span><br>
										<input class="block" type="text">
									</label>
								</div>
								<div class="form-row">
									<label>
										<span class="">Phone</span><br>
										<input class="block" type="text">
									</label>
								</div>
								<div class="form-row">
									<label>
										<span class="invisible">Submit</span><br>
										<button type="submit" class="block fill-red-0">Send</button>
									</label>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section class="section-height fill-light-1">
		<div class="row">
			<div class="container fill-light-0">
				<div class="columns small-12 large-6">
					< - insert diagram - >
				</div>
				<div class="columns small-12 large-6">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">Aerodynamics to improve ventilation</div>
							<div class="p">A direct benefit of the 'wing-shaped' towers, better airflow around the buildings. Placing 3 balconies on this aerodynamic curve significantly boosts the flow of air into all rooms. Klassik Landmark has more balconies per apartment than any other project in the vicinity.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section class="section-height fill-light-2">
		<div class="row">
			<div class="container fill-light-1">
				<div class="columns small-12 large-6">
					< - insert diagram - >
				</div>
				<div class="columns small-12 large-6">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">Large openings, more balconies, more sunlight</div>
							<div class="p">The sliding doors that lead to a balcony are a much larger openings, compared to a regular window, they let in more sunlight and fresh air.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section class="section-height fill-light-1">
		<div class="row">
			<div class="container fill-light-0">
				<div class="columns small-12 large-6">
					< - insert diagram - >
				</div>
				<div class="columns small-12 large-6">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">Bright airy kitchen and utility</div>
							<div class="p">The Kitchen is positioned closer to the building line, it opens out into a fully ventilated utility. This is a best in class feature.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-height fill-red-2">
		<div class="row">
			<div class="container section-height fill-red-0">
				<div class="columns small-12 large-6">
					< - Action Section - >
				</div>
			</div>
		</div>
	</section>
		
	<section class="section-height fill-light-2">
		<div class="row">
			<div class="container fill-light-1">
				<div class="columns small-12 large-6">
					< - insert diagram - >
				</div>
				<div class="columns small-12 large-6">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">20% higher room volume</div>
							<div class="p">The ‘flat-slab’ engineering upgrade allows for larger room sizes, an improved ceiling height of 9’6” and no visible beams, because there are no beams. All internal walls are not load bearing.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
			
	<section class="section-height fill-light-1">
		<div class="row">
			<div class="container fill-light-0">
				<div class="columns small-12 large-6">
					< - insert diagram - >
				</div>
				<div class="columns small-12 large-6">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">Takeover a Fresh Apartment Engineering Upgrade</div>
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
					<div class="photo quarter columns small-6 large-12" style="background-image: url('/media/landmark-photos/Klassik-Site_06.jpg');"></div>
					<div class="photo quarter columns small-6 large-12" style="background-image: url('/media/landmark-photos/Klassik_012.jpg');"></div>
				</div>
			</div>
			<div class="photo half columns small-12 large-6" style="background-image: url('/media/landmark-photos/Klassik-Site_01A.jpg');"></div>
		</div>
		<div class="row layer-2">
			<div class="container">
				<div class="card columns small-9 medium-6 large-4 large-offset-6 fill-dark-1">
					<div class="h2 strong text-light-0">Responsible Engineering</div>
					<div class="h4 text-red-1">Airplane Wing <br>Design</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-height fill-dark-2">
		<div class="row">
			<div class="container fill-dark-1">
				<div class="columns small-12 large-6">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-light-0">Adjusted for local wind and sunlight conditions</div>
							<div class="p">Constructing a curved aerodynamic building is close to 10% more expensive. The result is benefits that are worth it, considering the long lifespan of a civil construction.</div>
						</div>
					</div>
				</div>
				<div class="columns small-12 large-6">
					< - insert photo - >
				</div>
			</div>
		</div>
	</section>
 
	<section class="section-height fill-light-2">
		<div class="row">
			<div class="container fill-light-1">
				<div class="columns small-12 large-6">
					< - insert diagram - >
				</div>
				<div class="columns small-12 large-6">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">Aligned to Bangalore’s natural wind direction  Design Upgrade</div>
							<div class="p">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proiden.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section class="section-height fill-light-1">
		<div class="row">
			<div class="container fill-light-0">
				<div class="columns small-12 large-6">
					< - insert diagram - >
				</div>
				<div class="columns small-12 large-6">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">‘Aircraft Wing Section’ tower design Engineering Upgrade</div>
							<div class="p">We changed one engineering process to make your new apartment feel new.  The Doors, Sanitary Fixtures and Kitchen Counter are installed just before you move in. They are not soiled by construction workers. The apartment truly feels brand new.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> 

	<section class="section-height fill-light-2">
		<div class="row">
			<div class="container fill-light-1">
				<div class="columns small-12 large-6">
					< - insert diagram - >
				</div>
				<div class="columns small-12 large-6">
					<div class="row section-height flex-center">
						<div class="columns small-10 small-offset-1 medium-6 medium-offset-3 large-8 large-offset-2">
							<div class="h4 text-dark-1">8.5 acres of open, traffic-free podium Design Upgrade</div>
							<div class="p">We optimised the building footprint down to just 20% of the total of 11 acres. The remaining 80% is a combination of green space & amenities for residents. We also improved on the industry norm by completely removing surface parking along the boundary wall. There is no vehicular traffic at the podium level. So that’s less noise, less dust, and a much needed child-friendly zone.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-height fill-neutral-1">
		<div class="row">
			<div class="container section-height fill-light-2">
				<div class="columns small-12 large-6">
					< - insert photo - >
					<div class="h4 text-dark-1">Scientifically proven higher air quality</div>
					<div class="p">Periodically conducted, scientific measurements of air quality at the project.</div>
				</div>
				<div class="columns small-12 large-6">
					<div class="point h4 text-dark-1">Optimised Building Footprint.</div>
					<div class="point h4 text-dark-1">80% open space.</div>
					<div class="point h4 text-dark-1">Wide views from curved balconies.</div>
					<div class="point h4 text-dark-1">Balconies Either Face East or West.</div>
					<div class="point h4 text-dark-1">Aligned With 80% Of Bangalore’s Wind.</div>
					<div class="point h4 text-dark-1">Privacy For Ground Floor Flats.</div>

					<div class="text-red-1">Pollution Board Air Quality Certificate:</div>
					<div>Download</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-height fill-red-2">
		<div class="row">
			<div class="container section-height fill-red-0">
				<div class="columns small-12 large-6">
					< - Action Section - >
				</div>
			</div>
		</div>
	</section>

	<section class="section-height fill-dark-1">
		<div class="row">
			<div class="container section-height">
				<div class="columns small-12 large-6">
					<div class="fill-dark-2">
						<div class="h2 strong text-light-0">The only <span class="text-red-1">all 3BHK</span> apartment development</div>
						<div class="h3 text-red-1">in the Sarjapur Road vicinity.</div>
					</div>
				</div>
				<div class="columns small-12 large-9">
					< - insert map texture - > 
				</div>
				<div class="columns small-12 large-3">
					<div class="row">

					</div>
					<div class="text-light-0"><span class="h4 text-red-1">6 km</span><br> from Ecospace on the ORR</div>
					<div class="text-light-0"><span class="h4 text-red-1">10 min</span><br> drive to Wipro Head Office</div>
					<div class="text-light-0"><span class="h4 text-red-1">9 km</span><br> before Electronic City</div>
					<div class="text-light-0"><span class="h4 text-red-1">10 min</span><br> to Hosa Road Metro Station</div>
				</div>
			</div>
		</div>
	</section>
		
	<section class="section-height">
		<pre>
			Optimal work commutes
		</pre>
	</section>
		
	<!-- Footer Section -->
	<section class="fill-light-1 block-space-top-bottom">
		<div class="row">
			<div class="container">
				<div class="columns small-12">
					<div class="h2 strong text-neutral-1">Quick Links</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="columns small-6 large-3">
					<div class="h4 text-dark-1">Island 3BHK</div>

					<div><a class="p text-red-1" href="">Floorplan</a></div>
					<div><a class="p text-red-1" href="">Masterplan</a></div>
					<div><a class="p text-red-1" href="">Amenities</a></div>
					<div><a class="p text-red-1" href="">Specifications</a></div>
					<div><a class="p text-red-1" href="">Location</a></div>
				</div>
				<div class="columns small-6 large-3">
					<div class="h4 text-dark-1">Plush 3BHK</div>

					<div><a class="p text-red-1" href="">Floorplan</a></div>
					<div><a class="p text-red-1" href="">Masterplan</a></div>
					<div><a class="p text-red-1" href="">Amenities</a></div>
					<div><a class="p text-red-1" href="">Specifications</a></div>
					<div><a class="p text-red-1" href="">Location</a></div>
				</div>
				<div class="columns small-6 large-3">
					<div class="h4 text-dark-1">Elevate 3BHK</div>

					<div><a class="p text-red-1" href="">Floorplan</a></div>
					<div><a class="p text-red-1" href="">Masterplan</a></div>
					<div><a class="p text-red-1" href="">Amenities</a></div>
					<div><a class="p text-red-1" href="">Specifications</a></div>
					<div><a class="p text-red-1" href="">Location</a></div>
				</div>
				<div class="columns small-6 large-3">
					<div class="h4 text-dark-1">Project Office</div>

					<div class="p">
						Sy No.34/9 - 34/13, Junnasandra, Varthur, 
						Near Amritha College Of Engineering,
						Bangalore - 560 035.
					</div>
					<div><a class="p text-red-1" href="tel:+919663396887">+91–96633–96887</a></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="columns small-12">
					< - Seyonii Badge - >
				</div>
			</div>
		</div>
	</section>
		
	<section class="fill-light-2">
		<div class="row">
			<div class="container block-space-top-bottom">
				<div class="columns small-12">
					<small>
						<span class="text-red-1">DISCLAIMER :</span> The content mentioned on this website is for general information purposes only. While enough care is taken by Klassik Enterprises Pvt Ltd to ensure that information on the website is up to date, accurate and correct, readers are requested to make their independent enquiry before relying upon the same. In no event will Klassik Enterprises offer any warranty on the information made available, or be liable for any loss or damage including without limitation, indirect or consequential loss or damage in connection with, the use of information in this website. By using or accessing the website, you agree with the Disclaimer without any qualification or limitation. Design, specifications, floor plans, brochures, 360 degree views and interactive plans etc., are subject to change without prior notice. Computer generated images; walkthroughs and render images are the artist’s impression and are an indicative of the actual designs. The contents of this website are meant to provide information to the readers of this website about ourselves including our various projects, etc. They are only for general information and are subject to change. By no stretch of imagination, the information on the website shall be construed as an advertisement and/or invitation or offer for sale. To find out more about projects/developments, please call 9663-396-887 or visit our sales office during working hours and get in touch with authorized Klassik Enterprises sales representative.
					</small>
				</div>
			</div>
		</div>
	</section>


	<!-- Lazaro Signature -->
	<?php lazaro_signature(); ?>
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

<?php lazaro_disclaimer(); ?>









<!-- JS Modules -->
<!-- <script type="text/javascript" src="/js/modules/device-charge.js"></script> -->
<script type="text/javascript" src="/js/modules/pageless.js"></script>
<script type="text/javascript" src="/js/modules/video_embed.js"></script>
<script type="text/javascript" src="/js/modules/modal_box.js"></script>
<script type="text/javascript" src="/js/modules/smoothscroll.js"></script>
<script type="text/javascript" src="/js/modules/form.js"></script>
<script type="text/javascript" src="/js/modules/disclaimer.js"></script>

<script type="text/javascript">

// JAVASCRIPT GOES HERE
$(document).ready(function(){
});

</script>

<!-- Other Modules -->
<?php // require __DIR__ . '/inc/can-user-hover.php' ?>


</body>

</html>
