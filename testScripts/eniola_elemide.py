# defining user data in a dictionary
details = {
    "firstname":"[Eniola]",
    "lastname":"[Elemide]",
    "hngi7_id":"[HNG-03752]",
    "programming_language":"[Python]",
    "mail":"eniolaelemide@gmail.com"
    }
def hng_task2(details):
    """
    Returns personal information on hngi7 intern. 
    """

    #returns data in specified format
    return ("Hello World, this is "+details["firstname"]+
    " "+ details["lastname"]+" "+
    "with HNGi7 ID "+details["hngi7_id"]+" using "+
    details["programming_language"]+" "+"for stage 2 task. "+details["mail"])

intern_info=hng_task2(details)
print(intern_info)











