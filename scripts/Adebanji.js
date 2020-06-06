let internInfo = {firstName: 'Adebanji',lastname: 'Akinnukawe', ID: 'HNG-06005', language: 'Javascript', email: 'henryirons@yahoo.com'}

function info () {
  const str =
  'Hello World, this is [' + internInfo.firstName + '] [' + internInfo.lastname + '] with HNGi7 ID [' + internInfo.ID + '] using [' + internInfo.language + '] for stage 2 task. ' + internInfo.email

  console.log(str)
}

info()
