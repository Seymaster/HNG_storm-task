const userDetails = {
  firstName: "Arafah",
  lastName: "Ogunfemi",
  id: "HNG-05018",
  email: "ayobamiarafat09@gmail.com",
  language: "Javascript",
};

const output = ({ firstName, lastName, id, language, email }) =>
  `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${id}] using [${language}] for stage 2 task. ${email}`;

console.log(output(userDetails));
