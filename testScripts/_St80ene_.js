function getInfo({ firstName, lastName, id, language, email }) {
  return `Hello World, this is [${firstName}] [${lastName}] with HNGi7 ID [${id}] using [${language}] for stage 2 task. ${email}`;
}
const content = getInfo({
  firstName: 'Etiene',
  lastName: 'Essenoh',
  id: 'HNG-02678',
  email: 'etienejames5@gmail.com',
  language: 'Javascript',
});
console.log(content);
