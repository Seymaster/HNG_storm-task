def mydetails():

    first_name = "Yetunde"
    last_name = "Akinwale"
    hngi7_id = "HNG-00286"
    email_address = "akinwaleyetunde1@gmail.com"
    language = "python"

    result = 'Hello World, this is [{}] [{}] with HNGi7 ID [{}] using [{}] for stage 2 task. {}' .format(first_name, last_name, hngi7_id, language, email_address)
    print(result)
    return result
mydetails()