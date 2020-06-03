//here i declear variable in a function called myDetails
var myDetails = {
    file_name: 'artemiscode.js',
    my_Name: 'isolokwu partrick',
    HNG_ID: 'HNG-02529',
    Email: 'roxxleo49@gmail.com',
    Environment: 'JavaScript',
    status: '',
    output: "Hello world , this is Isolokwu patrick C with HNGi7 ID HNG-02529, using JavaScript for stage 2 task. roxxleo49@gmail.com"
}

//created data varible to read all the value form the fun
var data = JSON.stringify(myDetails);
//print the data goten 
console.log(data);
console.log("Hello world this is " + myDetails.my_Name + "with HNGi7 ID " + myDetails.HNG_ID + "using " + myDetails.Environment + "for stage 2 task. roxxleo49@gmail.com");