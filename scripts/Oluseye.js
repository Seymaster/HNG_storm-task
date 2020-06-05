const firstName = "Oluseye";
const lastName = "Obisesan";
const id = "HNG-01352";
const lang = "javascript";
const email = "oluseyeobitola1@gmail.com";

const myDetailsData = {
    firstName,
    lastName,
    lang,
    id,
    email,
};

const output = ({
        firstName,
        lastName,
        lang,
        id,
        email
    }) =>
    `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${id}] using [${lang}] for stage 2 task. ${email}`;


console.log(output(myDetailsData));