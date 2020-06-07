def myinfo():
    info = {
        "name":"[Ayomide] [Odukoya]",
        "ID":"HNG-01201",
        "email":"odukoyaayomide81@hotmail.com",
        "language":"Python"
    }
    #concatenate string
    string = "Hello World, this is {name} with HNGi7 ID [{ID}] using [{language}] for stage 2 task. {email}".format(
        name=info["name"], ID=info["ID"], email=info["email"], language=info["language"])

    print(string) #print string

    return string


myinfo() #call function