# Book Your Book
As it is said, books are the best friend of humans. But why to buy one when you can simply arrange it for the time when you need it. **Book Your Book** is a student community web app which makes it easier for the students to access the books they want. Surely, the internet has the pdf version of almost every book out there, but every book reader knows the value of an actual book in hand.

## Description
This project is a prototype for a student community webapp. The key features of this web app are as follows:

* Sign-Up using official mail ID verified by the institute and the first time password is sent on this email ID itself, hence preventing any fake accounts or unauthorised access.
* Library section to browse among all the books available with the students in the institute.
* Option to upload or request for books.
* Know who has the required book nearby you, and carry out the lend-borrow transaction.
* Keep a track of the books lent, uploaded and borrowed by you in your profile.
* A highly thought-out points system to encourage sharing of books and discourage any damage to them.

## Installation

- Download xampp from the following link: https://www.apachefriends.org/index.html

- For linux users, follow the below steps for installation after downloading:

```sh
$  cd Downloads
```
![Image](https://www.wikihow.com/images/thumb/a/a5/Install-XAMPP-on-Linux-Step-5-Version-2.jpg/aid571845-v4-728px-Install-XAMPP-on-Linux-Step-5-Version-2.jpg.webp)

If your default downloads location is in a different folder, you'll have to change the directory to that folder.
```sh
$  sudo chmod +x xampp-linux-x64-7.4.6-0-installer.run
```
![Image](https://www.wikihow.com/images/thumb/3/30/Install-XAMPP-on-Linux-Step-6.jpg/aid571845-v4-728px-Install-XAMPP-on-Linux-Step-6.jpg.webp)

*Note : The version of XAMPP you will download might be different, so change the version in this command accordingly.*
```sh
$  sudo ./xampp-linux-x64-7.4.6-0-installer.run
```
![Image](https://www.wikihow.com/images/thumb/6/61/Install-XAMPP-on-Linux-Step-7.jpg/aid571845-v4-728px-Install-XAMPP-on-Linux-Step-7.jpg.webp)

You'll be asked for your system's password

Follow the installation prompts. Once the installation window appears, do the following:
- Click Next three times.
- Uncheck the "Learn more about Bitnami for XAMPP" box.
- Click Next, then click Next again to begin installing XAMPP.

![Image](https://www.wikihow.com/images/thumb/6/63/Install-XAMPP-on-Linux-Step-9.jpg/aid571845-v4-728px-Install-XAMPP-on-Linux-Step-9.jpg.webp)
![Image](https://www.wikihow.com/images/thumb/5/5c/Install-XAMPP-on-Linux-Step-11.jpg/aid571845-v4-728px-Install-XAMPP-on-Linux-Step-11.jpg.webp)

To start XAMPP run the following and the command will return a list of running services:
```sh
$  sudo /opt/lampp/lampp start
```
![Image](https://i.ibb.co/VYxCbn2/Screenshot-from-2020-06-10-16-38-09.png)

Now, go to http://localhost/phpmyadmin/ in your browser, and click on databases. Create a database "dbslab".

![Image](https://i.ibb.co/QDyfrdj/Screenshot-from-2020-06-10-16-52-59.png)

Next, go to Import -> Browse your computer: -> Book-Your-Book -> database -> dbslab.sql. Click on Open button. 

![Image](https://i.ibb.co/HqbhghS/Screenshot-from-2020-06-10-16-56-26.png)

Now, change the permission of the directory /opt/lampp/htdocs to 777, and paste the Book-Your-Book folder.
```sh
$  sudo chmod 777 /opt/lampp/htdocs
```
![Image](https://i.ibb.co/xsMTPNt/Screenshot-from-2020-06-10-17-08-03.png)

Now, finally to go http://localhost/Book-Your-Book/ in your browser to use the website.

![Image](https://i.ibb.co/NL5LSZJ/Screenshot-from-2020-06-10-17-10-16.png)

In order to stop the server, run the following command in the terminal.
```sh
$  sudo /opt/lampp/lampp stop
```
![Image](https://i.ibb.co/N3vrCnd/Screenshot-from-2020-06-10-17-11-53.png)

