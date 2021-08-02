$errors = '';
$myemail = 'GooglyPower+contact@gmail.com';
if(empty($_POST['message']))
{
    $errors .= "\n Error: message is required";
}

$message = $_POST['message']; 

if( empty($errors))
{
    $to = $myemail;

    $email_subject = "Contact form submission";

    $email_body = "You have received a new message. ".

    " Here are the details:\n ".

    " Message \n $message";

    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email_address";

    mail($to,$email_subject,$email_body,$headers);

    //redirect to the 'thank you' page

    header('Location: thank-you.html');
}