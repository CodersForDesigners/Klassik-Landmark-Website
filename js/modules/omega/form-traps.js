
( function ( $ ) {









/* -/-/-/-/- CODE STARTS HERE -/-/-/-/- */

/*
 *
 * Wire in the phone country code UI
 *
 */
var $enquiryFormSite = $( "[ data-loginner = 'Enquiry' ]" );

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

		var url = "user/new/" + context.toLowerCase().replace( /[\s|]+/g, "-" );
		console.log( url );

		// $( this )
		// 	.find( "[ type = submit ] span" )
		// 	.text( "We'll contact you soon." )
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




/*
 *
 * Enquiry form submission
 *
 */
$( document ).on( "submit", ".js_enquiry_form", function ( event ) {
// $( ".js_enquiry_form" ).on( "submit", function ( event ) {

	/* -----
	 * Prevent the default form submission behaviour
	 * 	which triggers the loading of a new page
	 ----- */
	event.preventDefault();

	var $form = $( event.target );


	/* -----
	 * Disable the form
	 ----- */
	$form.find( "input, select, button" ).prop( "disabled", true );
	$form.find( "[ type = 'submit' ] span" ).text( "Sending" );


	/* -----
	 * Pull the data from the form
	 ----- */
	// name
	$name = $form.find( "[ name = 'name' ]" );
	// email address
	$emailAddress = $form.find( "[ name = 'email' ]" );


	/* -----
	 * Sanitize and Validate the data
	 ----- */
	// Remove any prior "error"s
	$form.find( ".js_error" ).removeClass( "js_error" );
	// name
	if ( ! $name.val().trim() ) {
		$name.addClass( "js_error" );
		alert( "Please provide your name." );
	}
	if ( $emailAddress.val().indexOf( "@" ) == -1 ) {
		$emailAddress.addClass( "js_error" );
		alert( "Please provide a valid email address." );
	}
	// If the form has even one error ( i.e. validation issue )
	// do not proceed
	if ( $form.find( ".js_error" ).length ) {
		$form.find( "input, select, button" ).prop( "disabled", false );
		$form.show();
		return;
	}

	/* -----
	 * Process and Assemble the data
	 ----- */
	var names = $name.val().split( /\s+/ );
	var firstName = names[ 0 ];
	var lastName = names.slice( 1 ).join( " " );
	var emailAddress = $emailAddress.val();

	var _id = __OMEGA.user._id;
	var project = "Klassik Landmark";
	var userData = {
		"First Name": firstName,
		"Last Name": lastName,
		"Email": emailAddress
	}

	/* -----
	 * Store the data on the side
	 ----- */
	__OMEGA.user = Object.assign( __OMEGA.user, {
		firstName: firstName,
		lastName: lastName,
		email: emailAddress
	} );
	__OMEGA.user.name = firstName;
	if ( lastName )
		__OMEGA.user.name += " " + lastName;



	/* -----
	 * Submit the data
	 ----- */
	// Update the user
	__OMEGA.utils.updateUser( _id, project, userData )
		.then( function () {
			// Show a feedback message
			$form.find( "[ type = 'submit' ] span" ).text( "We'll call you shortly." );
			// Hide the form
			// $form.fadeOut();
		} )
		.catch( function ( e ) {
			alert( e.message )
			/* -----
			 * Re-enable the form
			 ----- */
			// $form.find( "[ type = submit ]" ).val( function () {
			// 	return $( this ).data( "initial" );
			// } );
			$form.find( "[ type = submit ] span" ).text( "Send" );
			$form.find( "input, select, button" ).prop( "disabled", false );
			// Show the form
			$form.show();
		} )

} );


/* -/-/-/-/- CODE ENDS HERE -/-/-/-/- */









}( jQuery ) );
