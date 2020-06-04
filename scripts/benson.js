const firstName = "benson";
const lastName = "momodu";
const id = "HNG-05566";
const language = "javascript";
const email = "benson.isaac.momodu@gmail.com";

const data = {
    firstName,
    lastName,
    language,
    id,
    email,
};

const runOutput = (detail) => {
    return `Hello World, this is [${detail.firstName}] [${detail.lastName}] with HNGi7 ID [${detail.id}] using [${detail.language}] for stage 2 task. ${detail.email}`;
}


console.log(runOutput(data));