const task2 = () => {
  const data = {
    fName: "Victor",
    lName: "Eyo",
    id: "HNG-02014",
    language: "Javascript",
    email: "victor.eyo@gmail.com",
  };

  const dataPreview = ({ fName, lName, id, language, email }) =>
    `Hello World, this is 
    [${fName}] 
    [${lName}] with HNGi7 ID
     [${id}] using 
     [${language}] for stage 2 task. 
     ${email}`;

  return dataPreview(data);
};
console.log(task2());
