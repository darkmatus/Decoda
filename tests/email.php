
<h2>Email</h2>

<?php $string = 'Valid emails:
email@domain.com (auto-linked with hook)
[email]email@domain.com[/email]
[email="email@domain.com"]Send me an email![/email]

Invalid emails:
email@domain
[email]email@domain[/email]
[email="email@domain"]Send me an email![/email]';
$code = new Decoda($string);
echo $code->parse(); ?>

<h2>Mail</h2>

<?php $string = 'Valid emails:
email@domain.com (auto-linked with hook)
[mail]email@domain.com[/mail]
[mail="email@domain.com"]Send me an email![/mail]

Invalid emails:
email@domain
[mail]email@domain[/mail]
[mail="email@domain"]Send me an email![/mail]';
$code = new Decoda($string);
echo $code->parse(); ?>

<h2>Email <span>with shorthand</span></h2>

<?php $string = 'email@domain.com (auto-linked with hook)
[email]email@domain.com[/email]
[email="email@domain.com"]Send me an email![/email]';
$code = new Decoda($string);
$code->useShorthand();
echo $code->parse(); ?>