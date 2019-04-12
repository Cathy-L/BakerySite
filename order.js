var total = 0;

function getTotal(){
	total = 0;
	if( $("#macarons").val() % 0.5 != 0){
		window.alert("Please only list whole or half dozens for macarons (0.5, 1, 1.5, etc.)");
	}

	 if( $("#cookies").val() % 0.5 != 0){
                window.alert("Please only list whole or half dozens for cookies (0.5, 1, 1.5, etc.)");
        }

	 if( $("#keylime").val() % 0.5 != 0){
                window.alert("Please only list whole or half dozens for mini pies (0.5, 1, 1.5, etc.)");
        }

	else {
	console.log("button is working");
	total += $("#macarons").val() * 36;
	total += $("#cookies").val() * 20;
	total += $("#keylime").val() * 30;
        total += $("#cheesecake").val() * 15;
        total += $("#shortcake").val() * 20;
        total += $("#cake").val() * 20;
	console.log("total: $", total);
        document.getElementById("total").innerHTML = "$" + total + ".00";
	}

}
document.getElementById("orderForm").onsubmit = validate;


function validate (){
	var passed = true;
	var message = "Hold up! You have the following errors: \n";
	var elt = document.getElementById("orderForm");
	//check that total is more than zero
	if(total == 0){
		passed = false;
		message += "You didn't order anything! \n";
	}
	//check that email is email
	if(document.getElementById("email").value.match(/^\S+@\S+$/) == null){
                passed = false;
                message += "Invalid email. \n"
        }
        //check that phone number is digits
	if(document.getElementById("number").value.match(/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/) == null){
		passed = false;
                message += "Invalid phone number. \n"
	}

	//check credit card number is however many #s long
	if(document.getElementById("creditnum").value.length != 16){
		passed = false;
		message += "Invalid credit card number. \n"
	}
	//check expiration date is MM/YY
	if(document.getElementById("expiration").value.match(/^\d{2}\/\d{2}$/) == null){
		passed = false;
                message += "Invalid expiration date. \n"
        }

	 //#check security code is three digits long
        if(document.getElementById("code").value.length != 3){
                passed = false;
                message += "Invalid security code. \n"
        }
	if(passed == false){
		window.alert(message);
		return false;
	}
	else{
		window.alert("Thank you for your order! We're working on it right away.");
		return true;
	}
}


//}
