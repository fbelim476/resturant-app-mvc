<?php
error_reporting(0);
require_once("model/adminmodel.php");
class admincontroller extends adminmodel 
{
    public function __construct()
    {
        // load a admin dashboard
        parent:: __construct();
        // fetch all chefs positions inside of add chefs in admin
        $chefposition=$this->selectalldata('tbl_chefposition');
        // add chefs details via admin 
        if(isset($_POST["add_chef"]))
        {
            // file upload or image upload
            $tmp_name=$_FILES["img"]["tmp_name"];
            $path="uploads/chefs/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);
            $name=$_POST["chefname"];
            $position=$_POST["positions"];
            $desc=$_POST["descriptions"];
            $add=$_POST["address"];
            $data=array("photo"=>$path,"name"=>$name,"positionid"=>$position,"descriptions"=>$desc,"address"=>$add);
            $chk=$this->insertalldata('tbl_addchef',$data);
            if($chk)
            {
                echo "<script>
                alert('Chefs data added successfully')
                window.location='./addchefs';
                </script>";
            }   
        }
        // manage chef details and join tables
        $shwchefdetails=$this->joindata('tbl_addchef','tbl_chefposition','positions','tbl_addchef.positionid=tbl_chefposition.positionid'); 
        // admin login here
        if(isset($_POST["admin_login"]))
        {
            $em=$_POST["email"];
            $pass=$_POST["password"];
            $chk=$this->adminlogin('tbl_admin',$em,$pass);
            if($chk)
            {
              echo "<script>
              alert('You are Logged In successfully')
              window.location='./admin-dashboard';
              </script>";
            }
            else 
            {
                echo "<script>
              alert('Your email and password are Incorrect try again')
              window.location='./';
              </script>";

            }
        }

        // add food category
        if(isset($_POST["add_category"]))
        {
            $catname=$_POST["foodcategoryname"];
            $data=array("foodcategoryname"=>$catname);
            $chk=$this->insertalldata('tbl_addfoodcategory',$data);
            if($chk)
            {
                echo "<script>
                alert('Food Category data added successfully')
                window.location='./addfood-category';
                </script>";
            }   
        }

        // admin logout logic 
        if(isset($_GET["adminlogout"]))
        {
            $id=$_GET["adminlogout"];
            $chk=$this->logout();
            echo "<script>
            alert('You are successfully Logout')
            window.location='./';
            </script>";
        }
        // load admin server path
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("login.php");
                    break;

                case '/admin-dashboard':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("dashboard.php");
                    require_once("footer.php");
                break;
                case '/manage-customer':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("manage-customer.php");
                    require_once("footer.php");
                    break;

                case '/addchefs':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addchefs.php");
                    require_once("footer.php");
                    break;
                    
                case '/manage-chefs':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("manage-chefs.php");
                    require_once("footer.php");
                    break;

                    
                case '/addfood-category':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addfoodcategory.php");
                    require_once("footer.php");
                    break;
                    
                case '/manage-foodcategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("manage-foodcategory.php");
                    require_once("footer.php");
                    break;

                case '/add food':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("add food.php");
                    require_once("footer.php");
                    break;

                case '/manage food category':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("manage food.php");
                    require_once("footer.php");
                    break;
            
        
    
                default:   
                require_once("index.php");
                require_once("404.php");
                break;
            }

        }
    }
} 

$obj=new admincontroller;
?>