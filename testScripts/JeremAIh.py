def details():
	data = {
		"first_name": "Jeremiah",
		"last_name": "Esieboma",
		"id": "HNG-01997",
		"language": "Python",
		"email": "esiebomaj@gmail.com"
	}

	text = "Hello World, this is [{}] [{}] with HNGi7 ID [{}] using [{}] for stage 2 task. {}".format(data['first_name'], data['last_name'], data['id'], data['language'], data['email'])
	print(text)
	return text

details()
