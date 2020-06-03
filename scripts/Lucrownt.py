import json

lucrownt_info = {
    'file' : "lucrownt.py"
    'output' : 'Hello World! This is Lukman Adeoti with HNGi7 ID HNG-01721 using Python for stage 2 task.'
    'full_name' : "Lukman Adeoti",
    'id' : "HNG-01721",
    'email_address' : "lukmanademolaadeoti@gmail.com",
    'language' = "python",
    'status' : ""
    }

data = json.dumps(lucrownt_info)

print(data)
