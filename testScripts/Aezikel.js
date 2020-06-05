var first = '[Ezekiel]';
var last = '[Owumi]';
var id = '[HNG-05357]';
var lang = '[Javascript]';
var email = 'donzikky1@gmail.com'

function generateDetail(firstName, lastName, id, language,mail) {
	var result = ``;
	result += (`Hello World, this is ${firstName} ${lastName} with HNGi7 ID ${id} using ${language} for stage 2 task. ${mail}`);

	return result;
}

console.log(generateDetail(first,last,id,lang,email));