

def details():
    data = {
      "first_name": "Gabriel",
      "last_name": "Ibanga",
      "id": "HNG-05494",
      "language": "Python",
      "email": "ibgabcy@gmail.com"
    }

    text = "Hello World, this is [{}] [{}] with HNGi7 ID [{}] using [{}] for stage 2 task. {}".format(data['first_name'], data['last_name'], data['id'], data['language'], data['email'])
    print(text)
    return text

if __name__ == '__main__':
	  details()
