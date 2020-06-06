const data = {
    firstname: "Nwodoanslem",
    lastname: "Tochukwu",
    HNGi7ID: "HNG-05344",
    email: "almightyritzyplena@gmail.com",
    languageused: "Javascript"
};
const output = ({ firstname, lastname, HNGi7ID, languageused, email }) =>
   `Hello World, this is [${firstname}] [${lastname}] with HNGi7 ID [${HNGi7ID}] using [${languageused}] for stage 2 task. ${email}`
console.log(output(data));
