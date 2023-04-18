# My DLSU Store

## Overview
My DLSU Store is an e-commerce platform that offers a selection of merchandise related to De La Salle University (DLSU) and its affiliated organizations. The website serves as an online store where customers can browse and purchase a wide range of products such as t-shirts, wristbands or baller bands, ID laces, caps, and jerseys, all featuring the distinctive logos and designs associated with DLSU. The project aims to provide a convenient and seamless shopping experience for customers by utilizing a user-friendly interface, allowing them to easily navigate the website and place orders for the products they want to purchase. 

## Authors
Roald Kyron S. Teves and Glenn Gerald G. Trillo


## Getting Started

MyDLSUstore
1.  Setting up the project:
    Make sure you have already installed Visual Studio Code, XAMPP, and php. Run the command pip install requirements.txt to get distributables and extensions           necessary to run the local website. Create a folder inside the following path: "C:\xampp\htdocs" name it into "mydlsustoreAPP". Download the zip file from this       repository and put it in the folder "mydlsustoreAPP" and extract the files on the FOLDER created. The following file path location shall then be:                     "C:\xampp\htdocs\mydlsustoreAPP".

2.  Install XAMPP, PHP and PHPMyAdmin :
    Firstly, install PHP on your system. You can do this by installing a WAMP (Windows), MAMP (Mac), or LAMP (Linux) stack. Once PHP is installed, you can install       PHPMyAdmin.

3.  Create a database:
    Open PHPMyAdmin and create a new database, in this instance for the file to work create database name "addtocart". You can do this by clicking on the "New"           button on the left-hand side menu and entering the name of your database. Go back to the folder where the files are, and select "cart.sql" and "product.sql" and     import both of the files on the new database "addtocart" created.

4.  Open Visual Studio Code:
    Open the application, and select file on the upper left portion of the app then "open folder". Go back to the folder location earlier with the following file         path:C:\xampp\htdocs\mydlsustoreAPP and open the folder. 
    

5.  Create a connection:
    Create a connection between the mydlsustoreAPP PHP code and the database you just created. In this instance navigate to "connection.php" file and remove the port     number "5306" found in line 9. This is recommended for default as it is normally connected to port 3306. Hoever, in instance that the port default does not work,     navigate to XAMPP go to the mysql section and change the my.ini file port number found in the config on your desired port number. In this instance we used port       5306.

6.  Test The Website:
    Open your preffered browser and navigate to the search section. Type in: " http://localhost/mydlsustoreAPP/Myhome.php ". Test the website Shop add to cart and       upload items!


## Requirements
In order to run My DLSU Store, please download requirements.txt and install the packages listed by entering `pip install -r requirements.txt` in the command prompt.


## Tested On 
insert which OS platform version, browser version,  python version
