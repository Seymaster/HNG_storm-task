// creating an object containing my datas
const kooljoeScript = {
    firstName: "Adebowale",
    lastName: "Adetunji",
    Id: "HNG-01147",
    language: "javaScript",
    email: "bowaleadetunji@gmail.com",
    // object function to output the text strings required
    output: () => {
        return `Hello World, this is [${kooljoeScript.firstName}] [${kooljoeScript.lastName}] with HNGi7 ID [${kooljoeScript.Id}] using [${kooljoeScript.language}] for stage 2 task. ${kooljoeScript.email}`;
    }
}
console.log(kooljoeScript.output ()); /*calling kooljoeScript.*/