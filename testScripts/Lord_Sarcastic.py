def details():
	data = {
		"first_name": "Ayodeji",
		"last_name": "Adeoti",
		"id": "HNG-04049",
		"language": "Python",
		"email": "adeoti.15.jude@gmail.com"
	}

	text = "Hello World, this is [{}] [{}] with HNGi7 ID [{}] using [{}] for stage 2 task. {}".format(data['first_name'], data['last_name'], data['id'], data['language'], data['email'])
	print(text)
	return text

if __name__ == '__main__':
	details()
