const myDetails = {
  firstName: "Adedeji",
  lastName: "Abiola",
  language: "JavaScript",
  id: "HNG-01740",
  email: "adedejiabiola56@gmail.com"
}
const { firstName, lastName, language, id, email } = myDetails
const getDetailsString = () => {
  return `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${id}] using [${language}] for stage 2 task. ${email}`
}

console.log(getDetailsString())