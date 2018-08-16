<h1 align="center">Blog Management System</h1>

## Description

<p>It's an blog content management application . The admin of this application can create different blogs . Admin can update and delete blogs . The visitor part of this application maintains a good user interface . Visitors will be able to search blogs category-wise . Every blog contains various informations about that blog . </p>
<br>

## How To Run This Project

<p><b> Step - 1 :- </b> Download or clone this project from this repository . </p>

<p><b> Step - 2 :- </b> Go to your directory where your downloaded or cloned project is located . Open your terminal there . Gitbash termninal is preferred . Now run this command :- </p>

```
composer install 
```

<p><b> Step - 3 :- </b> Then run this command in your terminal :-  </p>

```
cp .env.example .env ( if using gitbash )
copy .env.example .env ( if using windows command prompt )
```

<p><b> Step - 4 :- </b> Now create a database named blog in your phpmyadmin . </p>

<p><b> Step - 5 :- </b> Now open .env file and configure it like this  </p>

```
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD= 
```

<p><b> Step - 6 :- </b> Then run this command in your terminal :-  </p>

```
php artisan key:generate
```

<p><b> Step - 7 :- </b> Then run this command in your terminal :-  </p>

```
php artisan migrate
```

<p><b> Step - 8 :- </b> Then run this command in your terminal :-  </p>

```
php artisan db:seed 
```

<p><b> Step - 9 :- </b> Now run this command in your terminal :-  </p>

```
php artisan serve
```
Now copy that localhost link and paste it in your browser .

<p><b> Step - 10 :- </b> Now to access the administrator account log in with password "password" and email "ashique@gmail.com" </p>
<br>



<h2 align="center">Project Screenshots</h2>

<p align="center">
  <img src="screenshots/blog1.JPG" width="400">
  <img src="screenshots/blog3.JPG" width="400">
</p>

<p align="center">
  <img src="screenshots/blog4.JPG" width="400">
  <img src="screenshots/blog2.JPG" width="400">
</p>  
