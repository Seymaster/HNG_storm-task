function Output() {
  const Internship = {
    firstName: "Oyinkansola",
    lastName: "Yahaya",
    id: "HNG-01876",
    language: "javascript",
    email: "yahayaoyinkansola@gmail.com",
  };

  const text = `Hello World, this is [${Internship.firstName}] [${Internship.lastName}] with HNGi7 ID [${Internship.id}] using [${Internship.language}] for stage 2 task. ${Internship.email}`;

  return text;
}

console.log(Output());
