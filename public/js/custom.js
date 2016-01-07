function changeUserType(){
<<<<<<< HEAD
	document.getElementById('organizationInfo').style.display = (document.getElementById('user_typeId').value == 5)? 'block':'none';
=======

>>>>>>> ccf8bd3e9f413f5de36b37cd25baac87f310795c
	document.getElementById('extraInfo').style.display = (document.getElementById('user_typeId').value == 5)? 'none' : 'block';
	document.getElementById('forOrg').style.display = (document.getElementById('user_typeId').value == 5)? 'block' : 'none';

}