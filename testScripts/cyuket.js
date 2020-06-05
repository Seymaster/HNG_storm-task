var cyuketInfo = {
  id: "HNG-01524",
  lastName: "Uket",
  firstName: "Cyril",
  email: "cyriluket12@gmail.com",
  language: "Flutter",
};

const printMyData = () => {
  let res = `Hello World, this is[${cyuketInfo.firstName}][${cyuketInfo.lastName}] with HNGi7 ID[${cyuketInfo.id}]using[${cyuketInfo.language}]for stage 2 task.${cyuketInfo.email}`;
  return res;
};

console.log(printMyData());
