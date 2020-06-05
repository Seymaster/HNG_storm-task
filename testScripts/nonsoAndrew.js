const data = {
    firstName : "Nonso",
    lastName : "Ugbodu",
    id : "HNG-03332",
    language : "javascript",
    email : "nonsoandrew1@gmail.com"
}
var readMe = ({
        firstName,
        lastName,
        language,
        id,
        email
    }) =>
    `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${id}] using [${language}] for stage 2 task. ${email}`;


console.log(readMe(data));