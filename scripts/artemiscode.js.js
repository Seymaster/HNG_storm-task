//my script
const userInfo = { firstName: "patrick",
 lastName: "isolokwu",
  id: "HNG-02529",
   email: "roxxleo49@gmail.com",
   language: "Javascript", };
   
const output =
 ({ firstName,
     lastName, 
     id,
      language,
       email }) =>
    `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${id}] using [${language}] for stage 2 task. ${email}`;

console.log(output(userInfo));
