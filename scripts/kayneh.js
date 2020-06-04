var firstName = '[Kenechukwu]';
var lastName = '[Mbanefo]';
var id = '[HNG-00902]';
var language = '[Javascript]';

function generateDetail(myFirstName, myLastName, myId, myLanguage) {
	var result = ``;
	result += (`Hello World, this is ${myFirstName} ${myLastName} with HNGi7 ID ${myId} using ${myLanguage} for stage 2 task. ifeanyimbanefo@gmail.com`);

	return result;
}

console.log(generateDetail(firstName,lastName,id,language));
