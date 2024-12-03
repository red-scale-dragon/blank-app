<?php

return [
	/*
	 |--------------------------------------------------------------------------
	 | Ignore Error Messages
	 |--------------------------------------------------------------------------
	 |
	 | Sometimes WP or a 3rd-party plugin or theme will give a warning that gets
	 | converted by the Dragon Framework into an exception. In the dev environment
	 | These will trigger Spatie Ignition to take over the screen and show the
	 | stack trace. In production, Spatie Ignition isn't used, and the errors
	 | just get logged.
	 |
	 | To get rid of errors that you have no control over while developing your
	 | plugin, set the error messages here so Spatie won't block you from doing
	 | your job. These messages will not be ignored in a production environment.
	 |
	 */
	
	'ignore_messages' => [
		//
	],
];
