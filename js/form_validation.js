
	function validateName() {
		if($('#name').val() == ""){
			$('#name').addClass('problem');
			$('#error').empty();
			$('#error').append("<p>Please enter your name.</p>");
			return false;
		}
		else{
			$('#name').removeClass('problem');
			$('#error').empty();
			return true;
		}
	}

	function validateAddress() {
		if($('#address').val() == ""){
			$('#address').addClass('problem');
			$('#error').empty();
			$('#error').append("<p>Please enter your address.</p>");
			return false;
		}
		else{
			$('#address').removeClass('problem');
			$('#error').empty();
			return true;
		}
	}
	function validateCity() {
		if($('#city').val() == ""){
			$('#city').addClass('problem');
			$('#error').empty();
			$('#error').append("<p>Please enter your city.</p>");
			return false;
		}
		else{
			$('#city').removeClass('problem');
			$('#error').empty();
			return true;
		}
	}
	function validateState() {
		if($('#state').val() == ""){
			$('#state').addClass('problem');
			$('#error').empty();
			$('#error').append("<p>Please enter your state.</p>");
			return false;
		}
		else{
			$('#state').removeClass('problem');
			$('#error').empty();
			return true;
		}
	}
	
	function validatePhone() {
		var regex = /^(1-?)?(([2-9]\d{2})|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/;
				if(regex.test($('#phone').val())) {
				$('#phone').removeClass('problem');
				$('#error').empty();
				return true;

			}
			else{
				$('#phone').addClass('problem');
				$('#error').empty();
				$('#error').append("<p>Please enter your address.</p>");
				return false;
			}
	}


	function validateEmail() {
		var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(regex.test($('#email').val())) {
				$('#email').removeClass('problem');
				$('#error').empty();
				return true;

			}
			else{
				$('#email').addClass('problem');
				$('#error').empty();
				$('#error').append("<p>Please enter a correct email address.</p>");
				return false;
			}//if
		}//function


	
	function validateCheckBox() {
		if($('#csa-share1').prop('checked') == true || $('#csa-share2').prop('checked') == true || $('#csa-share3').prop('checked') == true){
			$('input[name="csa-share"]').removeClass('problem-checkboxes');
			$('#error').empty();
			return true;
		}
		else {
			$("input[type='checkboxes']").addClass('problem-checkboxes');
			$('#error').empty();
			$('#error').append("<p>Please select 1 or more CSA packages.</p>");
			return false;

		}


	}

	
