
const alexobj = {
    firstName: "Shiaondo",
    lastName: "Orkuma",
    id: "HNG-00053",
    email: "shiaondoorkuma@gmail.com",
    language: "Javascript",
};

const strg = `Hello World, this is [${alexobj.firstName}] [${alexobj.lastName}] with HNGi7 ID [${alexobj.id}] using [${alexobj.language}] for stage 2 task. ${alexobj.email}`

const alexfunc = () => (
    console.log(strg)
)
alexfunc();