const intern = {
	firstName : 'James',
	hngi7_id  : 'HNG-03133',
	lan       : 'JavaScript',
	lastName  : 'Adewuyi'
};

const outputFunction = () => {
	const output = `Hello World, this is [${intern.firstName}] [${intern.lastName}] with HNGi7 ID [${intern.hngi7_id}] using [${intern.lan}] for stage 2 task. adewuyibabajide@gmail.com`;
	console.log(output);
	return output;
};

outputFunction();
