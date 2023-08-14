function closedesc(){
  document.getElementById("container").style.display = "none";
  // alert("Hello");
}

products = JSON.parse(sessionStorage.getItem("products"));
prdtype = JSON.parse(sessionStorage.getItem("prdtype"));
prname = JSON.parse(sessionStorage.getItem("prname"));
price = JSON.parse(sessionStorage.getItem("price"));
negotiable = JSON.parse(sessionStorage.getItem("negotiable"));
desc = JSON.parse(sessionStorage.getItem("desc"));
phone = JSON.parse(sessionStorage.getItem("phone"));
city = JSON.parse(sessionStorage.getItem("city"));
state = JSON.parse(sessionStorage.getItem("state"));
email = sessionStorage.getItem("email");

var cart = document.createElement('button');
cart.innerHTML = "Add to Cart";

function loadProducts(){
	var productsNo = products.length;	
		
	//loop through the product array
	for(var i = 0; i < productsNo; i++){

		var prdname = prname[i];

		var product = document.createElement('img');

		//setting the src attribute to the img elements created 
		product.setAttribute("src", products[i]);

		var names = document.createElement('p');

		//setting the id attributes to the p elements created
		var j = "pr" + i;
		names.setAttribute("id", j);

		
		// cart.setAttribute('id',i);

		//Create the elements button for showing description
		var terms = document.createElement('button');

		//set id to the button element
		terms.setAttribute("id",i);

		//set an onclick function to the button created
		terms.addEventListener('click', function (){

			//get the id of the button element
			var id= this.getAttribute('id');
			let content = document.getElementById(id);

			//get the src attribute of the child element(img)
			let firstchild = content.firstChild.getAttribute('src');

			//get the index of the src attribute in the products array
			 let index = products.indexOf(firstchild);

			cart.addEventListener('click', function (){
	
				let cartproducts = {
					"productimg" : products[index],
					"product_type" : prdtype[index],
					"product_name" : prname[index],
					"price" : price[index],
					"negotiable" : negotiable[index],
					"desc" : desc[index],
					"phone" : phone[index],
					"city" : city[index],
					"state" : state[index],
					"email" : email
				};
	
				fetch("cart.php", {
					"method" : "POST",
					"headers" : {
						"Content-Type" : "application/json; charset=utf-8"
					},
					"body" : JSON.stringify(cartproducts)
				}).then(function(response){
					return response.text();
				}).then(function(data){
					alert(data);
				})
	
			});

			//show the description that has the same index with the src attribute
			document.getElementById("description").style.display = "block";
			document.getElementById("container").style.display = "flex";
			document.getElementById("description").innerHTML= desc[id] + "<div><h4>Address</h4>" + city[id] + ", " + state[id] + "</div><p>Contact Us On: <br> <a href = 'https://wa.me/"+ phone[id] + "'><img src = 'whatsapp (1).svg' style = 'width: 30px; height:30px'></a><br><br>";
			document.getElementById("description").appendChild(cart)
		});

		
		//assigning the div element to a variable	
		var body = document.getElementById("pdgallery");

		//appending the buttons for the products to the div
		body.appendChild(terms)

		//assigning the button elements to a variable
		var buttons = document.getElementById(i);

		//appending the images of the products to the button elements with the same index in the array 
		buttons.appendChild(product)

		//appending the names of the products to the button elements with the same index in the array
		buttons.appendChild(names)
		
		document.getElementById(j).innerHTML = prdname + " " + price[i] + "<p>" + negotiable[i] + "</p>" ;


	}
}

function autocomplete(input, list) {

	//Add an event listener to compare the input value with all countries
	input.addEventListener('input', function () {
		//Close the existing list if it is open
		closeList();
		//searchInput();

		//If the input is empty, exit the function
		if (!this.value)
			return;

		//Create a suggestions <div> and add it to the element containing the input field
		suggestions = document.createElement('div');
		suggestions.setAttribute('id', 'suggestions');
		this.parentNode.appendChild(suggestions);

		//Iterate through all entries in the list and find matches
		for (let j=0; j < list.length; j++) {

			if (list[j].toUpperCase().includes(this.value.toUpperCase())) {

				//If a match is found, create a suggestion <div> and add it to the suggestions <div>
				suggestion = document.createElement('div');
				suggestion.innerHTML = list[j];
				
				suggestion.addEventListener('click', function () {
					input.value = this.innerHTML;
					closeList();
				});
				suggestion.style.cursor = 'pointer';
				

				suggestions.appendChild(suggestion);
			}
				
		}

	});

	function closeList() {
		let suggestions = document.getElementById('suggestions');
		if (suggestions)
			suggestions.parentNode.removeChild(suggestions);
	}

}

