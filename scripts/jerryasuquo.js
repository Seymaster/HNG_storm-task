function output() {
  const data = {
    id: "HNG-00666",
    firstname: "Jeremiah",
    lastname: "Asuquo",
    email: "jbassuquo@outlook.com",
    language: "JavaScript",
    filename: "jerryasuquo.js",
  };

  return `Hello World, this is [${data.firstname}] [${data.lastname}] with HNGi7 ID [${data.id}] using [${data.language}] for stage 2 task. ${data.email}`;
}

console.log(output());
