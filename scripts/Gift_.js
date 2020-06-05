// HNG-00966;

function sayMyDetails() {
    let firstName = "Gift";
    let lastname = "Chukwunweike";
    let HNG_id = "HNG-00966";
    let email = "gift.weike@gmail.com"
    let language = "JAVASCRIPT";
    let message = `Hello World, this is [${firstName}] [${lastname}] with HNGi7 ID [${HNG_id}] using [${language}] for stage 2 task. ${email}`;
    return message
};
console.log(sayMyDetails());