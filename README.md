# traitement management
Dashboard traitement management

-----
## Table of Contents

* [Features](#item1)
* [Quick Start](#item2)
* [Installation Guide](#item3)
* [User Guide](#item4)
* [Screenshots](#item5)

-----
<a name="item1"></a>
## Features:
* Admin Panel
  * traitement management
  * Role management
  * Auth (email,google,facbook)
  * activation account
  * send notification
  * send email
  * Google Analytics API integrated dashboard
  * Server side oriented datatables
  * Page, category, and traitement management
  * [Trumbowyg](https://alex-d.github.io/Trumbowyg/) as the WYSIWYG editor
  * [elFinder](https://studio-42.github.io/elFinder/) as the file manager
  * [Feather Icons](https://feathericons.com) as the icon package
* Front-end
  * Custom template with Bulma
  * View pages, traitement and categories

-----
<a name="item2"></a>
## Quick Start:

Clone this repository and install the dependencies.

    $ git clone https://github.com/soufiane-ekouines/traitement-management.git && cd traitement-management
    $ composer install

Run the command below to initialize. Do not forget to configure your .env file. 

    $ php artisan cms:initialize --seed

I  
    $ npm install
    $ npm run production

Finally, serve the application.

    $ php artisan serve

Open [http://localhost:8000](http://localhost:8000) from your browser. 
To access the admin panel, hit the link 
[http://localhost:8000/register](http://localhost:8000/register) from your browser.

-----
<a name="item3"></a>
## Installation Guide:

* [Step 1: Download the Repository](#step1)
* [Step 2: Initialize Application](#step2)
* [Step 3: Serve](#step3)
* [Step 4: Extras](#step4)

-----
<a name="step1"></a>
### Step 1: Download the Repository

Either Clone the repository using git clone: `https://github.com/soufiane-ekouines/traitement-management.git` 
or install via <a target="_blank" href="https://github.com/soufiane-ekouines/traitement-management/archive/master.zip">zip</a> and extract 
to any of your folders you wish.

-----
<a name="step2"></a>
### Step 2: Initialize the Application

To install the composer dependencies you need to have composer installed, if you don't have composer installed, 
then [follow these instructions](https://getcomposer.org/download/). Finally run, `composer install` in the `laravel-9-simple-cms` directory.

Run `php artisan cms:initialize --seed` which will ask you to create a database to migrate and seed our boilerplate application 
with fake data. Do not forget that all variables with `DB_` prefixes in your `.env` file relates to your database configuration. 
After configuring your `.env` file, with the proper data, you need to create the assets.

If you do not have node and npm installed, follow one of the techniques explained in this [link](https://gist.github.com/isaacs/579814).
Then, to install our boilerplate project's asset dependencies, run `npm install`. Finally to combine the 
javascript and style files run `npm run production`.

-----
<a name="step3"></a>
### Step 3: Serve

To serve the application, you can use `php artisan serve`, then open [http://localhost:8000](http://localhost:8000) 
from your browser. To access the admin panel, hit the link [http://localhost:8000/register](http://localhost:8000/register) 

-----
<a name="step4"></a>
### Step 4: Extras

If you want to use the Gmail client to send emails, you need to change the `MAIL_USERNAME` variable as your 
Gmail username without `@gmail.com` and password as your Gmail password, `MAIL_FROM_ADDRESS` is your 
Gmail account with `@gmail.com` and `MAIL_FROM_NAME` is your name that is registered to that Gmail account.

Finally, if you need to re-initialize our simple boilerplate CMS, just run the command below where it will also 
update the assets for you.

    $ php artisan cms:initialize --seed --node

-----

<a name="item4"></a>
## User Guide

* [How to Create a New Resource](#u1)

-----
<a name="u1"></a>
### How to Create a New Resource

Lets assume we want to create a new resource for fruits where it will have title, description and content attributes.

    $ php artisan cms:resource fruit --migrate



```


