 function output() {

    var info = {
        firstName: "Precious",
        lastName: "Edafe",
        language: "Javascript",
        id : "HNG-01533",
        email: "preciousedafe15@gmail.com"
    };

    return "Hello World, this is [" + info.firstName + "] [" + info.lastName + "] with HNGi7 ID ["+ 
    info.id + "] using [" + info.language + "] for stage 2 task. " + info.email;


}

console.log(output());
