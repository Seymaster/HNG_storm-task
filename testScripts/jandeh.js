function  janeString(){
    var bioData = {
        firstName: '[Ebele]',
        lastName: '[Andeh]',
        id: '[HNG-04391]',
        language: '[JavaScript]',
        email: 'andehjane@gmail.com'
    };
    
    return  'Hello World, this is ' + bioData.firstName + ' ' + bioData.lastName + ' with HNGi7 ID ' + bioData.id + ' using ' + bioData.language + ' for stage 2 task. ' + bioData.email;
    }
    console.log(janeString());
    