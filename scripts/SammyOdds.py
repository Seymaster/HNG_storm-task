def myStatement():
    """ Output  """
    first_name = 'Samuel'
    last_name = 'Odundo'
    hng_id = 'HNG-00059'
    language = 'Python'
    email = 'samieodd@gmail.com'

    statement = 'Hello World, this is [{0}] [{1}] with HNGi7 ID [{2}] using [{3}] for stage 2 task. {4}'.format(
        first_name, last_name, hng_id, language, email)

    return statement


# print output of function and flush string buffer
print(myStatement(), flush=True)
