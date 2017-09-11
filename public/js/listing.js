
	 	window.onload = selectors();
	 	function selectors() {
	 		/* body... */
	 		var allListing = document.querySelectorAll(".sub_listing");
	 		allListing.forEach(list => list.style.display = 'none');
	 		var buttons = document.querySelectorAll(".list_button");
	 		var listing = document.getElementById("new");
	 		//add listing number 1

	 		buttons[0].onclick = function () {
	 			/* body... */
	 			allListing[0].style.display = "block";
	 			listing.style.display = 'none';
	 		}
	 		buttons[1].onclick = function () {
	 			/* body... */
	 			allListing[1].style.display = 'block';
	 			allListing[0].style.display = 'none';

	 		}
			buttons[2].onclick = function () {
	 			/* body... */
	 			allListing[2].style.display = 'block';
	 			allListing[1].style.display = 'none';

	 		}
			buttons[3].onclick = function () {
	 			/* body... */
	 			allListing[3].style.display = 'block';
	 			allListing[2].style.display = 'none';

	 		}
				buttons[4].onclick = function () {
	 			/* body... */
	 			allListing[4].style.display = 'block';
	 			allListing[3].style.display = 'none';

	 		}
				buttons[5].onclick = function () {
	 			/* body... */
	 			allListing[5].style.display = 'block';
	 			allListing[4].style.display = 'none';

	 		}
			buttons[6].onclick = function () {
	 			/* body... */
	 			allListing[6].style.display = 'block';
	 			allListing[5].style.display = 'none';

	 		}
			buttons[7].onclick = function () {
	 			/* body... */
	 			allListing[7].style.display = 'block';
	 			allListing[6].style.display = 'none';

	 		}
			buttons[8].onclick = function () {
	 			/* body... */
	 			allListing[8].style.display = 'block';
	 			allListing[7].style.display = 'none';

	 		}
			buttons[9].onclick = function () {
	 			/* body... */
	 			allListing[9].style.display = 'block';
	 			allListing[8].style.display = 'none';

	 		}
	 		// BUTTON REVERS
			 var backButton = document.querySelectorAll(".back_button");
			 backButton[0].onclick = function () {
			 	/* body... */
			 	allListing[2].style.display = 'none';
	 			allListing[1].style.display = 'block';

			 }
backButton[1].onclick = function () {
			 	/* body... */
			 	allListing[3].style.display = 'none';
	 			allListing[2].style.display = 'block';

			 }
backButton[2].onclick = function () {
			 	/* body... */
			 	allListing[4].style.display = 'none';
	 			allListing[3].style.display = 'block';

			 }
backButton[3].onclick = function () {
			 	/* body... */
			 	allListing[5].style.display = 'none';
	 			allListing[4].style.display = 'block';

			 }
backButton[4].onclick = function () {
			 	/* body... */
			 	allListing[6].style.display = 'none';
	 			allListing[5].style.display = 'block';

			 }
backButton[5].onclick = function () {
			 	/* body... */
			 	allListing[7].style.display = 'none';
	 			allListing[6].style.display = 'block';

			 }
backButton[6].onclick = function () {
			 	/* body... */
			 	allListing[8].style.display = 'none';
	 			allListing[7].style.display = 'block';

			 }
			 backButton[7].onclick = function () {
			 	/* body... */
			 	allListing[9].style.display = 'none';
	 			allListing[8].style.display = 'block';

			 }
 

	 		console.log(allListing)
	 		console.log(buttons)
 	 		
	 		console.log(backButton);

 
	 	}