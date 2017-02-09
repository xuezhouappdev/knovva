<?php
/**
 * Created by PhpStorm.
 * User: xuezhou
 * Date: 2/9/17
 * Time: 1:13 PM
 */

if(isset($_POST['submit'])) {
  $contact_fn = $_POST['contact_fn'];
  $contact_ln = $_POST['contact_ln'];
  $contact_email = $_POST['contact_email'];
  $contact_phone = $_POST['contact_phone'];
  $contact_textarea = $_POST['contact_textarea'];


  $from = $contact_email;
  $to = "test@skyatlasintl.com";
  $subject = "New Question from Prospective Client";



  //header
  $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From:  ' . $contact_fn  . ' <' . $contact_email .'>' . " \r\n" .
      'Reply-To: '.  $contact_email . "\r\n" .
      'X-Mailer: PHP/' . phpversion();


  $message = '<html><body>';
  $message .= '<center>';
  $message .= '<br /><br />';
  $message .= '<h3>Below is the contact info from a prospective client:&nbsp'.$contact_fn.'</h3>';
  $message .= '<table>';
  $message .= '<tr>';
  $message .= '<th>First Name</th>';
  $message .= '<th>Last Name</th>';
  $message .= '<th>Email</th>';
  $message .= '<th>Phone</th></tr>';
  $message .= '<tr>';
  $message .= '<td>'.$contact_fn.'</td>';
  $message .= '<td>'.$contact_ln.'</td>';
  $message .= '<td>'.$contact_email.'</td>';
  $message .= '<td>'.$contact_phone.'</td></tr></table>';

  $message .= '<br /><br />';
  $message .= '<table>';
  $message .= '<tr><th>Message</th><tr>';
  $message .= '<tr><td>'.$contact_textarea.'</td></tr></table>';


  $message .= '_____________________________________<br /><br />';
  $message .= 'Thanks,<br/>Knovva.com IT Support<br/>';
  $message .= '<br/><a target="_new" href="http://www.knovva.com"/>http://www.knovva.com</a>';

  $message .= 'Knovva.com &copy; 2017';
  $message .= '</center>';
  $message .= '</body></html>';







//echo $message;




  //send
  $send = mail($to,$subject,$message,$headers);
  if($send) {
    echo '<br>';
    echo 'Thank you and we will be ith you soon';
  } else {
    echo 'error';
  }

}




