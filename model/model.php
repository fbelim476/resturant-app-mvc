<?php 
class model
{
     // database connection variables
     public $con="";
     public function __construct()
     {
         session_start();
         // database connection
         // exceptions handeling
         try 
         {
            // localhost
              $this->con=new mysqli("localhost","root","","mvcmyappdb");
            //server connection
            // $this->con=new mysqli("sql313.byethost7.com","b7_35171102","n123456","b7_35171102_mvcmyappdb");
             // echo "connected successfully";
         }
         catch(Exception $e)
         {
             die(mysqli_error($this->con));
         }
        
    }
    //  create a member function for select all data
    public function selectalldata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->con,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
        }

    //create a member function for display chef data from admin
    public function joindata($table,$table1,$column,$where)
    {
        $select="select $table.*,$column from $table join $table1 on $where";
        $exe=mysqli_query( $this->con,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }  
   // add or insert all data
   public function insertalldata($table,$data)
   {
       // convert $data array as key
       $column=array_keys($data);
       $column1=implode(",",$column);

       // convert $data array as value
       $value=array_values($data);
       $value1=implode("','",$value);

       $insert="insert into $table($column1) values('$value1')";
       $exe=mysqli_query($this->con,$insert);
       return $exe;

   }   
    // create a member function for login 
    public function login($table,$em,$pass)
    {
    //    echo  $select="select * from $table where email='$em' and password='$pass'"; exit();
       $select="select * from $table where email='$em' and password='$pass'";
        $exe=mysqli_query($this->con,$select);
        $fetch=mysqli_fetch_array($exe);
        $num_rows=mysqli_num_rows($exe);
        if($num_rows>0)
        {
            $_SESSION["customerid"]=$fetch["customerid"];
            $_SESSION["email"]=$fetch["email"];
            $_SESSION["name"]=$fetch["name"];
            return true;
        }
        else 
        {
            return false;
        }
    }
    // create a member function for logout
     public function logout()
     {
        unset($_SESSION["customerid"]);
        unset($_SESSION["email"]);
        unset($_SESSION["name"]);
        session_destroy();
        return true;
     } 


}
?>