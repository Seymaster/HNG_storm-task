const userInfo = {
    firstName: "Yahaya",
    lastName: "Yohanna",
    id: "HNG-04535",
    email: "yahayahyohanna@gmail.com",
    language: "Javascript",
};

const output = ({ firstName, lastName, id, language, email }) =>
    `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${id}] using [${language}] for stage 2 task. ${email}`;

console.log(output(userInfo));
