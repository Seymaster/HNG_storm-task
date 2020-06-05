// // Hoisting variables
let message, myOutput, myDetails;

//.. object
myDetails = {
    firstName: "Obed",
    lastName: "Gaiya",
    HNG_id: "HNG-02931",
    email: "gaiyaobed94@gmail.com",
    language: "JavaScript",
};

//function
myOutput = ({ firstName, lastName, HNG_id, email, language }) => {
    message = `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${HNG_id}] using [${language}] for stage 2 task. ${email}`;
    return message;
};

// outputing it to the console
console.log(myOutput(myDetails));