function searchInput(){
	var inputs = document.getElementById("input").value;
	if(inputs == ""){
		document.getElementById("input").style.borderColor = "red";
	}else{
		var bodies = document.getElementById("pdgallery");
		while (bodies.firstChild) {
			bodies.removeChild(bodies.firstChild);
		}
		for (let m = 0; m < prname.length; m++) {

			if(prname[m].includes(inputs)){
				var productimg = document.createElement('img');
				productimg.setAttribute("src", products[m]);

				var names = document.createElement('p');
				var j = "pr" + m;
				names.setAttribute("id", j);
				
				//Create the elements button for showing description
				var term = document.createElement('button');

				//set id to the button element
				term.setAttribute("id",m);
				var buttonid = term.getAttribute('id');

				//set an onclick function to the button created
				term.addEventListener('click', function (){

					//get the id of the button element
					var ids= this.getAttribute('id');
					let content = document.getElementById(ids);

					//get the src attribute of the child element(img)
					let firstchild = content.firstChild.getAttribute('src');

					//get the index of the src attribute in the products array
					let index = products.indexOf(firstchild);

					cart.addEventListener('click', function (){
	
						let cartproducts = {
							"productimg" : products[index],
							"product_type" : prdtype[index],
							"product_name" : prname[index],
							"price" : price[index],
							"negotiable" : negotiable[index],
							"desc" : desc[index],
							"phone" : phone[index],
							"city" : city[index],
							"state" : state[index]
						};
			
						fetch("cart.php", {
							"method" : "POST",
							"headers" : {
								"Content-Type" : "application/json; charset=utf-8"
							},
							"body" : JSON.stringify(cartproducts)
						}).then(function(response){
							return response.text();
						}).then(function(data){
							console.log(data);
						})
			
					});


					//show the description that has the same index with the src attribute
					document.getElementById("description").style.display = "block";
					document.getElementById("container").style.display = "block";
					document.getElementById("description").innerHTML= desc[index] + "<div><h4>Address</h4>" + city[index] + ", " + state[index] + "</div><p>Contact Us On: <br> <a href = 'https://wa.me/"+ phone[index] + "'><img src = 'whatsapp (1).svg' style = 'width: 30px; height:30px'></a><br><br>";
					document.getElementById("description").appendChild(cart)

				});

			
				bodies.appendChild(term)
				var buttons = document.getElementById(buttonid);
				buttons.appendChild(productimg)
				buttons.appendChild(names)
		
				document.getElementById(j).innerHTML = prname[m];
			}
		}
	}
}

function showProducts(pbutton, str){

	pbutton.addEventListener('click', function(){
		var bodies = document.getElementById("pdgallery");
		
		while (bodies.firstChild) {
			bodies.removeChild(bodies.firstChild);
		}


		for(var p = 0; p < productsNo; p++){
			if(prdtype[p].toUpperCase().includes(str.toUpperCase())){

				var name = prname[p];

				var prdimg = document.createElement('img');

				//setting the src attribute to the img elements created 
				prdimg.setAttribute("src", products[p]);

				var names = document.createElement('p');

				//setting the id attributes to the p elements created
				var pid = "pd" + p;
				names.setAttribute("id", pid);

				//Create the elements button for showing description
				var prdbutton = document.createElement('button');

				//set id to the button element
				var pbid = "pb" + p;
				prdbutton.setAttribute("id", pbid);

				//set an onclick function to the button created
				prdbutton.addEventListener('click', function (){

					//get the id of the button element
					var bid= this.getAttribute('id');
					let prdcontent = document.getElementById(bid);

					//get the src attribute of the child element(img)
					let prdfirstchild = prdcontent.firstChild.getAttribute('src');

					//get the index of the src attribute in the products array
					let prdindex = products.indexOf(prdfirstchild);

					cart.addEventListener('click', function (){
		
						let cartproducts = {
							"productimg" : products[prdindex],
							"product_type" : prdtype[prdindex],
							"product_name" : prname[prdindex],
							"price" : price[prdindex],
							"negotiable" : negotiable[prdindex],
							"desc" : desc[prdindex],
							"phone" : phone[prdindex],
							"city" : city[prdindex],
							"state" : state[prdindex]
						};
			
						fetch("cart.php", {
							"method" : "POST",
							"headers" : {
								"Content-Type" : "application/json; charset=utf-8"
							},
							"body" : JSON.stringify(cartproducts)
						}).then(function(response){
							return response.text();
						}).then(function(data){
							alert(data);
						})
			
					});


					//show the description that has the same index with the src attribute
					document.getElementById("description").style.display = "block";
					document.getElementById("container").style.display = "block";
					document.getElementById("description").innerHTML= desc[prdindex] + "<div><h4>Address</h4>" + city[prdindex] + ", " + state[prdindex] + "</div><p>Contact Us On: <br> <a href = 'https://wa.me/"+ phone[prdindex] + "'><img src = 'whatsapp (1).svg' style = 'width: 30px; height:30px'></a>";
					document.getElementById("description").appendChild(cart)
				});

				
				//assigning the div element to a variable	
				var body = document.getElementById('pdgallery');

				//appending the buttons for the products to the div
				body.appendChild(prdbutton)

				//assigning the button elements to a variable
				var prdbuttons = document.getElementById(pbid);

				//appending the images of the products to the button elements with the same index in the array 
				prdbuttons.appendChild(prdimg)

				//appending the names of the products to the button elements with the same index in the array
				prdbuttons.appendChild(names)
				
				document.getElementById(pid).innerHTML = prname[p] + " " + price[p] + "<p>" + negotiable[p] + "</p>" ;


			}
		}
	});
}

function getCartItem(){
	fetch("getcart.php", {
		"method" : "GET",
		"headers" : {
			"Content-Type" : "application/json; charset=utf-8"
		}
	})
	.then(function(response){
		return response.text();
	}).then(function(data){
		console.log(data);
	})
}

function chat(){
	fetch("https://api-preprod-sandbox.mirrorfly.com/api/v1")
	.then(function(response){
		return response.text();
	}).then(function(data){
		console.log(data);
	})
}