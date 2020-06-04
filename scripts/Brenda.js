const intern = {
      firstName: 'Brenda',
      lastName: 'Natunga',
      id: 'HNG-01159',
      language: 'Javascript',
      email: 'bnatunga@yahoo.com',
      getIntern(){
          return `Hello World, this is [${this.firstName}] [${this.lastName}] with HNGi7 ID [${this.id}] using [${this.language}] for stage 2 task. ${this.email}`
      }
};
const output = intern.getIntern();
console.log(output);
