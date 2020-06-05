const intern = {
	firstName: "Richard",
	hngi7_id: "HNG-01648",
	lan: "JavaScript",
	lastName: "Ingwe",
};

const outputFunction = () => {
	const output = `Hello World, this is [${intern.firstName}] [${intern.lastName}] with HNGi7 ID [${intern.hngi7_id}] using [${intern.lan}] for stage 2 task. richardingwe5@gmail.com`;
	console.log(output);
	return output;
};

outputFunction();

