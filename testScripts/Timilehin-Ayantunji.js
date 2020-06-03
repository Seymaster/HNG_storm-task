
  const internData = {
    firstName: "Timilehin",
    lastName: "Ayantunji",
    language: "Javascript",
    id: "HNG-02372",
  };
  const outputData = (data) => {
    const message = `Hello World, this is ${data.firstName} ${data.lastName} with  HNGi7 ID ${data.id} using ${data.language} for stage 2 task`;
    return console.log(message);
  };

  outputData(internData);

