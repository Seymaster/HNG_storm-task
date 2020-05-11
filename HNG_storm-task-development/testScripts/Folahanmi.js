const userDetails = { firstName: "Folahanmi", lastName: "Kolawole", email: "emmanuelkolawole4@gmail.com", HNGi7Id: "HNG-01146", language: "Javascript", status: "" };

const output = ({ firstName, lastName, email, HNGi7Id, language }) => `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${HNGi7Id}] using [${language}] for stage 2 task. ${email}`;

console.log(output(userDetails));