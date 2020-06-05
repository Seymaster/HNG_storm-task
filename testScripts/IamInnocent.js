const myDetails = () => {
  const details = {
    firstName: "Innocent",
    lastName: "Chukwuemeka",
    language: "Javascript",
    id: "HNG-02764",
    email: "chukwuemeka140@gmail.com"
  };
let output = `Hello World, this is [${details.firstName}] [${details.lastName}] with HNGi7 ID [${details.id}] using [${details.language}] for stage 2 task. ${details.email}`
    ;
  return output;
};

console.log(myDetails());
