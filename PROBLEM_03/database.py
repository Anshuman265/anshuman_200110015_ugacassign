"""
This is the file in which database has been built and used for learning SQLite3.
"""
import sqlite3
# Connecting with the database
con = sqlite3.connect('users.db')  # If the database does not exist then it will create one within the same directory
# Cursor tells the database what we want to do.
# Creating a cursor
c = con.cursor()
'''
multiple_users = [
                            ('Kim','12345'),
                            ('Jim','123456'),
                            ('Pam','1234567'),
                            ('Phyllis','12345678')
                            ('Oscar', '123456789')
                ]
 The column names are ['username', 'pass']
# Query the Database
c.execute("SELECT rowid, * FROM users ORDER BY rowid DESC")
c.execute("INSERT INTO users  VALUES ('Sachin','sachin@1234')")
c.execute("INSERT INTO users  VALUES ('Ramysri','ramysri$1234')")
-----------------------------------------------------------------------------------------------
For printing each and every record in the our table
d = con.cursor()
d.execute("SELECT * FROM users")
items = d.fetchall()
for x in items:
    print(f'Username is {x[0]} and the password is {x[1]}')
------------------------------------------------------------------------------------------------
For multiple records:-
# c.executemany("INSERT INTO users VALUES  (?,?)",multiple_users)#Here (?,?) are two placeholder
-------------------------------------------------------------------------------------------------
# INSERT INTO (table_name) VALUES ('Username','Password') for a single record
# c.execute("INSERT INTO users  VALUES ('Dom','1234')")
-------------------------------------------------------------------------------------------------

d = con.cursor()
d.execute("SELECT * FROM users")
items = c.fetchall()
for x in items:
    print(x)
'''
# Committing the commands.
con.commit()
# Closing our connection to the database
con.close()
