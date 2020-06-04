import json

# a Python object (dict):
x = {
  "firstName": "Abdulazeez",
    "lastName": "Yusuf",
    "language": "Python",
    "id": "HNG-02070",
}

# convert into JSON:
y = json.dumps(x)

# the result is a JSON string:
print("Hello World, this is [Abdulazeez] [Yusuf] with HNGi7 ID [HNG-02070] using [Python] for stage 2 task. ayinla.olanrewaju@gmail.com")
