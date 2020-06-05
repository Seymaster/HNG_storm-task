const output = () => {
    const data = {
       firstName: "[Boluwatife]",
       lastName: "[Igunnu]",
       language: "[Javascript]",
       id: "[HNG-05078]",
       email: "igunnuemmanuel@gmail.com"
    }
    const result = `Hello World, this is ${data.firstName} ${data.lastName} with HNGi7 ID ${data.id} using ${data.language} for stage 2 task. ${data.email}`;
    return result;
 }
 
 console.log(output());