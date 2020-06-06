import json

# a Python object (dict):
x = {
  "firstName": "Oluwasanmi",
    "lastName": "Awelewa",
    "language": "python",
    "id": "HNG-03199",
}

# convert into JSON:
y = json.dumps(x)

# the result is a JSON string:
print("Hello World, this is [Oluwasanmi] [Awelewa] with HNGi7 ID [HNG-03199] using [python] for stage 2 task. supersanmi01@gmail.com")
