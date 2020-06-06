function sayHello() {
    var angama = {
        myFName: "[Amalachukwu]",
        myLName: "[Ebebe]",
        stg2Lang: "[Javascript]",
        id: "[HNG-04525]",
    };

    var outputString = `Hello World, this is ${angama.myFName} ${angama.myLName} with HNGi7 ID ${angama.id} using ${angama.stg2Lang} for stage 2 task. ebebeangelica@gmail.com`;

    return outputString;
}

var greet = sayHello();
console.log(greet);