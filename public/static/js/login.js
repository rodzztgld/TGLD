$(function(){
	clickLoginBtn();
	loginForm();
	testa();
});

function clickLoginBtn () 
{
	$('#loginBtn').click(function(e){

		e.preventDefault();

		console.log('clicked login button');

		$('#logo').animate({
			marginBottom: "30%",
			marginTop : "-30%"
		},1000);
		$('#logo').animate({
			marginBottom: "27%",
			marginTop : "-27%"
		},400);

		$('#subLogo').animate({
			opacity: "0"
		},1000);

		$('#loginForm').fadeIn("slow");
	});
}

function loginForm ()
{
	// Hide the error for styling
	$('.error').css('display','none');

	// hide it whne the user is going to fill the form out agin
	$('input').focus(function()
	{
		$('.error').css('display','none');
	});

	$('#loginSubmit').click(function(e)
	{
		e.preventDefault();

		remember = $('.login-remember').is(':checked'); 

		if(remember != true)
		{
			remember_input = '';
		}
		else
		{
			remember_input = 'checked';
		}

		var formData = new FormData;
		formData.append('username', $('.login-username').val());
		formData.append('password', $('.login-password').val());
		formData.append('remember', remember_input);

		$.ajax({
			url:'login',
			method: 'post',
			processData:false,
			contentType: false,
			cache: false,
			dataType: 'json',
			data: formData,
			success:function(data){

				if(!data.success)
				{
					$.each(data.errors,function(index, error){
						$('.error').fadeIn('slow').text(error);
					});
				}
				else
				{
					// What ever I want to do to log them in
				}
			},
			error:function(){}

		});
	});
}

function testa (){

	$('.contact-submit-btn').click(function(){
		$('.letter-block').animate({
			marginTop: '25%',
			marginBottom: '-39.5%'
		});
	});
}