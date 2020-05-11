import json

first_name = 'Muhammed Luqman'
last_name = 'Bolaji' 
hng_id = 'HNG-01465'
language = 'Python'
email = 'dasuccessblogger@gmail.com'
my_info = 'Hello World, this is ['+first_name+'] ['+last_name+ ']' ' with HNGi7 ID ['+hng_id+ '] using ['+language+ '] for stage 2 task. ' +email+ ''

file = json.dumps(my_info)
print(file) 

