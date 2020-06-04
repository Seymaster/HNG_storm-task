import json

my_data = {
    "firstname": "Joseph",
    "lastname": "Ridge",
    "id": "HNG-04074",
    "language": "Python",
    "email": "josephridge18@gmail.com",
    "output": "Hello World, this is [Joseph] [Ridge] with HNGi7 ID [HNG-04074] using [Python] for stage 2 task. josephridge18@gmail.com"

}

json_parse = json.dumps(my_data)


for i in my_data:
    f_name = my_data["firstname"]
    l_name = my_data["lastname"]
    my_id = my_data["id"]
    lang = my_data["language"]
    my_email = my_data["email"]

# print("**********************************************")
print("Hello World, this is [%s] [%s] with HNGi7 ID [%s] using [%s] for stage 2 task. %s" % (
    f_name, l_name, my_id, lang, my_email))

# **********Thank oyu for thid opportunity i appreciate it !! ****************
