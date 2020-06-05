function displayDetails() {
  var details = {
    firstname: "Olugbenga",
    lastname: "Odedele",
    id: "HNG-05597",
    language: "javascript",
    email: "odedeleg@gmail.com",
  };
  console.log(
    "Hello World, this is " +
      details.firstname +
      " " +
      details.lastname +
      " with HNGi7 ID " +
      details.id +
      " using " +
      details.language +
      " for stage 2 task. " +
      details.email
  );
}

displayDetails();
