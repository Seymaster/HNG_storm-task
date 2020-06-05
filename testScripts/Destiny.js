"use strict";

var myDetails = {
  firstName: "Destiny",
  lastName: "Sunday",
  language: "JavaScript",
  HngId: "HNG-01091",
  email: "destinyjuniorsdj@gmail.com",
  get fullDetails() {
    return `Hello World, this is [${this.lastName}] [${this.firstName}] with HNGi7 ID [${this.HngId}] using [${this.language}] for stage 2 task. ${this.email}`;
  },
};

console.log(myDetails.fullDetails);
