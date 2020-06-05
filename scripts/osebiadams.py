import json


# Python script showing use of json package

def get_string():
    # Creating and initializing variables
    file = "myScript.py"
    name = "Osebi Adams"
    Id = "HNG-04874"
    email = "ijese.company@gmail.com"
    language = "Python"
    status = "Pass"
    output = ("Hello World, this is %s with HNGi7 ID %s using %s for stage 2 task. %s" % (
        name, Id, language, email))

    # Key: value mapping in a dict and appending it to a list
    data = {'myData': []}
    data['myData'].append({
        "file": file,
        "output": output,
        "name": name,
        "id": Id,
        "email": email,
        "language": language,
        "status": status
    })

    # Conversion to JSON done by dumps() function
    data = json.dumps(data, indent=4)

    # Parse myData
    data = json.loads(data)
    for i in data['myData']:
        output = (i['output'])
        print(output)
        return output


# print(get_string())
get_string()