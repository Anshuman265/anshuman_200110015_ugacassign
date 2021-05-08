"""
This is the file which uses the database and logs the user in!
"""
# importing the sqlite3 library in python
import sqlite3
# importing the stdiomask library to mask the password
import stdiomask
# Establishing connection to our database
con = sqlite3.connect('users.db')
# Creating a cursor here
c = con.cursor()
# Welcome message
print("""
---------------------------------------------WELCOME!-------------------------------------------------
Hope you remember your username and password :)
NOTE: The username and password both are case sensitive!
""")
# Taking the input of username from the user
username = input("Enter username and press enter: ")
# Taking the input of password from the user using the stdiomask
pwd = stdiomask.getpass(prompt='Enter password and press enter: ')
# Typing in the query using f-strings
query = f"SELECT username FROM users WHERE username = '{username}' AND pass = '{pwd}'"
# Running the query
c.execute(query)
# Checking whether the username and password match or not
if not c.fetchone():
    print("Login failed! Check username and password")
else:
    print(f'Welcome back {username}! Good to see you!')
print("""
-------------------------------------------SEE YOU AGAIN! --------------------------------------------
""")
