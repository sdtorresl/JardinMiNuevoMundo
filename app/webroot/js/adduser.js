function showRegisterCode() {
	if($("select#UserRole").val() == 'student') {
		$('#registerCode').show();
		$('#UserRegisterCode').attr('type', 'input');
	}
	else {
		$('#registerCode').hide();
		$('#UserRegisterCode').attr('type', 'hidden');
	}
}

$(function() { 
	showRegisterCode();
});