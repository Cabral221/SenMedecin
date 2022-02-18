$(function(e) {
	
	// Delete Account button
	$('#btn-delete-account').on('click', function (e) {
		e.preventDefault()
		swal({
			title: 'Suppression du compte',
			text: 'Êtes-vous sûr de vouloir supprimer votre compte ?',
			type: 'error',

			showCancelButton: true,
			cancelButtonText: "Non, annuler!",

			confirmButtonText: "Oui, supprimer!",
			// confirmButtonType: 'danger',
			// button: "Oui, supprimer!",
			// confirmButtonClass: "btn btn-danger",
			// confirmButtonColor: '#d33',

			closeOnConfirm: false,
			showLoaderOnConfirm: true,
		}, function(){
			setTimeout(function () {
				swal("Supprimer!", "Votre compte a ètè supprimé. Au revoir.", "success");
				// swal("Ajax request finished!");
			}, 2000);
			// Supprimer le compte du serveur
			// TODO ... ex : return fetch('URL)
		})
	});
	
	
	
	/**
	
	swal({
		text: 'Search for a movie. e.g. "La La Land".',
		content: "input",
		button: {
			text: "Search!",
			closeModal: false,
		},
	})
	.then(name => {
		if (!name) throw null;
		
		return fetch(`https://itunes.apple.com/search?term=${name}&entity=movie`);
	})
	.then(results => {
		return results.json();
	})
	.then(json => {
		const movie = json.results[0];
		
		if (!movie) {
			return swal("No movie was found!");
		}
		
		const name = movie.trackName;
		const imageURL = movie.artworkUrl100;
		
		swal({
			title: "Top result:",
			text: name,
			icon: imageURL,
		});
	})
	.catch(err => {
		if (err) {
			swal("Oh noes!", "The AJAX request failed!", "error");
		} else {
			swal.stopLoading();
			swal.close();
		}
	});
	
	 */
	
	
	
	
	
	
	
	
	
	//Basic
	// $('#swal-basic').on('click', function () {
	// 	swal('Welcome to Your Admin Page')
	// });
	
	//A title with a text under
	// $('#swal-title').click(function () {
	// 	swal(
	// 		{
	// 			title: 'Here is  a title!',
	// 			text: 'All are available in the template',
	// 		}
	// 	)
	// });
	
	//Success Message
	// $('#swal-success').click(function () {
	// 	swal(
	// 		{
	// 			title: 'Well done!',
	// 			text: 'You clicked the button!',
	// 			type: 'success',
	// 			confirmButtonColor: '#57a94f'
	// 		}
	// 	)
	// });
	
	//Warning Message
	// $('#swal-warning').click(function () {
	// 	swal({
	// 	  title: "Are you sure?",
	// 	  text: "Your will not be able to recover this imaginary file!",
	// 	  type: "warning",
	// 	  showCancelButton: true,
	// 	  confirmButtonClass: "btn btn-danger",
	// 	  confirmButtonText: "Yes, delete it!",
	// 	  closeOnConfirm: false
	// 	},
	// 	function(){
	// 	  swal("Deleted!", "Your imaginary file has been deleted.", "success");
	// 	});
	// });
	
	//Parameter
	// $('#swal-parameter').click(function () {
	// 	swal({
	// 	  title: "Are you sure?",
	// 	  text: "You will not be able to recover this imaginary file!",
	// 	  type: "warning",
	// 	  showCancelButton: true,
	// 	  confirmButtonClass: "btn-danger",
	// 	  confirmButtonText: "Yes, delete it!",
	// 	  cancelButtonText: "No, cancel plx!",
	// 	  closeOnConfirm: false,
	// 	  closeOnCancel: false
	// 	},
	// 	function(isConfirm) {
	// 	  if (isConfirm) {
	// 		swal("Deleted!", "Your imaginary file has been deleted.", "success");
	// 	  } else {
	// 		swal("Cancelled", "Your imaginary file is safe :)", "error");
	// 	  }
	// 	});
	// });
	
	//Custom Image
	// $('#swal-image').click(function () {
	// 	swal({
	// 		title: 'Lovely!',
	// 		text: 'your image is uploaded.',
	// 		imageUrl: '../../assets/img/brand/logo.png',
	// 		animation: false
	// 	})
	// });
	
	//Auto Close Timer
	// $('#swal-timer').click(function () {
	// 	swal({
	// 		title: 'Auto close alert!',
	// 		text: 'I will close in 1 seconds.',
	// 		timer: 1000
	// 	}).then(
	// 		function () {
	// 		},
	// 		// handling the promise rejection
	// 		function (dismiss) {
	// 			if (dismiss === 'timer') {
	// 				console.log('I was closed by the timer')
	// 			}
	// 		}
	// 	)
	// });
	
	
	//Ajax with Loader Alert
	// $('#swal-ajax').click(function () {
	// 	swal({
	// 	  title: "Ajax request example",
	// 	  text: "Submit to run ajax request",
	// 	  type: "info",
	// 	  showCancelButton: true,
	// 	  closeOnConfirm: false,
	// 	  showLoaderOnConfirm: true
	// 	}, function () {
	// 	  setTimeout(function () {
	// 		swal("Ajax request finished!");
	// 	  }, 2000);
	// 	});
	// });
	
});