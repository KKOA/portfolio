This page is an introduction to my Wi-Fi, WiMAX & LTE E-learning site incorporates PHP, JavaScript, Jquery, SCSS, Google fonts, Bootstrap, font-awesome.

I am only including a portion of Wi-Fi, WiMAX & LTE E-Learning Aid project, the rest is still under construction and as such the only link that is currently working is the link to the quiz which can found under summary.

Note

Because dropdown menu relies on JavaScript, you won't be able to navigate to quiz page from main navigation if you have JavaScript disabled or switch off.

By default, this project expects that the files are stored in a folder called 'portfolio-15-05-2017' in the root directory of your web server.

Any changes to the directory need to reflect changes to the config.php in the 'includes' directory. The is because the files rely on the constant in “config.php” for the file locations.

Quiz Directory

The quiz is on network technologies & incorporates PHP, MySQL and JavaScript. Please note this require a MySQL database, see “build instruction” for details. Top and bottom navigations as well as any breadcrumbs will not work as I have not provided the other pages.

(JavaScript enabled only) Only one question is visible at any one time. Use next and previous to navigate through the quiz. If JavaScript is disabled all questions are visible on the page. To view your results, click the result button. After clicking the result button, you will be taken to a separate page where the results of the quiz are displayed. You may repeat the quiz as many times as you want. Quiz results are not currently stored.

Build Instructions Questions and answers are stored in MySQL database. I have provided the SQL to create and populate this table "quiz" in “quiz.sql”.

You will also need to create file called dbconfig.php in includes. Inside you will need to define the following constant DB_HOST, DB_USER, DB_PASS, DB_NAME to hold to your database configurations.
