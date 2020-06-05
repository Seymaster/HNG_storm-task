

const output= ()=> 
{const obj={
    firstName :"[jeremiah]",
    lastName:  "[okon]",
    ID : "[HNG-00664]",
    language: "[javascript]",
    email: "okonjeremiahprogs@gmail.com"
}

const{firstName,lastName,ID,language, email}= obj;
return "Hello world, this is "+firstName+" "+ lastName+
" with HNGi7 ID "+ID+ " using "+language+" for stage 2 task. "+email;}

console.log(output());