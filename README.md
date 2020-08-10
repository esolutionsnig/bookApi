# API Development Assignment

> The aim of this project is to implement a RESTful API that calls an external API service to get information about books

## Table of Contents
- [Installation](#installation)
- [Features](#features)
- [FAQ](#faq)
- [Test](#test)
- [Support](#support)
- [License](#license)

---

## Installation

- The recommended way of installing this project is by having Laravel setup and running Php version 7+
- Then clone this repository into your machine.

### Clone

- Clone this repo to your local machine using `https://github.com/esolutionsnig/book`

### Setup

- Clone GitHub repo for this project locally into a desired directory
- cd into your project directory
- Install Composer Dependencies by running 
    ```shell
    $ composer install
    ```
- Install NPM Dependencies
    ```shell
    $ npm install
    ```
- Create a copy of your .env file as this file is not included for security reasons
    ```shell
    cp .env.example .env
    ```
- This will create a copy of the .env.example file in your project and name the copy simply .env.
- Generate an app encryption key
    ```shell
    php artisan key:generate
    ```
- Create an empty database for our application
- In the .env file, add database information to allow Laravel to connect to the database
In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.
- Migrate the database by running this command
    ```shell
    php artisan migrate
    ```
    
---

## Features
- Post new book
- Update existing book information
- Delete existing book
- Read/View existing book information
- Search for an external book information
---

## Contributing

> To get started...

### Step 1

- **Option 1**
    - 🍴 Fork this repo!

- **Option 2**
    - 👯 Clone this repo to your local machine using `https://github.com/esolutionsnig/book`

### Step 2

- **CODE AWAY!** 

### Step 3

- 🔃 Create a new pull request using <a href="https://github.com/esolutionsnig/book/compare/" target="_blank">`https://github.com/esolutionsnig/book/compare/`</a>.

---

## FAQ

- **How do I run a test request?**
    - Install postman and make an API call to the your desired endpoint
- **How many endpoint can I call?**
    - IYou can call the following endpoints: 
     - Create New Book: POST request to http://127.0.0.1:8000/api/v1/books
     - Update Existing Book: PUT request http://127.0.0.1:8000/api/v1/books/:id
     - Get Single Book: GET request http://127.0.0.1:8000/api/v1/books/:id
     - Get All Books: GET request http://127.0.0.1:8000/api/v1/books
     - External Book Serach: GET request http://127.0.0.1:8000/api/external-books/{bookName}

---

## Test

- **Create New Book**
    - <img src="https://res.cloudinary.com/etechdataservices/image/upload/v1597066085/Post_mvknnj.png" title="Post" alt="post">

- **Update existing Book**
    - <img src="https://res.cloudinary.com/etechdataservices/image/upload/v1597066085/Update_qutnng.png" title="Update" alt="update">
 
- **Get One Book**
    - <img src="https://res.cloudinary.com/etechdataservices/image/upload/v1597066085/Get_One_lq8joc.png" title="GetOne" alt="getone">
 
- **Get All Books**
    - <img src="https://res.cloudinary.com/etechdataservices/image/upload/v1597066085/Get_All_zm0tdp.png" title="GetAll" alt="getall">
    
---

## Support

Reach out to me at one of the following places!

- Website at <a href="https://etech-ng.web.app/" target="_blank">`etech-ng.web.com`</a>
- Twitter at <a href="https://www.linkedin.com/in/ibeh-ernest-el/" target="_blank">`@ibeh-ernest-el`</a>


---

## License

[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

- **[MIT license](http://opensource.org/licenses/mit-license.php)**.
