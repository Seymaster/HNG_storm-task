import json

full_name='Bashir Oyekanmi Danjuma'
identity='HNG-01092'
language='Python'

output=('Hello World, this is ' + full_name + ' with HNGi7 ID '+ identity+ ' using '+ language+ ' for stage 2 task')


json_output=json.dumps(output)
print(json_output)
