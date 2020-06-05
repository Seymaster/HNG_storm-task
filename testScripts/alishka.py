import json
a = {
    "first_name": "Alinoor",
    "last_name": "Shukri",
    "email": "ashukri@kabarak.ac.ke",
    "hng_id": "HNG-01142",
    "language": "Python",
}
b = json.dumps(a)

print(
    "Hello World, this is [Alinoor] [Shukri] with HNGi7 ID [HNG-01142] using [Python] for stage 2 task. ashukri@kabarak.ac.ke")
