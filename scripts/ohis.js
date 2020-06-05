const myInfo = {
    first_Name: "Ohis",
    last_Name: "Ohiorenoya",
    my_id: "HNG-01235",
    my_email: "ohis.ohiorenoya@yahoo.com",
    lang: "Javascript",
};
const text_string = ({ first_Name, last_Name, my_id, lang, my_email }) =>
    `Hello World, this is [${first_Name}] [${last_Name}] with HNGi7 ID [${my_id}] using [${lang}] for stage 2 task. ${my_email}`;
console.log(text_string(myInfo));