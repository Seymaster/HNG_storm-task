const person = {
  name: 'Philip Daniel Oghenetega',
  hngID: 'HNG-02634',
  language: 'JavaScript',
  email: 'oghenetegaphilip@gmail.com'
}
const values = `Hello World, this is ${person.name} with HNG ID: ${person.hngID} and using ${person.language} for stage two.${person.email}`;
const p = document.createElement('p');
  p.appendChild(document.createTextNode(values));
  document.body.appendChild(p);
console.log(values);