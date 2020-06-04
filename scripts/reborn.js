const firstName = "Vershima";


 
const lastName = "Kelvin";


 
const id = "HNG-02335";


 
const language = "javascript";


 
const email = "kelvinityavyar@gmail.com";


 



 
const data = {


 
    firstName,


 
    lastName,


 
    language,


 
    id,


 
    email,


 
};


 



 
const transformFunction = ({


 
        firstName,


 
        lastName,


 
        language,


 
        id,


 
        email


 
    }) =>


 
    `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${id}] using [${language}] for stage 2 task. ${email}`;


 



 



 
console.log(transformFunction(data)); 