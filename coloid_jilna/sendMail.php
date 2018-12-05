
                   <?php
					require("/opt/lampp/htdocs/coloid/PHPMailer_5.2.0/class.phpmailer.php");
					require_once('dbConnect.php');
                    //Id ,password and mail extraction
                    $id=$_POST['custId'];
                    $tomailID=$_POST['tomail'];
                    //echo "$id";
                    $result="select Id,password from agentrequest where Id = $id";
                    $res=mysqli_query($con,$result);
                    $num_rows=mysqli_num_rows($res);
                    if($num_rows==0)
                    echo "<h1 style='color:white;'>Something goes wrong!!! Please try again</h1>";
                    else{
                    
                    while($row = mysqli_fetch_array($res)){
                    $getid=$row[0];
                    $getpassword=$row[1];
                    
                            }
                    }
                    //END ID,password and mail extraction


					$mail = new PHPMailer;

					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';
					$mail->SMTPAuth = true;
					$mail->Username = 'enter_your_mail ID';
					$mail->Password = 'your password';
					$mail->SMTPSecure = 'tls';

					$mail->From = 'meanduser@gmail.com';
					$mail->FromName = 'Admin-Kerala Lottery';
					$mail->addAddress($tomailID, 'dear-agent');
					//$mail->addAddress('hameembasith99@gmail.com', 'do-not-reply-lottery');
					
					
					$mail->WordWrap = 50;
					//$mail->AddAttachment("/opt/lampp/htdocs/athira2/doc.pdf");         // add attachments
					$mail->isHTML(true);
                    $body = "Dear Agent, your credentials are:  username = $getid Password = $getpassword"; 
					$mail->Subject = 'Lottery Management : Admin';
                    //$mail->Body    = 'Dear Agent, your credentials are:  username = ';
                    //$mail->Body    =  $getid;
                    //$mail->Body    = 'Password =';
                    $mail->Body    =  $body;
					if(!$mail->send()) {
					   echo 'Message could not be sent.';
					   echo 'Mailer Error: ' . $mail->ErrorInfo;
					   exit;
					}

					echo "<h2>"."Credentials is sent to your mail"."</h2>";
					?> 


       