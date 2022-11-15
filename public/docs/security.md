# Security Features

SmartAdmin PHP comes with built-in Security features that follows industry standard. This includes, but not limited to, 2FA and Account Verifications.
With a flexible library, you can implement your own or use them out of the box.

This feature requires your database configured. Please follow the [database installation guide](docs_general.php#database) to get started.

## The `verifications` table

This table holds any types of "verification" information requested by a user. This includes validations, responses, delivery methods, etc.
This also helps you audit user activity for security purposes.

### Types

Below are the current `verification_types` that the template provides:
- Password Reset (coming soon)
- [Email or Account Verification](php_security_email_verify.php)
- [Phone Verification](php_security_phone_verify.php) (requires 3rd party e.g. `Twilio`)
- [Two-Factor Auth](php_security_2fa.php) (demo support "email" method only)

## Usage

### Delivery

To start the process of verification, you need to first create a `Verification` record for the user.
The `\Models\User` comes with the built-in method to do this by passing the `type`, `to` and `method` as arguments:

```php
// note that we are in the authenticated user context
$verification = $_user->createVerification(\Models\Verification::TYPE_EMAIL, $_user->email, \Models\Verification::METHOD_EMAIL);
```

And then initiate delivery of the request:
```php
$verification->deliver();
```

### Activation

Once the user received the message and entered the "code", you would need to validate and verify it. For email/account verification, this is the equivalent of a `token`.

```php
// get the previously sent verification
$verification = $_user->getVerification(\Models\Verification::TYPE_EMAIL);
if ($verification && $verification->validate($_user)) {
	try {
		// the entered code by the user from a form, for example
		$code = get('code', $_POST);
		$verified = $verification->verify($code);

		if ($verified) {
			// redirect somewhere for a successful verification
			redirect(APP_URL.'/home');
		} else {
			throw new Exception('Failed to verify the input code');
		}

	} catch (Exception $ex) {

		// use to debug
		$error = $ex->getMessage();
		echo 'The code is invalid. Please try again.';
	}

} else {
	// the verification expired or not yet created
	// you can re-send by creating another verification record
}
```

## Phone Verifications

SmartAdmin PHP uses [Twilio Verify API](https://www.twilio.com/docs/verify/api) for phone and mobile verification. You can setup your Twilio credentials in the `.env` [file](docs_general.php#configuration).

```ini
TWILIO_ACCOUNT_SID=***
TWILIO_AUTH_TOKEN=***

TWILIO_VERIFY_SERVICE_ID=***
TWILIO_2FA_SERVICE_ID=***
```