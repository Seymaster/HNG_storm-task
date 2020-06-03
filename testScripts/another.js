const output = () => {
  const entry = {
    names: "Adeyinka Daniel",
    language: "Javascript",
    id: "HNG-01589",
    email: "adeyinkadaniel09@gmail.com"
  };
  return `Hello World, this is ${entry.names} with HNGi7 ID ${entry.id} with email : ${entry.email} using ${entry.language} for stage 1 task.`
}

console.log(output());