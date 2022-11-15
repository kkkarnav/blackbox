# PHP Mailer

SmartAdmin PHP's native email library that supports out-of-the-box templates. You will be using the `\Common\Mailer` library.

## Usage
```php
$mailer = new \Common\Mailer();

$subject = 'Hello there';
$body = 'Hellow world';
$mailer->submit('to@recipient.com', $subject, $body);
```

## Config

The email credentials are configured in the `.env` file. Learn about securing credentials [here](docs_general.php#configuration).
This supports various outgoing method such as **smtp**, **sendmail** and **mail**.

```ini
APP_EMAIL_MAILER=smtp
APP_EMAIL_HOST=YOUR_HOST
APP_EMAIL_PORT=YOUR_PORT
APP_EMAIL_USER=YOOUR_USERNAME
APP_EMAIL_PASSWORD=****
APP_EMAIL_SECURE=ssl
APP_EMAIL=my@email.com
```

## Templates

Templates that are availble for you to use. They are located in `/public/assets/email` folder. You can view how each built-in template looks like [here](php_mailer_templates.php).

- `default.html` - Template used for default notification email
- `2fa.html` - Template used for Two-Factor-Authentication (2FA)
- `verify.html` - Template used for Account verification

These templates are defined in the class as follows:
```php
const TEMPLATE_DEFAULT = 'default';
const TEMPLATE_VERIFY_EMAIL = 'verify';
const TEMPLATE_2FA_CODE = '2fa';
```

### Format Body

To use a template, you need to call `\Common\Mailer::formatBody(..., $template)` method to geneate the content. It should look something like this:

```php
$subject = 'Hello world';
$body = \Common\Mailer::formatBody('Hello there', \Common\Mailer::TEMPLATE_DEFAULT);

$mailer = new \Common\Mailer;
$mailer->submit('to@recipient.com', $subject, $body);
```

## Attachments

`Mailer` also supports attachments. You can pass in single or multiple files during submission.
To send multiple attachments, just pass in an `array` of files. `keys` acts as the filename (optional).

```php
$file_path = '/path/to/my/report.csv';
$mailer->submit('to@recipient.com', $subject, $body, $file_path);
```

## Credits

SmartAdmin uses [PHPMailer/PHPMailer](https://github.com/PHPMailer/PHPMailer) package to handle the mailing functionality.