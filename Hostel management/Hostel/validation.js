
	function fname(){
	
	 var val_fname= /^[A-Za-z]+$/;
	 $f_name= document.getElementById('f_name').value;
	
	 if(!val_fname.test($f_name)){
     
      alert("First Name Must be Alphabets Only");
	   document.getElementById('f_name').value='';
	   $("#f_name").focus();
      return false;
    }
	
}

	function lname(){
	
	 var val_fname= /^[A-Za-z]+$/;
	 $l_name= document.getElementById('l_name').value;
	
	 if(!val_fname.test($l_name)){
     
      alert("Last Name Must be Alphabets Only");
	   document.getElementById('l_name').value='';
	   $("#l_name").focus();
      return false;
    }
	
}

	function house_name(){
	
	 var house_name= /^[A-Za-z]+$/;
	 $h_name= document.getElementById('h_name').value;
	
	 if(!house_name.test($h_name)){
     
      alert("House Name Must be Alphabets Only");
	   document.getElementById('h_name').value='';
	   $("#h_name").focus();
      return false;
    }
	
}

function ftname(){
	
	 var f_name= /^[A-Za-z]+$/;
	 $ft_name= document.getElementById('father_name').value;
	
	 if(!f_name.test($ft_name)){
     
      alert("Father's Name Must be Alphabets Only");
	   document.getElementById('father_name').value='';
	   $("#father_name").focus();
      return false;
    }
	
}

function phone(){
	
	  var val_phone= /^[0-9]{9,12}$/;
	 $mobile= document.getElementById('Mobile').value;
	
	 if(!val_phone.test($mobile)){
     
      alert("enter valid phone number");
	   document.getElementById('Mobile').value='';
	   $("#Mobile").focus();
      return false;
    }
	
}

function Hsname(){
	var val_hsname= /^[A-Za-z]+$/;
		$hus_name= document.getElementById('hus_name').value;
		
		if(!val_hsname.test($hus_name)){
     
	alert("Enter husband name");
	document.getElementById('hus_name').value='';
	$("#hus_name").focus();
	return false;
					}
			 }
	


