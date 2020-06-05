// Simple script to print out my details

let firstName = "Damilola"
let lastName = "Akinlade"
let id = "HNG-03037"
let stage = 2

let programming_languages = {
    primary : "JavaScript"
}

let email = "akinlade.oluwadamilola@eng.uniben.edu"
let phone = "08161669919"

function hello_World(firstName, lastName, id, programming_languages, stage){
    return `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${id}] using [${programming_languages.primary}] for stage ${stage} task. ${email}`
}

console.log(hello_World(firstName, lastName, id, programming_languages, stage, email))