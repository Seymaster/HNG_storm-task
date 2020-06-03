import json


"""
This task basically requires us to print certain information to the HTML Page

This should return "Hello World, this is [full name] with HNGi7 ID [ID] using [language] for stage 2 task". 
That means that you have to define a function.
data = "Hello World, this is {} with HNGi7 ID {} using [{}] for stage 2 task.".format(full_name, id, lang)
"""

#Creating a funtion 
# def info():
#     data = {
#         'firstName' : 'Uzoamaka',
#         'lastName' : 'Nwaigwe',
#         'id' : 'HNG-1366',
#         'language': 'Python'
#     }
    
#     print(json.dumps(data, indent=4))
#     return json.dumps(data, indent=4)

# info()

#displaying data

firstName  = 'Uzoamaka'
lastName  = 'Nwaigwe'
id  = 'HNG-1366'
language = 'Python'
email = 'ujames41@gmail.com'
fullName = firstName +" " +lastName

data = "Hello World, this is {} with HNGi7 ID {} using [{}] for stage 2 task.".format(fullName, id, language)

print(data)