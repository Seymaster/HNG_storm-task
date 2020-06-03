const output = () => {
  const data = {
    firstName: "Oluwatosin",
    lastName: "Jimoh",
    language: "Javascript",
    id: "HNG-00977",
    email: "jayoluwatosin@gmail.com"
  };
  return `Hello World, this is ${data.firstName} ${data.lastName} with HNGi7 ID ${data.id} using ${data.language} for stage 2 task. ${data.email}`
}

console.log(output());
