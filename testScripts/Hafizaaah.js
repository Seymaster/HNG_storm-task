Const firstName = "Hafizah";
Const lastName = "Muhyideen";
Const id = "HNG-02396";
Const lang = "JavaScript";
Const email = "hafeexahabdul@gmail.com";

Const myDetailsData = {
    firstName,
    lastName,
    lang,
    id,
    email,
};

Const output = ({
        firstName,
        lastName,
        lang,
        id,
        email
    }) =>
    `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${id}] using [${lang}] for stage 2 task. ${email}`;


console.log(output(myDetailsData));
