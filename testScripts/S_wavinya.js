const output = () => {
    const Info = {
        firstName: "[Esther]",
        lastName: "[Ndavi]",
        Id: "[HNG-00714]",
        Language: "[JavaScript]",
        Email: "estherwavinya80@gmail.com"
    }
    return `Hello World, this is ${Info.firstName} ${Info.lastName} with HNGi7 ID ${Info.Id} using ${Info.Language} for stage 2 task. ${Info.Email}`;
}
console.log(output());