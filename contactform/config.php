<?php

/**
 * REQUIRED SETTINGS
 *
 * You will probably need to change all of these settings for your own site.
 */

// The name and address which should be used for the sender details.
// The name can be anything you want, the address should be something in your own domain. It does not need to exist as a mailbox.
define('CONTACTFORM_FROM_ADDRESS', 'mailer@example.com');
define('CONTACTFORM_FROM_NAME', 'Contact Form on WHOW');

// The name and address to which the contact message should be sent.
// These details should NOT be the same as the sender details.
define('CONTACTFORM_TO_ADDRESS', 'whowsite@gmail.com');
define('CONTACTFORM_TO_NAME', 'Women Helping Other Women');

// The details of your SMTP service, e.g. Gmail.
define('CONTACTFORM_SMTP_HOSTNAME', 'smtp.gmail.com');
define('CONTACTFORM_SMTP_USERNAME', 'whowsite@gmail.com');
define('CONTACTFORM_SMTP_PASSWORD', 'gizsrsokbkvvpwvh');

// The reCAPTCHA credentials for your site. You can get these at https://www.google.com/recaptcha/admin
define('CONTACTFORM_RECAPTCHA_SITE_KEY', '6LevBu0UAAAAAE4Ro6a0M2OEXGVM-oXjhSAxRA2L');
define('CONTACTFORM_RECAPTCHA_SECRET_KEY', '6LevBu0UAAAAAHInl6ZuTl2wrjm-Q2EM3-Hgpn7m');

/**
 * Optional Settings
 */

// The debug level for PHPMailer. Default is 0 (off), but can be increased from 1-4 for more verbose logging.
define('CONTACTFORM_PHPMAILER_DEBUG_LEVEL', 0);

// Which SMTP port and encryption type to use. The default is probably fine for most use cases.
define('CONTACTFORM_SMTP_PORT', 587);
define('CONTACTFORM_SMTP_ENCRYPTION', 'tls');
