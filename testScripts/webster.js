 const output = () => {
   const data = {
      firstName: "[Victor]",
      lastName: "[Chukwurah]",
      language: "[Javascript]",
      id: "[HNG-03326]",
      email: "chukwurahvictor7@gmail.com"
   }
   const result = `Hello World, this is ${data.firstName} ${data.lastName} with HNGi7 ID ${data.id} using ${data.language} for stage 2 task. ${data.email}`;
   return result;
}

console.log(output());