function SendEmail(){
	$.ajax({
		type: "POST",
		url: "http://kompika.ru/faemail.php",
		data: 'name='+$('#name').val()+'&tel='+$('#tel').val()+'&now='+$('#now').prop( "checked" )+'&later='+$('#later').prop( "checked" )+'&month='+$('#month option:selected').text()+'&day='+$('#day option:selected').text()+'&hour='+$('#hour option:selected').text()+'&minute='+$('#minute option:selected').text(),
		success: function(data){
			alert(data);
		}

	});
};