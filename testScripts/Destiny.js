"use strict";

var myDetails = {
<<<<<<< HEAD
  firstName: "Sunday",
  lastName: "Destiny",
=======
  firstName: "Destiny",
  lastName: "Sunday",
>>>>>>> 29e98cec1cf19b05e558b068833ad301e1104aab
  language: "JavaScript",
  HngId: "HNG-01091",
  email: "destinyjuniorsdj@gmail.com",
  get fullDetails() {
    return `Hello World, this is [${this.lastName}] [${this.firstName}] with HNGi7 ID [${this.HngId}] using [${this.language}] for stage 2 task. ${this.email}`;
  },
};

console.log(myDetails.fullDetails);
