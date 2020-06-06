const userInfo = {
    firstName: "Kehinde",
    lastName: "Ajibola",
    id: "HNG-06615",
    email: "wesleykay001@yahoo.com",
    language: "Javascript",
};

const output = ({ firstName, lastName, id, language, email }) =>
    `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${id}] using [${language}] for stage 2 task. ${email}`;

console.log(output(userInfo));
