<form action="">



<div class="reg">
    
        
        <form  method="Get">
          <label for=""></label>
          
          <table border="2px"  class="tb1">
          <tr><th><label class=" lab " >SudentName</label>  </th> 
         <td> <input type="text"   name="UserName" class="txt"></td></tr>

           <tr><th> <label class="lab">FatherName </label> </th>
         <td><input type="text"  name="fname"class="txt" ></td></tr>

           <tr><th> <label class="lab">Email</label> </th>
         <td><input type="email"  name="email" class="txt"></td></tr>

            <tr><th> <label class="lab">CNIC</label> </th>
         <td> <input type="Cnic"  name="Cnic"class="txt"></td></tr>

         <tr><td><input type="submit" value="submit"  name="save"class="btn"></td></tr>
            </table>
            
        </form>
        
    </div>
</form>
<style>
    body
{
    margin: 0px;
    padding: 0px;
    background-size: cover;
}

.reg
{
    width: 450px;
    padding: 20px;
    color: black;
    background-color: blueviolet;
    
}

.tb1
{
    width: 400px;
    padding: 10px;
    border-radius: 20px;
    background-color: blueviolet;

}
.reg input
{
  display: block;
    width: 100%;
    padding-left: 10px;
    height: 40px;
    font-family: UserName;
    font-size: 14px;
    
    
    
}

.txt
{
    margin: 20px 0px;
    text-align: center;
    color: black;
}
.btn
{
    margin-top: 60px;
    margin-bottom: 20px;
    background: brown;
    color:white;
    border-radius: 10px;
    cursor: pointer;
   
    
}



.tb2{
    width: 500px;
    padding: 50px;
    text-align: center;
    height: 500px;
    background-color: coral ;
   
    }
</style>
<table border="5px" class="tb2">
<?php


if(isset($_GET['save'])){
    
$name=$_GET['UserName'];
$fname=$_GET['fname'];
$email=$_GET['email'];
$cnic=$_GET['Cnic'];

echo "<tr><th>SudentName</th><td> $name   </td></tr>";
echo "<tr><th>FatherName</th><td> $fname </td></tr>";
echo "<tr><th>Email</th><td> $email </td></tr>";
echo "<tr><th>Cnic</th><td> $cnic </td></tr>";

}

  
?>
</table>