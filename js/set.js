function takedata1(){
	var webname = document.getElementById('skill_name').value;
	if (webname == "") {
		var x = document.getElementById('err1');
		x.style.display = 'block';
		setTimeout(function(){
			x.style.display = 'none';
		}, 5000);
	}
}