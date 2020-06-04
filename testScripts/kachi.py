#This is the task to enable me be promoted to stage 2
#The Task is to write a script that will be accessed by 
#php file from the team lead and print
#My name, ID and task

def details():
    first_name = 'Godwin'
    last_name = 'Eze'
    language = 'Python'
    HNGi7_ID = 'HNG-00751'
    email = 'godwinkachee@gmail.com'
    print(f'Hello World, this is [{first_name}] [{last_name}] with HNGi7 ID [{HNGi7_ID}] using [{language}] for stage 2 task. {email}')
    return()

#call the function
details()