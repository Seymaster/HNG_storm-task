var info = {
	id: "HNG-03077",
	firstName: "Gideon",
	lastName: "Peters",
	email: "gideonpeters85@gmail.com",
	language: "JavaScript",
};

function stringFormatter() {
	let res = `Hello World, this is [${info.firstName}] [${info.lastName}] with HNGi7 ID [${info.id}] using [${info.language}] for stage 2 task. ${info.email}`;
	return res;
}

console.log(stringFormatter());
