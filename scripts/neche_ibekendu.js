// Script to return data based on this format: Hello World, this is [Your full name] with HNGi7 ID [Your HNG ID] and [email] using [language Used] for stage 2 task

const details = {
    name: "Neche Ibekendu",
    id: "HNG-05572",
    language: "JavaScript",
    email: "nechekendu@gmail.com"
  };
  
  const returnedDetails = `Hello World, this is ${details.name} with HNGi7 ID ${details.id} and email ${details.email} using ${details.language} for stage 2 task`;
  
  console.log(returnedDetails);