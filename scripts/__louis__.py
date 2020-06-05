def output(data):
    # set result
    result = f"Hello World, this is [{data['firstName']}] [{data['lastName']}] with HNGi7 ID [{data['id']}] using [{data['language']}] for stage 2 task. {data['email']}"

    return result
data = {}
data['firstName'] = 'Louis'
data['lastName'] = 'Ohaegbu'
data['language'] = 'Python'
data['id'] = 'HNG-04894'
data['email'] = 'uzochukwu.ohaegbu.197108@unn.edu.ng'
print(output(data))

output(data)
