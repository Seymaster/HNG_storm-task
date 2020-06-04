def details():
	data = {
		"first_name": "Ayodeji",
		"last_name": "Adeoti",
		"id": "HNG-04049",
		"language": "Python",
		"email": "adeoti.15.jude@gmail.com"
	}

	text = f"Hello World, this is [{data['first_name']}] [{data['last_name']}] with HNGi7 ID [{data['id']}] using [{data['language']}] for stage 2 task. {data['email']}"
	print(text)
	return text

if __name__ == '__main__':
	details()
