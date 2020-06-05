
first= 'Augustine'
last = "Ogiza"
id= "HNG-01658"
lang= "Python"
email= "Austinogiza@gmail.com"


def hng():
    text = (f'\n Hello World, this is {[first]} {[last]}  with HNGi7 ID {[id]} using  {[lang]} for stage 2 task {[email]}')
    file = open('name.txt', 'a')
    file.writelines(text)
    file.close()
    print(text)
    nfirst = [first]
    nlast = [last]
    nid = [id]
    nlang = [lang]
    nemail = [email]
    init = "\n Hello World, this is "+ str(first)+ " "+ str(last) + " with HNGi7 ID "+ str(id) + " using "+ str(lang) + " for stage 2 task " + str(email) 
    file = open('name.txt', 'a')
    file.writelines(init)
    print(init)

hng()