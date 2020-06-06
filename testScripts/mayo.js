var myInfo = {
  hngId: "HNG-03401",
  firstName: "Oluwamayowa",
  lastName: "Alomasojo",
  language: "JavaScript",
  email: "mayowaalomasojo@gmail.com"
}
function populateMyDetails(myCredential) {
  
  var outputResponse = `Hello World, this is [${myCredential.lastName}] [${myCredential.firstName}] with HNGi7 ID [${myCredential.hngId}] using [${myCredential.language}] for stage 2 task. ${myCredential.email}`
  return outputResponse;
}
console.log(populateMyDetails(myInfo));
