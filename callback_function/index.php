<?php
function firstfn($val){
	echo $val;
	if($val=="1"){
	   echo "matched";	
	}
	else {
	   echo "unmatched";	
	} 
}

call_user_func('firstfn', '1');
echo "</br>";
call_user_func('firstfn', '2');
?>