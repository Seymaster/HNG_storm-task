class HNGUser:
    def __init__(self, name,  email, language, id):
        self.name = name
        self.email = email
        self.language = language
        self.id = id

    def return_result(self):
        print(f'Hello World, this is {self.name} with HNGi7 ID {self.id} using {self.language}'
              f' for stage 2 task.{self.email}')


nameValue = "Abdulmateen Tairu"
emailValue = "tay2druh@gmail.com"
languageValue = "Python"
idValue = "HNG-00034"

user = HNGUser(nameValue, emailValue, languageValue, idValue)
user.return_result()
