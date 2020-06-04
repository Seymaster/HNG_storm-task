# Program to return task 2 string


def get_string():
    file = "osebi_adams.py"
    name = "[Osebi] [Adams]"
    id = "[HNG-04874]"
    email = "ijese.company@gmail.com"
    language = "[Python]"
    status = "Pass"
    output = ("Hello World, this is %s with HNGi7 ID %s using %s for stage 2 task. %s" % (
        name, id, language, email))

    print(output)


get_string()