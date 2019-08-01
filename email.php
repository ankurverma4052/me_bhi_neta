<?php
if(isset($_POST['emailsub']))
	{
		$firstname = $_POST['first_name'];
		$secondname = $_POST['lastname'];
		$mobile = $_POST['phone_number'];
		$email = $_POST['email'];
		$jobprofile = $_POST['jobpro'];
		$currentcom = $_POST['current_company'];
		$potfolio_url = $_POST['potfolio_url'];
		$other_website = $_POST['other_website'];
		$message_career = $_POST['message_career'];




		$flags = 'style="display:none;"';

        //Deal with the email
        $to = 'prem@sapsterit.com';
        $subject = 'Applying for job';

        $mess = strip_tags($_POST['message_career']);
        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['resume']['tmp_name'])));
        $filename = $_FILES['file']['name'];

        $message1 = "name:$firstname." ".$secondname \t\t\t  email:$email \t\t\t contact: $mobile \n\n applying for :$jobprofile \t\t Experience : $exprience \n\n Current Company: $currentcom \t\t\n\n $mess \n\n " ;


        $boundary =md5(date('r', time())); 

        $headers = "From: sapsterit.com \r\nReply-To: sapsterit.com";
        $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

        $message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

 $message1
--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";

       if(mail($to, $subject, $message, $headers))
        {
     //     if($autoResponse === true){
    	// 	mail($email, $autoResponseSubject, $autoResponseMessage, $autoResponseHeaders);
    	// }
          session_start();
         $_SESSION['msg']="Thanks for contacting us.";
         
        }

    }
header("location:career.php");

?>