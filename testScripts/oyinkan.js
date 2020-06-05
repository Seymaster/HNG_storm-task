function Output() {
  const Internship = {
    lastName: "yahaya",
    firstName: "oyinkansola",
    id: "HNG-01876",
    language: "javascript",
    email: "yahayaoyinkansola@gmail.com",
  };

  const text = `Hello World, this is ${Internship.lastName} ${Internship.firstName} with HNGi7 ID [${Internship.id}] with email [${Internship.email}] using [${Internship.language}] for stage two task.`;

  return text;
}

console.log(Output());
