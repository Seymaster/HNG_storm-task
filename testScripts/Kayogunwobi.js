let person = {
  id: 'HNG-01733',
  firstname: 'Isaiah',
  lastname: 'Ogunwobi',
  email: 'kayogunwobi@gmail.com',
  language: 'Javascript'
};

function myOuput(myObject) {
  console.log(`Hello World, this is [${myObject.firstname}] [${myObject.lastname}] with HNGi7 ID [${myObject.id}] using [${myObject.language}] for stage 2 task. ${myObject.email}`);
}

myOuput(person)
