function changeUserType(){
	debugger;
	console.log("TEST");
	document.getElementById('organizationInfo').style.display = (document.getElementById('user_typeId').value == 5)? 'block':'none';
	document.getElementById('extraInfo').style.display = (document.getElementById('user_typeId').value == 5)? 'none' : 'block';
}