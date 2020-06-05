const data = {
    firstName: "Ekpono",
    lastName:"Ambrose",
    id: "HNG-01502",
    language: "javascript",
    email: "ekponoambrose@gmail.com"
};
const transformFunction = (data) => `Hello World, this is [${data.firstName}] [${data.lastName}] with HNGi7 ID [${data.id}] using [${data.language}] for stage 2 task. ${data.email}`;
console.log(transformFunction(data));
