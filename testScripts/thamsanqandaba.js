function testingFunc(){
	var fName;
	var lName;
	var email;
	var hngID;
	var language;
	let userDetails = [{fName:"Thamsanqa",lName:"Ndaba",email:"thamsanqandaba.77@gmail.com",
	hngID:"HNG-03747",language:"JavaScript"}];
	
	let output;
	for(let i = 0; i < userDetails.length; i++){
		//console.log(userDetails[i].fName);
		//cnsole.log("Hello I'm "+userDetails[i].fName+" "+userDetails[i].lName+" and my email is "+ userDetails[i].email+", with the HNG ID "+userDetails[i].hngID+" "+userDetails[i].language+" it my second language" );
		output = "Hello World, this is ["+userDetails[i].fName+"] ["+userDetails[i].lName
		+"] with HNGi7 ID ["+userDetails[i].hngID+"] using ["+userDetails[i].language+"] for stage 2 task. "+userDetails[i].email;
	}
	console.log(output);
	
}
testingFunc();