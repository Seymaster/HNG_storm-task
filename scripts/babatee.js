const myInfo = {
    id: "HNG-06699",
    firstname: "Babatope",
    lastname: "Arogunjo",
    language: "JavaScript",
    email: "babatope_e@yahoo.com"
}

const process = data => {
    const msg =  `Hello World, this is [${data.firstname}] [${data.lastname}] with HNGi7 ID [${data.id}] using [${data.language}] for stage 2 task. ${data.email}`

    return msg;
}



console.log(process(myInfo));