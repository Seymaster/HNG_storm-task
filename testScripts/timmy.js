const displayMessage = () => {
    const internData = {
      
      firstname: "Timilehin",
      lastname: "Ayantunji",
      id: "HNG-02372",
      language: "JavaScript",
      email: "ayantunjitimilehin@gmail.com",
    }
    
  const message =  `Hello World, this is [${internData.firstname}] [${internData.lastname}] with HNGi7 ID [${internData.id}] using [${internData.language}] for stage 2 task. ${internData.email}`;
    return console.log(message);
  }
  
  displayMessage()
  