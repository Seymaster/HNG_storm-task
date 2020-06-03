function Output() {
  const Internship = [
    {
      lastName: "Yahaya",
      firstName: "Oyinkansola",
      id: "HNG-01876",
      language: "javascript",
      email: "yahayaoyinkansola@gmail.com",
    },
  ];

  Internship.map((Intern) =>
    console.log(
      `Hello World, this is [${Intern.lastName}] [${Intern.firstName}] with HNGi7 ID [${Intern.id}] using [${Intern.language}] for stage 2 task. ${Intern.email}`
    )
  );
}

Output();
