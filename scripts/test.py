import json

# a Python object (dict):
x = {
  "firstName": "Oluwayanmife",
    "lastName": "Akeju",
    "language": "Python & JS",
    "id": "HNG-00197",
}

# convert into JSON:
y = json.dumps(x)

# the result is a JSON string:
print(y) ;
