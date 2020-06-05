const dollypee = {
	myFirstName: "Adedolapo",
    myLastName: "Olaiya",
    id: "HNG-03869",
    programmingLang: "JavaScript",
	myEmail: "olaiyadolapo@gmail.com"
};

const firstTeamTask = () => {
	let output = `Hello World, this is [${dollypee.myFirstName}] [${dollypee.myLastName}] with HNGi7 ID [${dollypee.id}] using [${dollypee.programmingLang}] for stage 2 task. ${dollypee.myEmail}`;
	return output;
}

console.log(firstTeamTask());