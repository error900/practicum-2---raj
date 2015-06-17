
<?php
$name = Input::get('name');
$email = Input::get ('email');
$contact_number = Input::get ('contact_number');
$subject = Input::get ('subject');
$message = Input::get ('message');
date_default_timezone_set('Asia/Manila');
$date_time = date("F j, Y, g:i A");
$userIpAddress = Request::getClientIp();
?> 

<p><strong style="color: #777;">Name:</strong>		{{ $name }}</p>
<p><strong style="color: #777;">Email Address:</strong>		{{ $email }}</p>
<p><strong style="color: #777;">Contact #:</strong>		{{ $contact_number }}</p>
<p><strong style="color: #777;">Subject:</strong>		{{ $subject }}</p>
<p><strong style="color: #777;">Message:</strong>		{{ $message }}</p>
<p><strong style="color: #777;">Date:</strong>		{{ $date_time }}</p>
<p><strong style="color: #777;">Sender's IP address:</strong>		{{ $userIpAddress }}</p>
