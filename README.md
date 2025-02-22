# Miniblog

Welcome to Miniblog, a simple blogging website built with PHP. This project aims to teach you some basic functions of the PHP language, as well as HTML, CSS, and JavaScript.

## Table of Contents

- [Introduction](#introduction)
- [Technologies Used](#technologies-used)
- [Features](#features)
- [Learning Objectives](#learning-objectives)
- [File Structure](#file-structure)
- [How to Use](#how-to-use)
- [Contact](#contact)

## Introduction

This site aims to teach you some basic functions of the PHP language. By rebuilding this website your own way, you'll learn to:

- Build customized textarea elements.
- Include Font Awesome Icons into your projects.
- Learn display flex, flex properties, and some of their values.
- Manage events on custom elements with JavaScript.
- Automatically create and delete files on your server with PHP.
- Implement a root authentication process.

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- Font Awesome Icons

## Features

- Create new blog posts.
- Display a list of blog posts.
- View individual blog posts.
- Simple and clean design.

## Learning Objectives

### HTML

- Build customized textarea elements, allowing you to add underlined text, bold text, italic text, ordered and unordered lists, links, and more.
- Include Font Awesome Icons into your projects to avoid adding multiple PNG or SVG icons to your server.

### CSS

- Learn display flex, flex properties, and some of their values.
- Learn color coherence and apply contrast to your elements.
- Make transitions on your input and button elements when they are focused or hovered.

### JavaScript

- Learn to manage events on custom elements, even those that are non-native HTML elements.

### PHP

- Learn how to automatically create new files on your server.
- Learn how to delete server files.
- Implement a root authentication process.

## File Structure
miniblog/  
├── app/  
│   ├── explorePosts.php  
│   ├── newPost.php  
│   └── posts.json  
├── assets/  
│   ├── libs/  
│   │   └── fontawesome/  
│   │       └── css/  
│   │           └── all.css  
│   ├── script/  
│   │   └── script.js  
│   └── style/  
│       ├── addPost.css  
│       ├── home.css  
│       ├── main.css  
│       └── single.css  
├── posts/  
│   ├── add/  
│   │   └── index.php  
│   ├── first-post.html  
│   ├── model.html  
│   └── testing-post.html  
└── index.php  

## How to Use

1. Clone the repository to your local machine.
2. Make sure you have a local server environment set up (e.g., XAMPP, WAMP, MAMP).
3. Place the project folder in the `htdocs` directory (or equivalent) of your local server.
4. Start your local server.
5. Open your web browser and navigate to `http://localhost/miniblog/`.

### Creating a New Post

1. Navigate to `http://localhost/miniblog/posts/add/`.
2. Fill in the form with the post details (name, author, description, content).
3. Click the "Post" button to create the new post.

### Viewing Posts

1. Navigate to `http://localhost/miniblog/` to see a list of all posts.
2. Click on a post title to view the full post.

## Contact

Do you want to know more about me? Don't hesitate to visit my website: [https://yayadev.net](https://yayadev.net)

---

Feel free to explore, modify, and learn from the code.