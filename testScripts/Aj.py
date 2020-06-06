  
import json

x = {
  "firstName": "aj",
    "lastName": "Khalil",
    "language": "Python",
    "id": "HNG-05497",
}

# convert into JSON:
y = json.dumps(x)

# the result is a JSON string:
print("Hello World, this is [aj] [Khalil] with HNGi7 ID [HNG-05497] using [Python] for stage 2 task. samwel.naftali@strathmore.edu")
