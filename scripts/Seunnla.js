	let details = {
		firstname: "Oluwaseunnla",
		lastname: "Adedoyin",
		id: "HNG-04185",
		language: "Javascript",
		email: "gridzgrey@gmail.com",
		displayinfo: function(){
			console.log("Hello World, this is [" +details.firstname + "] [" +details.lastname + "] with HNGi7 ID [" +details.id + "] using [" +details.language + "] for stage 2 task. " +details.email);
		}
	}
	details.displayinfo()