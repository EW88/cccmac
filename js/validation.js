// JavaScript Document

function checkSalutation(){
	var salutation=document.getElementsByName("salutation");
	var invalid=document.getElementById("salutationInvalid");
	if(!salutation[0].checked && !salutation[1].checked){
		invalid.innerHTML="<span>Please Choose Salutation.</span>";
		invalid.className="show-validation";
		return false;
	}else{
		invalid.className="hide-validation";
		return true;
	}
}

function checkFirstName(){
	var fname=document.getElementById("fname");
	var invalid=document.getElementById("fnameInvalid");
	if(fname.value === "" || fname.value === null){
		invalid.innerHTML="<span>Please Enter First Name.</span>";
		invalid.className="show-validation";
		return false;
	}else{
		invalid.className="hide-validation";
		return true;
	}
}

function checkLastName(){
	var lname=document.getElementById("lname");
	var invalid=document.getElementById("lnameInvalid");
	if(lname.value === "" || lname.value === null){
		invalid.innerHTML="<span>Please Enter Last Name.</span>";
		invalid.className="show-validation";
		return false;
	}else{
		invalid.className="hide-validation";
		return true;
	}
}

function checkEmail(){
	var email=document.getElementById("email");
	var invalid=document.getElementById("emailInvalid");
	var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/
	if(email.value === "" || email.value === null){
		invalid.innerHTML="<span>Please Enter Your Email.</span>";
		invalid.className="show-validation";
		return false;
	}else if(!email.value.match(pattern)){
		invalid.innerHTML="<span>Please Enter a Valid Email.</span>";
		invalid.className="show-validation";
		return false;
	}else{
		invalid.className="hide-validation";
		return true;
	}
}

function checkTerm(){
	var term=document.getElementById("term");
	var invalid=document.getElementById("termlabel");
	if(!term.checked){
		invalid.innerHTML="<span>Please read Terms and Conditions first.</span>";
		return false;
	}else{
		return true;
	}
}

function checkAll(){
	if(checkSalutation() && checkFirstName() && checkLastName() && checkEmail() && checkTerm()){
		alert("You've subscribed our newsletter successfully!");
		return true;
	}else{
		return false;
	}
}