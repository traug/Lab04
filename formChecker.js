function validateForm() {

	var x = document.forms["cart"]["cool"].value;
	if (x == null || x == "" || x <0)
	{
		alert("Item quantities cannot be blank or negative");
		return false;
	}

	var y = document.forms["cart"]["shades"].value;
	if (y == null || y == "" || y<0)
	{
		alert("Item quantities cannot be blank or negative");
		return false;
	}

	var z = document.forms["cart"]["boss"].value;
	if (z == null || z == "" || z<0)
	{
		alert("Item quantities cannot be blank or negative");
		return false;
	}
	
	var three = document.getElementById("three").checked;
	var overnight = document.getElementById("overnight").checked;
	var free = document.getElementById("free").checked;
	if(!three && !overnight && !free)
	{
		alert("A shipping option must be selected");
		return false;
	}

	var username = document.forms["cart"]["username"].value;


	var regex = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;

	if(!regex.test(username))
	{
		alert("Username must be a valid email.");
		return false;
	}

	var password = document.forms["cart"]["password"].value;
	if(password == null || password == "")
	{
		alert("Password cannot be blank");
		return false;
	}

}
