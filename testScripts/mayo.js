var myInfo ={
    hngId: "HNG-03401",
    firstName: "Oluwamayowa",
    lastName: "Alomasojo",
    language: "PHP & JS"
}
function populateMyDetails(myCredential) {
    var outputResponse = `Hello world, this is ${myCredential.lastName}  ${myCredential.firstName} with HNGi7 ID ${myCredential.hngId} using ${myCredential.language} for stage 2 task`;
    return outputResponse;

}

console.log(populateMyDetails(myInfo));
