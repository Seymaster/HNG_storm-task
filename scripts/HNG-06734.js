const input = {
    id:"HNG-06734",
    firstName:"James",
    lastName:"Adetimehin",
    language:"Javascript",
    email:"tayoski7@gmail.com",

}

const output = data => {
    const  message  =  `Hello world,  this is [${data.firstname}] [${data.lastname}] with HNGi7 ID [${data.id}] using [${data.language}] for stage 2 task. ${data.email}`

    return message;
}

console.log (output(input));