const myoutput = function (object) {
    console.log(`Hello World, this is [${object.name}] with HNGi7 ID [${object.id}] using [${object.language}] for stage 2 task. ${object.email}`);
    // console.log(JSON.stringify(object));
    return JSON.stringify(object);
}

let person = {
    name: 'Isaiah Oluwakayode Ogunwobi',
    id: 'HNG-01733',
    email: 'kayogunwobi@gmail.com',
    language: 'Javascript'
};

myoutput(person);