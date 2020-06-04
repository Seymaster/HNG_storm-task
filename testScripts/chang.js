const me =()=> {
    const myData = {
      firstname: "Rahman",
      lastname: "Orewole",
      language: "JavaScript",
      id: "HNG-05099",
      mail: 'rorewole@gmail.com'
    };
    const result = `Hello World, this is ${myData.firstname} ${myData.lastname} with HNGi7 ID [${myData.id}] with email [${myData.mail}] using [${myData.language}] for stage 2 task.`  
    return result;
  }
  
  
console.log(me());
  