def HNGi7():
    firstName = 'Promise'
    lastname = 'Mpamaugo'
    ID = 'HNG-05001'
    lang = 'Python'
    email = 'promise.course@gmail.com'
    # The '%' operator is used to format a set of variables that are enclosed in a tuple.
    script = 'Hello World this is [%s] [%s] with HNGi7 ID [%s] using [%s] for stage 2 task. %s' % (
        firstName, lastname, ID, lang, email)
    return script


HNGi7()
print(HNGi7())