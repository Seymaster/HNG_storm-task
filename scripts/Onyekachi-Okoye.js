const firstname = 'Onyekachi';
const lastname = 'Okoye';
const HNG_id = 'HNG-00098';
const p_language = 'Javascript';
const email = 'onyekachi578@gmail.com';

function outputToConsole() {
    const output = `Hello World, this is [${firstname}] [${lastname}] with HNGi7 ID [${HNG_id}] using [${p_language}] for stage 2 task. ${email}`;
    console.log(output);
    return output;
};

outputToConsole();