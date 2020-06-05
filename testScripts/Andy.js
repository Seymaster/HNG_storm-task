const info={
    firstName:"Andrews",
    lastName:"Asamoah",
    id:"HNG-06759",
    email:"kasamoah715@gmail.com",
    language:'JavaScript(Js)'
}

const Output=(myInfo)=>{
   return `Hello World, this is [${myInfo.firstName}] [${myInfo.lastName}] with HNGi7 ID [${myInfo.id}] using [${myInfo.language}] for stage 2 task. ${myInfo.email}`;
}
console.log(Output(info));
