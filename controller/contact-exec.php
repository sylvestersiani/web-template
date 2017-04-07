<?php 
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	function clean_data($data){
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = strtolower($data);
		return $data;
	}

	if (!empty($_POST['name'])) {
		if (strlen($_POST['name']) < 3 ) {
			$name_error = 'Please enter full name';
		}
		$name = clean_data($_POST['name']);
	}else{
		$name_error = 'Please supply name'; 
	}

	if (!empty($_POST['email'])) {
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$email = clean_data($_POST['email']);
		}else{
			$email_error = 'Please enter a valid email';
		}
	}else{
		$email_error = 'Please enter your email'; 
	}

	if (!empty($_POST['number'])) {
		if (!preg_match('/^[0-9]+$/', $_POST['number'])) {
			$tel_error = "Please enter a valid number.";
		}else{
			if(strlen($_POST['number']) <= 8) {
				$tel_error = 'Please enter a correct number';
			}else{
				$tel = clean_data($_POST['number']);
			}
		}
	}else{
		$tel_error = 'We need your number to keep in touch.'; 
	}


	if (!empty($_POST['query'])) {
		$query = clean_data($_POST['query']);
	}else{
		$query_error = 'Please supply query'; 
	}

	if (isset($name) && 
		isset($email) && 
		isset($tel) && 
		isset($query)) {

			#formulating the email
	
		$to = 'dmumba89@gmail.com' ;
		$header = "From: $email" . "\r\n";
		$subject = 'IMPORTANT! Email form submition by ' . $name ;
		// putting all input fields in an array so it could be attached within the email
		$body = '<b>Email by:</b> ' . $name . "\n" . '<b>Tel Number </b>' . $tel . "\n\n" . $query. "\n";


		if (mail($to, $subject, $body, $header)) {			
			$confirmation = "We have recieved your email";
			$us = "From: $to" . "\r\n";

			$content = "Hello ". $name ."\n\n" . 
			 			"Thank you for getting in touch with us. This email is to confirm that we have received your email and we will be getting back to you shortly. In the meantime you can keep up with us on twitter https://twitter.com/KwetuCharity." .
			 			"\n\n".
			 			"Kind Regards \n\n". 
			 			"Dalie \n";

            $content = wordwrap($content, 70 );

			if(mail($email,$confirmation,$content,$us)){
				header('location: ./index.php?page=form_success');
			}else {
				$warning = 'oops, something went wrong somewhere';
			}
		}else {
			$warning = 'Sorry there was an issue somewhere';
		}

	}

}
?>