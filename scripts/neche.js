// Script to return data based on this format: Hello World, this is [Your full name] with HNGi7 ID [Your HNG ID] and [email] using [language Used] for stage 2 task

const details = {
    firstName: "Neche",
    lastName: "Ibekendu",
    id: "HNG-05572",
    language: "JavaScript",
    email: "nechekendu@gmail.com"
  };
  
  const returnedDetails = `Hello World, this is [${details.firstName}] [${details.lastName}] with HNGi7 ID [${details.id}] using [${details.language}] for stage 2 task. ${details.email}`;
  
  console.log(returnedDetails);