import json
firstname = "David"
lastname = "Brown"
hngid = "HNG -03338"
language = "Python"

output = "Hello World, this is [" + firstname + "] [" + lastname + "] with HNGi7 ID [" + hngid + " using [" + language + "] for stage 2 task. dayvedbrown257@gmail.com"

print(json.dumps(output))
