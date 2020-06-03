import json

"""
this is the second task of the HNG intenship program. we are expected to output
our name, id and language
"""

def HNG():
    data = {
        "firstName": "Stanley",
        "lastName": "Ekwebelem",
        "ld": "HNG 10260",
        "language": "Python"
    }
    info = json.dumps(data, indent=4)
    print(info)

HNG()

