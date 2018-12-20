
( function ( $ ) {









/* -/-/-/-/- CODE STARTS HERE -/-/-/-/- */

/*
 *
 * Wire in the phone country code UI
 *
 */
$( document ).on( "change", ".js_phone_country_code", function ( event ) {
	var $countryCode = $( event.target );
	var countryCode = "(" + $countryCode.val().replace( /[^+0-9]/g, "" ) + ")";
	$countryCode
		.closest( "form" )
		.find( ".js_phone_country_code_label" )
		.val( countryCode );
} );

/*
 *
 * Register all the phone traps
 *
 */
/* -- Enquiry form -- */
var $enquiryFormSite = $( "[ data-loginner = 'Enquiry' ]" );
Loginner.registerLoginPrompt( "Enquiry", {
	onTrigger: function ( event ) {
		$( ".js_enquiry_form" ).addClass( "hidden" );
		$enquiryFormSite
			.find( ".loginner_form_phone" )
				.removeClass( "hidden" )
				.find( ".js_phone_number" )
					.get( 0 ).focus();
	},
	onPhoneValidationError: function ( message ) {
		__OMEGA.utils.notify( message, {
			level: "error",
			context: "Login Prompt"
		} );
		console.log( message )
	},
	onPhoneSend: function () {
		$( this ).find( "[ type = submit ] span" ).text( "Sending" );
	},
	onShowOTP: function ( domPhoneForm, domOTPForm ) {
		$( domPhoneForm ).addClass( "hidden" );
		$( domOTPForm ).removeClass( "hidden" );
	},
	onOTPSend: function () {
		$( this ).find( "[ type = submit ] span" ).text( "Sending" );
	},
	onPhoneError: function ( code, message ) {
		__OMEGA.utils.notify( message, {
			level: "error",
			context: "Login Prompt"
		} );
		console.log( message )
		$( this ).find( "[ type = submit ] span" ).text( "Send" );
		$( this ).find( "input, select, button" ).prop( "disabled", false );
	},
	onOTPError: function ( code, message ) {
		__OMEGA.utils.notify( message, {
			level: "error",
			context: "Login Prompt"
		} );
		$( this ).find( "[ type = submit ] span" ).text( "Send" );
		$( this ).find( "input, select, button" ).prop( "disabled", false );
	},
	onOTPVerified: function ( context, phoneNumber ) {
		var url = "user/new/" + context.toLowerCase().replace( /[\s|]+/g, "-" );
		__OMEGA.utils.trackPageVisit( url );
	},
	onLogin: function ( user, context ) {

		$( this )
			.find( "input, select, button" )
			.prop( "disabled", true )

		__OMEGA.utils.trackPageVisit( url );

		// Show and Submit the underlying Enquiry form
		$( this ).addClass( "hidden" );
		$( ".js_enquiry_form" )
			.removeClass( "hidden" )
			.trigger( "submit" );

	}
} );


/* -- Brochure -- */
var $brochureFormSite = $( "[ data-loginner = 'Brochure' ]" );
Loginner.registerLoginPrompt( "Brochure", {
	onTrigger: function ( event ) {
		$brochureFormSite
			.find( ".js_get_brochure" )
			.addClass( "hidden" );

		$brochureFormSite
			.find( ".loginner_form_phone" )
				.removeClass( "hidden" )
				.find( ".js_phone_number" )
					.get( 0 ).focus();
	},
	onPhoneValidationError: function ( message ) {
		__OMEGA.utils.notify( message, {
			level: "error",
			context: "Login Prompt"
		} );
		console.log( message )
	},
	onPhoneSend: function () {
		$( this ).find( "[ type = submit ] span" ).text( "Sending" );
	},
	onShowOTP: function ( domPhoneForm, domOTPForm ) {
		$( domPhoneForm ).addClass( "hidden" );
		$( domOTPForm ).removeClass( "hidden" );
	},
	onOTPSend: function () {
		$( this ).find( "[ type = submit ] span" ).text( "Sending" );
	},
	onPhoneError: function ( code, message ) {
		__OMEGA.utils.notify( message, {
			level: "error",
			context: "Login Prompt"
		} );
		console.log( message )
		$( this ).find( "[ type = submit ] span" ).text( "Send" );
		$( this ).find( "input, select, button" ).prop( "disabled", false );
	},
	onOTPError: function ( code, message ) {
		__OMEGA.utils.notify( message, {
			level: "error",
			context: "Login Prompt"
		} );
		$( this ).find( "[ type = submit ] span" ).text( "Send" );
		$( this ).find( "input, select, button" ).prop( "disabled", false );
	},
	onOTPVerified: function ( context, phoneNumber ) {
		var url = "user/new/" + context.toLowerCase().replace( /[\s|]+/g, "-" );
		__OMEGA.utils.trackPageVisit( url );
	},
	onLogin: function ( user, context ) {

		$( this )
			.find( "input, select, button" )
			.prop( "disabled", true )

		// Show and Submit the underlying Brochure download button
		$( this ).addClass( "hidden" );
		$brochureFormSite
			.find( ".js_get_brochure" )
			.removeClass( "hidden" );

	}
} );

/* -/-/-/-/- CODE ENDS HERE -/-/-/-/- */









}( jQuery ) );
