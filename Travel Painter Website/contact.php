<!DOCTYPE HTML>
<html>

<head>
  <title>ABDUL RAHMAN RAHIM - Travel Painter</title>
  <meta name="description" content="Abdul Rahman Rahim is a travel painter who loves to paint landscapes." />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  

  <style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
  </style>
</head>

<body>
  <div id="main">
     <?
   	   include ("header.php");
     ?>
    
    

      <div id="content">
       
        <div id="content_item">
          <h1>Contact Us</h1>
          <p>If you have enquiries on any paintings, Please feel free to contact me any time using form below or phone:</p>
          <p> +603- 6551 0654 <br /> +6012- 694 2855 </p>
          <table>
<tr>
          <td>
          <?php
            // This PHP Contact Form is offered &quot;as is&quot; without warranty of any kind, either expressed or implied.
            // David Carter at www.css3templates.co.uk shall not be liable for any loss or damage arising from, or in any way
            // connected with, your use of, or inability to use, the website templates (even where David Carter has been advised
            // of the possibility of such loss or damage). This includes, without limitation, any damage for loss of profits,
            // loss of information, or any other monetary loss.

            // Set-up these 3 parameters
            // 1. Enter the email address you would like the enquiry sent to
            // 2. Enter the subject of the email you will receive, when someone contacts you
            // 3. Enter the text that you would like the user to see once they submit the contact form
            $to = 'mehran.ranjbar.s@gmail.com';
            $subject = 'Enquiry from the travel-painter.com website';
            $contact_submitted = 'Your message has been sent.';

            // Do not amend anything below here, unless you know PHP
            function email_is_valid($email) {
              return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
            }
            if (!email_is_valid($to)) {
              echo '<p style="color: red;">You must set-up a valid (to) email address before this contact page will work.</p>';
            }
            if (isset($_POST['contact_submitted'])) {
              $return = "\r";
              $youremail = trim(htmlspecialchars($_POST['your_email']));
              $yourname = stripslashes(strip_tags($_POST['your_name']));
              $yourmessage = stripslashes(strip_tags($_POST['your_message']));
              $contact_name = "Name: ".$yourname;
              $message_text = "Message: ".$yourmessage;
              $user_answer = trim(htmlspecialchars($_POST['user_answer']));
              $answer = trim(htmlspecialchars($_POST['answer']));
              $message = $contact_name . $return . $message_text;
              $headers = "From: ".$youremail;
              if (email_is_valid($youremail) && !eregi("\r",$youremail) && !eregi("\n",$youremail) && $yourname != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer) {
                mail($to,$subject,$message,$headers);
                $yourname = '';
                $youremail = '';
                $yourmessage = '';
                echo '<p style="color: blue;">'.$contact_submitted.'</p>';
              }
              else echo '<p style="color: red;">Please enter your name, a valid email address, your message and the answer to the simple maths question before sending your message.</p>';
            }
            $number_1 = rand(1, 9);
            $number_2 = rand(1, 9);
            $answer = substr(md5($number_1+$number_2),5,10);
          ?>
          <form id="contact" action="contact.php" method="post">
            <div class="form_settings">
              <p><span>Name</span><input class="contact" type="text" name="your_name" value="<?php echo $yourname; ?>" /></p>
              <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="<?php echo $youremail; ?>" /></p>
              <p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"><?php echo $yourmessage; ?></textarea></p>
              <p style="line-height: 1.7em; color: #000000; font-weight: normal;">To help prevent spam, please enter the answer to this question:</p>
              <p><span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ?</span><input type="text" name="user_answer" /><input type="hidden" name="answer" value="<?php echo $answer; ?>" /></p>
              <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
            </div>
          </form>
          
          </td>
          <td>
          </td>
          </tr>
          </table>
     </div>
      </div>
    </div>
    <?
	 include("footer.php");
	 ?>
    
  </div>
 
</body>
</html>
