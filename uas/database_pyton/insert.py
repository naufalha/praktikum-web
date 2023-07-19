import mysql.connector

# Replace 'your_username', 'your_password', 'your_database', and 'your_host' with actual values
db_config = {
    'user': 'root',
    'password': '',
    'database': 'uas_web',
    'host': 'localhost',
}

def insert_data(name, email , phone):
    try:
        # Connect to the MySQL database
        conn = mysql.connector.connect(**db_config)

        # Create a cursor object
        cursor = conn.cursor()

        # Prepare the INSERT query
        query = "INSERT INTO students (name,email,phone) VALUES (%s, %s, %s)"

        # Data to be inserted
        data = (name, email, phone)

        # Execute the INSERT query with the data
        cursor.execute(query, data)

        # Commit the changes to the database
        conn.commit()

        print("Data inserted successfully!")

    except mysql.connector.Error as err:
        print(f"Error: {err}")
        # Rollback the changes in case of an error
        conn.rollback()

    finally:
        # Close the cursor and database connection
        cursor.close()
        conn.close()
def fetch_data():
    try:
        # Connect to the MySQL database
        conn = mysql.connector.connect(**db_config)

        # Create a cursor object
        cursor = conn.cursor()

        # Execute a SELECT query
        query = "SELECT * FROM students"
        cursor.execute(query)

        # Fetch all rows from the result
        rows = cursor.fetchall()

        # Print the fetched data
        for row in rows:
            print(row)

    except mysql.connector.Error as err:
        print(f"Error: {err}")

    finally:
        # Close the cursor and database connection
        cursor.close()
        conn.close()

if __name__ == "__main__":
    # Replace 'John', 25, and 'john@example.com' with your desired data
    insert_data('John', 25, 'john@example.com')
    while True:
        print("1. Insert Data")
        print("2. Lihat Data")
        print("3. Exit")
        pilih = input("Pilih Menu : ")
        if pilih == "1":
            name = input("Masukan Nama : ")
            email = input("Masukan email : ")
            phone = input("Masukan no telp : ")
            insert_data(name, email, phone)
        elif pilih == "2":
            fetch_data()
        elif pilih == "3":
            exit()
        else:
            print("Pilih Menu Yang Benar")
