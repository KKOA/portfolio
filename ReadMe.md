This page is an introduction to my Wi-Fi, WiMAX & LTE E-learning site incorporates PHP, JavaScript, Jquery, SCSS, Google fonts, Bootstrap, font-awesome.

I am only including a portion of Wi-Fi, WiMAX & LTE E-Learning Aid project, the rest is still under construction and as such the only link that is currently working is the link to the quiz which can found under summary.

Do not change file structure as this will break the code. The files rely on the constant in “config.php” for file locations.

Quiz Directory

The quiz is on network technologies & incorporates PHP, MySQL and JavaScript. Please note this require a MySQL database, see “build instruction” for details. Top and bottom navigations as well as any breadcrumbs will not work as I have not provided the other pages.

(JavaScript enabled only) Only one question is visible at any one time. Use next and previous to navigate through the quiz. If JavaScript is disabled all questions are visible on the page. To view your results, click the result button. After clicking the result button, you will be taken to a separate page where the results of the quiz are displayed. You may repeat the quiz as many times as you want. Quiz results are not currently stored.

Build Instructions Questions and answers are stored in MySQL database. I have provided the SQL to create this table "test" in “test.sql”.

To populate the table, import the CSV provided (“test.csv”). Do forgot to remove the column header from csv before populating the table. You will also need to change DB_HOST, DB_USER, DB_PASS, DB_NAME in "includes/config.php" to your database configurations.
