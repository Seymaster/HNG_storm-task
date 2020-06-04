function myOutput(){
    myInfo = {
        firstName: "[Muhydeen]",
        lastName: "[Alabi]",
        id : "[HNG-05941]",
        email:"alabimuhydeen@gmail.com",
        language : "[JavaScript]"
    };

    return ("Hello world, this is " + 
    myInfo.lastName + " " + 
    myInfo.firstName +
     " with HNGi7 ID " + myInfo.id + 
     " using " + myInfo.language + 
     " for stage 2 task. " + myInfo.email
     );

}

console.log(myOutput());
