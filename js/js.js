var gender = '';
function boy() {
	$('.submit').addClass('btn-outline-inverse-boy');
	$('.form-control').addClass('form-boy');
	gender = 'boy';
	boyCount += 1;
	numbers();
	boyVote();
}
function girl() {
	$('.submit').addClass('btn-outline-inverse-girl');
	$('.form-control').addClass('form-girl');
	gender = 'girl';
	girlCount += 1;
	numbers();
	girlVote();
}
function numbers() {
	document.getElementById('girl').innerHTML = girlCount;
	document.getElementById('boy').innerHTML = boyCount;
	$('#girl').attr('disabled', 'disabled');
	$('#boy').attr('disabled', 'disabled');
	$('.input-group').fadeTo('slow', 1);
}
function boyVote() {
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","boy.php",true);
	xmlhttp.send();
}
function girlVote() {
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","girl.php",true);
	xmlhttp.send();
}
function voteName() {
	value = document.getElementById('name').value;
	$('#name').attr('disabled', 'disabled');
	$('#btn').attr('disabled', 'disabled');
	var xmlhttp=new XMLHttpRequest();
	var path = "name.php?name=" + value + "&gender=" + gender
	xmlhttp.open("GET",path,true);
	xmlhttp.send();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			$('.submit').addClass('success');
		}
	}
}
