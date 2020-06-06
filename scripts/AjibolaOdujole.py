Python 3.8.3 (tags/v3.8.3:6f8c832, May 13 2020, 22:20:19) [MSC v.1925 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> import json as js
>>> fullName = "Ajibola Odujole"
>>> UserID= "HNG-01700"
>>> language="Python"
>>> email_address = "odujole.damilare@gmail.com"
>>> output = 'Hello World, this is ' + fullName + ' with HNGi7 ID ' + UserID + 'using ' + language + ' for stage 2 ' + email_address
>>> json_output = js.dumps(output)
>>> print(json_output)
"Hello World, this is Ajibola Odujole with HNGi7 ID HNG-01700using Python for stage 2 odujole.damilare@gmail.com"
>>> 
