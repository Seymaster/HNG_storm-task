let first = "[Joseph]";
let last = "[Jeremiah]";
let id = "[HNG-05271]";
let lang = "[Javascript]";
let email = "josephjeremiah564@yahoo.com";

const getMyData = (firstName, lastName, id, language, mail) => {
  let result = `Hello World, this is ${firstName} ${lastName} with HNGi7 ID ${id} using ${language} for stage 2 task. ${mail}`;

  return result;
};

console.log(getMyData(first, last, id, lang, email));
