const userDetails = {
  firstName: "Opeyemi",
  lastName: "Stephen",
  userId: "HNG-01178",
  language: "Javascript",
};

userDetails[
  "output"
] = `Hello World, this is [${userDetails.firstName}] [${userDetails.lastName}] with HNGi7 ID [${userDetails.userId}] using [${userDetails.language}] for stage 2 task. resourcefulmindoso@gmail.com`;

if (userDetails.hasOwnProperty("output")) {
  console.log(userDetails.output);
}
