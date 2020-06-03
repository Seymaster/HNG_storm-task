import json


user = {
    "name": "Keren-happuch Achoja",
    "id": "HNG-01748",
    "language": "Python",
    "email": "gkay260@gmail.com"
}


def identity():
    print("Hello World, this is " + user['name'] +  " with HNGi7 ID " + user['id'] + " using " + user['language'] + " for stage 2 task. " + user['email'])
    return

json_data = json.dumps(user)

identity()

