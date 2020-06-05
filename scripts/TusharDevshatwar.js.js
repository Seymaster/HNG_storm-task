function  dataString(){
    var tusharData = {
        firstName: '[Tushar]',
        lastName: '[Devshatwar]',
        id: '[HNG-03283]',
        language: '[JavaScript]',
        email: 'tushardevshatwar2@gmail.com'
    };

    return  'Hello World, this is ' + tusharData.firstName+ ' ' +tusharData.lastName + ' with HNGi7 ID ' + tusharData.id + ' using ' + tusharData.language + ' for stage 2 task. ' + tusharData.email;
    }
    console.log(dataString());
