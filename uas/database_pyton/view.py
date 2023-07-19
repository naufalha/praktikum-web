import mysql.connector

# Replace 'your_username', 'your_password', 'your_database', and 'your_host' with actual values
db_config = {
    'user': 'root',
    'password': '',
    'database': 'uas_web',
    'host': 'localhost',
}

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
    fetch_data()
