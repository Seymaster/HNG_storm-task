def HNG_2():
    details = {
        "name1": "Chukwuemeka",
        "name2": "Nwaoma",
        "HNG_ID": "HNG-05790",
        "programming_language": "Python",
        "mail": "joelchukks@gmail.com"
    }

    output = "Hello World, this is [{}] [{}] with HNGi7 ID [{}] using [{}] for stage 2 task. {}".format(details['name1'], details['name2'], details['HNG_ID'], details['programming_language'], details['mail'])
   
    print(output)
    return output

HNG_2()