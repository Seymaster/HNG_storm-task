import json
wadek_info = {
	'file': "wadek_00080.py",
	'name': "Derrick Wadek",
	'output': 'Hello World, this  is [Derrick Wadek] with HNGi7 ID  [HNG-00080] using [Python] for stage 2 task. derrickwadek@mail.com',
	'id': "HNG-00080",
	'email': "derrickwadek@mail.com",
	'language': "Python",
	'status': ""
}
data = json.dumps(wadek_info)
print(data)
