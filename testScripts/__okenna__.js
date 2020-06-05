const sayHello = () =>{
  // my details
  let details = {
    firstName: 'Promise',
    lastName: 'Nwosu',
    email: 'promiseokechukwu79@gmail.com',
    hngID: 'HNG-05940',
    language: 'JavaScript'
  }
  console.log(`Hello World, this is [${details.firstName}] [${details.lastName}] with HNGi7 ID [${details.hngID}] using [${details.language}] for stage 2 task. ${details.email}`);
}

// "Hello World, this is ${details.name} with HNGi7 ID ${data.id} using ${data.language} for stage 2 task. ${data.email}"
sayHello()
