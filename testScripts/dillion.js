/** @format */

function output() {
	var details = {
		firstname: "Dillion",
		lastname: "Megida",
		id: "HNG-01576",
		language: "JavaScript",
		email: "dillionmegida@gmail.com",
	};

	var string =
		"Hello World, this is [" +
		details.firstname +
		"] [" +
		details.lastname +
		"] with HNGi7 ID [" +
		details.id +
		"] using [" +
		details.language +
		"] for stage 2 task. " +
		details.email;

	return string;
}

console.log(output());
