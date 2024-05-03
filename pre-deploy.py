
new_address = input("enter address that will replace (Ex: localhost:8000):")
old_address = "www.directto.io"

with open("./configs/db/directto.sql", 'r') as file:
    filedata = file.read()

filedata = filedata.replace(old_address, new_address)

with open("./configs/db/directto.sql", 'w') as file:
    file.write(filedata)
print("Address successfully replaced")
