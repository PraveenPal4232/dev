<?php

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$comment=$_POST['comment'];
		
		
		$to='praveenpal4232@gmail.com';
		$subject='A comment from dev blog';
		$msg="Name :" .$name."\n"."Email : ".$email."\n"."Say that : ".$comment."\n";
		$headers="form";
		
		
		if(mail($to,$subject,$msg,$headers))
		{
			echo "Thanks ".$name." We got it. We contact you soon.";
		}
		else
		{
			echo "Something went wrong";
		}
		
	}

?>