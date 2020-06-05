import json as js
full_name = "Ayodele Ayomide Isaac"
user_id = "HNG-02670"
prog_lang = "Python"
email_address = "ayodeledprincipal@gmail.com"
outcome = 'Hello World, this is '  + full_name + ' with HNGi7 ID ' + user_id + ' using ' + prog_lang + ' for stage 2  ' + email_address
json_outcome = js.dumps(outcome)
print(json_outcome)