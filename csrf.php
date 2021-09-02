<?php
function createtoken()
{
	$token=base64_encode(openssl_random_pseudo_bytes(324));
	$_SESSION['csrfvalue']=$token;
	return $token; }
	function unsettoken()
{
	unset($_SESSION['csrfvalue']);
}	
function validation()
{
	$csrfvalue = isset($_SESSION['csrfvalue']) ? $_SESSION['csrfvalue']:''; if (isset($_POST['csrf_name']))
	{
		$value_input=$_POST['csrf_name'];
		if ($value_input==$csrfvalue) 
		{
		  
		  unsettoken();
		  return true;		  
	
		}else{

			unsettoken();
			return false;

		}	
		}else{
			unsettoken();
			return false;
		}

	}
?>
