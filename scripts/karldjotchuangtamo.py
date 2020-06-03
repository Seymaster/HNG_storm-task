'''
Script to Print "Hello World, this is [full name] with 
HNGI7 ID [ID] using [Language] for stage 2 task"

'''

import json

full_name = 'Karl Djotchuang Tamo'
id = 'HNG-05439'
language = 'Python'
email = 'djotchuangtamo@gmail.com'

text_string = 'Hello World, this is ' + full_name + \
    ' with HNGi7 ID ' + id + ' using ' + language + ' for stage 2 task.' + email

text_string_json = json.dumps(text_string)
print(text_string_json, flush=True)
