Data = {
    "firstname": "Edwin",
    "lastname": "Christian",
    "ID": "HNG-02906",
    "language": "python",
    "email": "edwinchristian97@gmail.com",
}

output = "Hello World, this is [{}] [{}] with HNGi7 ID [{}] using [{}] for stage 2 task. {}".format(Data["firstname"],
                                                                                                  Data["lastname"],
                                                                                                  Data["ID"],
                                                                                                  Data["language"],
                                                                                                  Data["email"], )
print(output)