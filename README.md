# connect to db (sql-oop php)
This file aims to help you during your practice projects locally. With just one click, it connects to your database and creates the tables automatically.

The main goal is to avoid having to set up database connections and create tables from scratch every time you start a new practice project.

Another advantage is that the SQL query used for creating tables is saved within this script, so over time, if you forget the structure or accidentally delete the tables, you can easily restore them.

**Please note:**  
This solution is only for practice purposes and should not be used in real production environments. It is designed solely to make your local development easier during learning and experimentation.

**How to Use**:
stage1:<br>
Inside your project’s database/creat_table folder, create a new PHP file.
Name the file in the format: [sequence_number].[table_name].php.
Examples: 1.users.php or 2.products.php.
Paste SQL Code:
Paste the SQL CREATE TABLE statement for the table you want to create inside the PHP file you just created.

stage2=>Execute:<br>
Open your web browser and navigate to the following URL:
yourdomain.com/yourproject/database/migrate.php

After the page loads, your tables should be created. (A page refresh might be necessary).
Important Note: This method is strictly for practice projects and local development (localhost) and should not be used in a production environment.

Enjoy coding!

instagram: saeedrasaey <br>
website: saeedrasaey.ir

= version 1.0.0 =
public basic project
