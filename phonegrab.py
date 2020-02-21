import os, sys
print("""
.--. .                 .--.         .
|   )|                :             |
|--' |--. .-. .--. .-.| --..--..-.  |.-.
|    |  |(   )|  |(.-':   ||  (   ) |   )
'    '  `-`-' '  `-`--'`--''   `-'`-'`-'
Termux-Lab              vk.com/termux_lab
""")

print("Starting...")
ports = input("[PORT]: ")
if ports == "":
    ports=8080
os.system("php -S localhost:"+str(ports))
