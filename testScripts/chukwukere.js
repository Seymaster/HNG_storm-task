const data = {
        firstName: "Chukwukere",
        lastName: "Okpani",
        ID: "HNG-03309",
        language: "Javascript",
        email: "chuksokpani@yahoo.com",
    };
    function myData(myArray) {
        console.log(
            "Hello World, this is [" +
                myArray.firstName +
                "] [" +
                myArray.lastName +
                "] with HNGi7 ID [" +
                myArray.ID +
                "] using [" +
                myArray.language +
                "] for stage 2 task. " +
                myArray.email,
        );
    }
    
    myData(data);