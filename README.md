# Web Chat App

![image](https://github.com/iamkiranrajput/web-chat-app/assets/68410560/ac47128e-9fdd-4c07-8f1e-4a6487d56a2a)


## Overview

The Web Chat App is a real-time messaging application designed to enable users to communicate with each other. This project utilizes HTML, CSS, JavaScript, jQuery, Bootstrap, PHP, and MySQL. It is intended to run on a web server, and XAMPP is recommended for local development.

## Prerequisites

Before running the project, make sure you have the following software and tools installed on your computer:

- **XAMPP:** Download and install XAMPP from the [official website](https://www.apachefriends.org/index.html).

## Installation

Follow these steps to set up and run the project:

1. **Install XAMPP:**
   - Download and install XAMPP on your computer.
   - Start the Apache and MySQL services from the XAMPP control panel.

2. **Database Setup:**
   - Create a database for the chat app using phpMyAdmin.
   - create a database name as chatbook
   - Import the database schema from the `chatbook.sql` file provided with the project.

3. **Project Files:**
   - Place the project files in the `htdocs` folder of your XAMPP installation directory.

4. **Access the Project:**
   - Open your web browser and access the project using the following URL: `http://localhost/web-chat-app/index.php`.
   - Replace `web-chat-app` with the actual name of the folder where you placed the project files.

## Run the Project

Interact with the project by:

- Creating user accounts.
- Initiating and participating in real-time chat sessions.

## Project Details

### Project Structure

The project follows a structured organization with clear separation of HTML, CSS, and PHP files. Key components include:

- **index.php:** The main page for user login and chat initiation.
- **msg.php:** The page for real-time chat functionality.
- **msg.js:** JavaScript file for handling user interactions.
- **style.css:** CSS file for styling the chat app.

### Usage

1. **User Registration:**
   - Create a user account by providing necessary details.

2. **Login:**
   - Log in with your registered credentials.

3. **Chat Interface:**
   - Start or join chat sessions with other users.
   - Exchange real-time messages.

4. **Logout:**
   - Securely log out from the chat app.
