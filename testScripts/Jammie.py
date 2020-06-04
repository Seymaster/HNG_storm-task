import json


"""
This task basically requires us to print certain information to the HTML Page

This should return "Hello World, this is [full name] with HNGi7 ID [ID] using [language] for stage 2 task". 
That means that you have to define a function.
data = "Hello World, this is {} with HNGi7 ID {} using [{}] for stage 2 task.".format(full_name, id, lang)


"Hello World, this is [firstName] [LastName] with HNGi7 ID [HNG-0000] using [PHP] for stage 2 task. yanmifeakeju@gmail.com";
"""

#Creating a funtion 
def info():
    data = {
        'firstName' : 'Uzoamaka',
        'lastName' : 'Nwaigwe',
        'id' : 'HNG-01366',
        'language': 'Python',
        'email': 'ujames41@gmail.com'
    }
    output = "Hello World, this is [{}] [{}] with HNGi7 ID [{}] using [{}] for stage 2 task. ujames41@gmail.com".format(data['lastName'], data['firstName'], data['id'], data['language'])

    return output

print(info())

