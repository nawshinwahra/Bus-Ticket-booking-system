<?php
$con =oci_connect('BUS1','1234','localhost/orcl');
$frist_name = $_POST['frist_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$confi_pass = $_POST['confi_pass'];
$gender = $_POST['gender'];
$tel =$_POST['phone'];
$emailid = $_POST['altemail'];
$question = $_POST['question'];
$ans =$_POST['ans'];


'<br>';

$sql= "INSERT INTO REGISTRATION(frist_name,tel,password,emailid,confi_pass,question,last_name,ans,user_name,gender) values (
'$frist_name','$tel','$password','$emailid','$confi_pass','$question','$last_name','$ans','$user_name','$gender')";

$result=oci_parse($con,$sql);
oci_execute($result);
echo"Succssesfully Booked";
//$sql2="update request set request_no=id.NEXTVAL";
//$result2=oci_parse($con,$sql2);
//oci_execute($result2);


?>