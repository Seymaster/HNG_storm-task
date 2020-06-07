function StageTwo(myName, hngId, languageUsed, email){
    this.DevName=myName;
    this.hngId = hngId;
    this.language=languageUsed;
    this.email=email;
}

function helloDisplay(myName, myId, language, email){
    console.log(`Hello World, this is ${myName} with HNGi7 ID ${myId} using ${language} for stage 2 task.${email}`)
}

let putName="Opara Benjamin";
let putId="HNG-04503";
let putLanguage="JavaScript";
let putEmail="oparaben1@gmail.com";
let taskForStageTwo=new StageTwo(putName, putId, putLanguage, putEmail);
helloDisplay(taskForStageTwo.DevName, taskForStageTwo.hngId, taskForStageTwo.language, taskForStageTwo.email);
