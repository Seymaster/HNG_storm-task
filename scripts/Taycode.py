class HNGUser:
    def __init__(self, first_name, last_name,  email, language, id):
        self.first_name = first_name
        self.last_name = last_name
        self.email = email
        self.language = language
        self.id = id

    def return_result(self):
        print(f'Hello World, this is [{self.first_name}] [{self.last_name}] with HNGi7 ID [{self.id}] using [{self.language}]'
              f' for stage 2 task. {self.email}')


firstNameValue = "Abdulmateen"
lastNameValue = "Tairu"
emailValue = "tay2druh@gmail.com"
languageValue = "Python"
idValue = "HNG-00034"

user = HNGUser(firstNameValue, lastNameValue, emailValue, languageValue, idValue)
user.return_result()
