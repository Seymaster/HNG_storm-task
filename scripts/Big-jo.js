// TODO: Write a function using an language of your choice that will output a string in exactly this format:
// TODO: "Hello World, this is [firstName] [LastName] with HNGi7 ID [HNG-0000] using [PHP] for stage 2 task. yanmifeakeju@gmail.com";

function outputProfile() {
    const myProfile = {
        firstName: 'Joseph',
        lastName: 'Henshaw',
        id: 'HNG-04674',
        language: 'Javascript',
    }
    return JSON.stringify(myProfile);
}

console.log(outputProfile());