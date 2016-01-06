function changeUserType(){

	document.getElementById('extraInfo').style.display = (document.getElementById('user_typeId').value == 5)? 'none' : 'block';
	document.getElementById('forOrg').style.display = (document.getElementById('user_typeId').value == 5)? 'block' : 'none';

}