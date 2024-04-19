<?php 
require_once("model/model.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class controller extends model 
{
    public function __construct()
    {
        // parent:: __construct()
        parent:: __construct();
        // manage all chefs add by admin in users panel
         $shwchefdetails=$this->joindata('tbl_addchef','tbl_chefposition','positions','tbl_addchef.positionid=tbl_chefposition.positionid'); 
        //display food category on food menu from admin
        $foodcat=$this->selectalldata('tbl_addfoodcategory');
        // create customer account data
        if(isset($_POST["reg"]))
        {  
         
            date_default_timezone_set("Asia/Calcutta");
            // upload photo
            $tmp_name=$_FILES["img"]["tmp_name"];
            $type=$_FILES["img"]["type"];
            $size=$_FILES["img"]["size"]/1024;
            $path="uploads/customers/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);
            $name=$_POST["name"];
            $email=$_POST["email"];
            $pass=base64_encode($_POST["pass"]);
            $cpass=base64_encode($_POST["cpass"]);
            $phone=$_POST["phone"];
            $add=$_POST["address"];
            $date=date("d/m/Y H:i:s a");
               
            try {

                       // sending thanks note in email address applied php mailer
              require 'PHPMailer/Exception.php';
              require 'PHPMailer/PHPMailer.php';
              require 'PHPMailer/SMTP.php';  
                $mail = new PHPMailer(true); 
                //Server settings
                $mail->SMTPDebug = true;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'bkpandey.pandey@gmail.com';                     //SMTP username
                $mail->Password   = 'alvs okva cacm zrja';                               //SMTP password
                $mail->SMTPSecure ="TLS";            //Enable implicit TLS encryption
                $mail->Port       = 587; //465                                    //TCP port to 
                //Recipients
                $mail->setFrom('bkpandey.pandey@gmail.com', 'set from');
                $mail->addAddress($_POST["email"], 'Recciepeint');
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Thanks for created account with Neha Yummy Mummy Resturents will promiss provides Best Foods';
                $mail->Body    = "<center><b><img src='https://media-cdn.tripadvisor.com/media/photo-s/19/80/3a/57/yummy.jpg' style='width:50%; height:300px'></b>
                <br><br>
                $name <br/>
                Hey There is the FB yummy Mummy, <br>
                Its' The FB Yoummy Mummy Thanks for creating your account with Us we will promises to delivred Best Yummy Food Please Visit at once time in Our resturents
                <br><br>
                <p><b>Resturents Address : <b> 1st Floor, Aditya Complex, Jalaram 2 Street Number 2, above Sbi Bank, <br> nr. Indira Circle, Jala Ram Nagar, Rajkot, Gujarat 360005</p>
                                
                <p><b><p>Hours : <b> <span style='color:green'>Open.</span>closes 7:30pm</p>
                
                <p><b><p>Call us  : <b> <span style='color:green'>(+91)9714883187</span></p>
                </center>";

                
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          
                $data=array("photo"=>$path,"name"=>$name,"email"=>$email,"password"=>$pass,"phone"=>$phone,"address"=>$add,"register_date_time"=>$date);
                $chk=$this->insertalldata('tbl_customer',$data);
                $mail->send();
                
            if($chk)
            {
               
                echo "<script>
                alert('Thanks for create account with Us')
                window.location='./login';
                </script>";
            }
            
        }
    catch (Exception $e) 
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
       
            

}        
   
    

        // customer login
        if(isset($_POST["login"]))
        {
            $em=$_POST["email"];
            $pass=base64_encode($_POST["pass"]);
            $log=$this->login('tbl_customer',$em,$pass);
            if($log)
            {
                echo "<script>
                alert('Your are Logged in Successfully')
                window.location='./';
                </script>";
           
            }
            else 
            {
                echo "<script>
                alert('Your email and password are Incorrect try again')
                window.location='./login';
                </script>";
           
            }

        }

        // logout here as customers
        if(isset($_GET["logouthere"]))
        {

            $lg=$this->logout();
            if($lg)
            {
                echo "<script>
                alert('Your are successfully Logout')
                window.location='./';
                </script>";
           
            }

        }
         // load template
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;
                case '/about-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("about-us.php");
                    require_once("footer.php");
                    break;
                case '/our-menu':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("menu.php");
                    require_once("footer.php");
                    break;
                case '/our-events':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("events.php");
                    require_once("footer.php");
                    break;
                case '/our-chefs':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("chefs.php");
                    require_once("footer.php");
                    break;

                case '/our-menu-gallery':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("gallery.php");
                    require_once("footer.php");
                    break;
                case '/contact-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("contact.php");
                    require_once("footer.php");
                    break;
                case '/book-appointment':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("book-tables.php");
                    require_once("footer.php");
                    break;

            case '/login':
                require_once("index.php");
                require_once("header.php");
                require_once("signin.php");
                require_once("footer.php");
                break;

            case '/register':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("signup.php");
                    require_once("footer.php");
                    break;
                default:
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                require_once("footer.php");
                break;
            }
        }

       
    }
}
$obj=new controller;
?>