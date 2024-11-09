# Event Management System

An Event Management System built with Laravel 11 and PHP 8.2, designed to help users manage events, assign tasks, and allow guest users to participate without full registration. The application supports both registered users and guests, with unique access codes for guest users, and automated cleanup of expired events and data.

## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [License](#license)

## Features

- **User Registration and Guest Access**: Registered users can create events and invite guests. Guests can join events with a unique access code, without the need for full registration.
- **Event and Task Management**: Hosts can create events, add tasks, assign tasks to users, and set task limits.
- **Automated Data Cleanup**: Events and related data are automatically deleted 10 days after the event’s end date.

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js and npm
- MySQL or SQLite for database (or other Laravel-supported databases)

## Installation

1. **Clone the Repository**
    clone the repository by typing the following in the terminal:
    •   git clone https://github.com/username/EventManagementSystem.git
    •   cd EventManagementSystem

2. **Install PHP Dependencies**
    •   composer install

3. **Install Node Dependencies**
    •   npm install

4. **Environment Setup**
    Copy the .env.example file to create a .env file and update the necessary environment variables as needed:
    •   cp .env.example .env

5. **Run Migrations**
    Migrate the database to create the necessary tables:
    •   php artisan migrate

6. **Run the Development Server**
    Start the Laravel server and Vite development server concurrently:
    •   npm run dev

##Usage

- Register and Login: Registered users can create an account and log in. Guests join events with a name, email, and event invitation code.
- Create Events: Registered users (hosts) can create events, set event details, and invite guests.
- Manage Tasks: Hosts can create tasks, set max assignments per task, and assign tasks to users. They can also allow users to self-assign tasks if enabled.
- Re-Access for Guests: Guests are provided with a unique access code per event, allowing them to re-enter the event without re-registering.
- Automatic Cleanup: Events and associated data are deleted automatically 10 days after the event’s end date.

## Project Structure

**Here’s an overview of the main directories and files:**
- app/Http/Controllers: Contains the main application controllers (e.g., EventController, TaskController, GuestLoginController).
- app/Models: Models for core entities like User, Event, and Task.
- database/migrations: Migration files for setting up the database schema.
- resources/views: Blade templates for the front-end.
- routes/web.php: Routes for web access.

License
- This project is licensed under the MIT License. See the LICENSE file for details.