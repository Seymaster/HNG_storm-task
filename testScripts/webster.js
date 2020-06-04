 const output = () => {
   const data = {
      firstName: "[Victor]",
      lastName: "[Chukwurah]",
      language: "[Javascript]",
      id: "[HNG-03326]"
   }
   const result = `Hello World, this is ${data.firstName} ${data.lastName} with ID ${data.id} using  using ${data.language} for stage 2 task. chukwurahvictor7@gmail.com`
   return result;
}

console.log(output());