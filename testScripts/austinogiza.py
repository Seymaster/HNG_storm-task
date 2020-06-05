


def hng():
    
    first= 'Augustine'
    last = "Ogiza"
    id= "HNG-01658"
    lang= "Python"
    email= "Austinogiza@gmail.com"
    text = (f'\n Hello World, this is [{first}] [{last}]  with HNGi7 ID [{id}] using  [{lang}] for stage 2 task [{email}]')
    file = open('name.txt', 'a')
    file.writelines(text)
    file.close()
    print(text)
    return text
    
hng()