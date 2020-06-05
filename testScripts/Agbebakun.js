
var dataset = {
	firstName:"William",
 	lastName:"Imoukhuede",
  	ID:"HNG-03975",
   	plat:"Javascript", 
  	stage:"two",
  	email: "wimoukhuede@gmail.com"
  };

function HNGTask()
      {
      	 var submit = "Hello World, this is " + dataset.firstName + " " + dataset.lastName + 
      	 " with HNGi7 ID [" + dataset.ID + "]  with email [" + dataset.email + "] using [" + dataset.plat + "] for stage " + 
      	   dataset.stage + " task.";
      	console.log(submit);
      }
HNGTask();