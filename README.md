# HandMeDown
A Platform to Buy/Sell Used Books

In this platform users willing to sell their books can set their own price and state the book condition, if any customer intends to buy the book he/she pays the price set by the seller plus an extra website maintenance fee, thus making online purchasing cheaper than the offline one. We would provide general registration and login functionality for users. They can browse through the website , search for their required books and consequently request the book from the student who has listed it on the website. Similarly users who intend to sell their books can upload the details of the books and post online for potential customers to view and book if required. We added an admin portal to monitor and view all operations in the system. Using our proposed web application customers can search through a varied range of books and could also interest themselves in certain books they were earlier unaware of. This way through our proposed system we intend to facilitate convenient online trading of books of all types be it academic books, novels or comics and so on.

# Installation

1. Install XAMPP or WAMPP.

2. Open XAMPP Control panal and start [apache] and [mysql] .

3. Download project from github(https://github.com/aditi28-2000/HandMeDown.git)  
    OR follow gitbash commands
    
    i>cd C:\\xampp\htdocs\
    
    ii>git clone https://github.com/aditi28-2000/HandMeDown.git
    
4. extract files in C:\\xampp\htdocs\.

5. open link localhost/phpmyadmin

6. click on new at side navbar.

7. give a database name as (hmd) hit on create button.

8. after creating database name click on import.

9. browse 'hmd.sql' file from the project folder.

10. after importing successfully.

11. open any browser and type http://localhost/HMDAPP/hmd/index.php {can edit based on your project folder location}

12. first register and then login

13. admin login details, username = admin and Password=test.

14. Can perform the same steps for MacOS, the project runs on both Windows or MacOS



# Features

1. Add your used books that needs to be sold by logging into the user portal under 'Add New Book' section from 'My Administration' item in Navbar.

2. Upload current image of the book and set the selling price & fill all required details.

3. Students willing to buy can either directly search for their required book or use the category select feature to scroll through all available books.

4. Students can request books from other student who has listed it on the website and can directly message them regarding the same through the user portal.

5. Users can view their added books and view details of the students who have requested a particular book from them under 'My Administration' section alomg with any messages from the students.

6.  Additional feature- Queries of books sent to admin will be visible to all users in case the book has not been listed on the website and a user has it, seeing the query for the book he/she can upload it for sell if they want.

7.  Admin portal is added to view and monitor all users registered, books added and admin has the functionalities to add authors, book publications , FAQs, etc to the website for users' convinience.

# Constraints

1. Hand-me Down runs primarily as a webpage hosted locally.
2. All the details are stored on the host’s computer locally in the form of sql file.
3. The webpage will validate the user’s identity before allowing them to proceed through the website. Since its majorly for CWRU students the user login validation is done with the Case ID.



