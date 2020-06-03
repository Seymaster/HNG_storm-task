let jelhill = {
    surname: "Umaru",
    firstname: "Abduljelili",
    id: "HNG-00204",
    language: "Javascript",
    email: "talk2jelili2000@gmail.com",
    output: function() {
        return `Hello World, this is [${this.surname}] [${this.firstname}] with HNGi7 ID [${this.id}] using [${this.language}] for stage 2 task. ${this.email}`
    },
}
  
  console.log(jelhill.output())
