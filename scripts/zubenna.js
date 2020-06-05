const hngIntern = () => {
    const myInfo = {
     firstName: "Nnamdi",
     lastName: "Emelu",
     hngID: "HNG-00771",
     language: "Javascript",
     email: "emelunna@gmail.com"  
    };

    const outputInfo = ({firstName, lastName, hngID, language, email}) =>
      `Hello world, this is [${firstName}] [${lastName}] with HNGi7 ID [${hngID}] using [${language}]
      for stage 2 task ${email}`;
     return outputInfo(myInfo);
};

console.log(hngIntern());