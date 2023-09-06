async function getCartItem() {
	await fetch('getcart.php')
		.then(response => response.json())
		.then(data => {
			products = data;
			loadProduct(products);
			console.log(products);
		})
		.catch(error => {
			console.log('Error:', error);
		});
}

function loadProduct(cart){
	var bodies = document.getElementById("pdgallery");
		while (bodies.firstChild) {
			bodies.removeChild(bodies.firstChild);
		}
	for(var i = 0; i < cart.length; i++){
		var productimg = document.createElement('img');

		//setting the src attribute to the img elements created 
		productimg.setAttribute("src", cart[i].Product);

		var productnames = document.createElement('p');

		//setting the id attributes to the p elements created
		var j = "pr" + i;
		productnames.setAttribute("id", j);

	

		//Create the elements button for showing description
		var prdbtn = document.createElement('button');

		//set id to the button element
		prdbtn.setAttribute("id",i);

		//set an onclick function to the button created
		prdbtn.addEventListener('click', function (){

			//get the id of the button element
			var id= this.getAttribute('id');
			let content = document.getElementById(id);

			//get the src attribute of the child element(img)
			let firstchild = content.firstChild.getAttribute('src');

			//get the index of the src attribute in the products array
			 let index = products.indexOf(firstchild);

			//show the description that has the same index with the src attribute
			document.getElementById("description").style.display = "block";
			document.getElementById("container").style.display = "flex";
			document.getElementById("description").innerHTML= products[id].Description + "<div><h4>Address</h4>" + products[id].City + ", " + products[id].State + "</div><p>Contact Us On: <br> <a href = 'https://wa.me/"+ products[id].Pnumber + "'><img src = 'whatsapp (1).svg' style = 'width: 30px; height:30px'></a><br><br>";
		});

		
		//assigning the div element to a variable	
		var body = document.getElementById("pdgallery");

		//appending the buttons for the products to the div
		body.appendChild(prdbtn)

		//assigning the button elements to a variable
		var buttons = document.getElementById(i);

		//appending the images of the products to the button elements with the same index in the array 
		buttons.appendChild(productimg)

		//appending the names of the products to the button elements with the same index in the array
		buttons.appendChild(productnames)
		
		document.getElementById(j).innerHTML = cart[i].PDname + " " + cart[i].PDprice + "<p>" + cart[i].Negotiable + "</p>" ;
	}
}