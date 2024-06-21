# Laravel Form Automation

This Laravel application automates form filling and submission using Laravel Dusk.

## Setup Instructions

Follow these steps to set up and run the application:

### 1. Migrate the Database

Run the following command to migrate the database:

```bash
php artisan migrate
```

### 2.  Run the Queue Worker
To process queued jobs, run the queue worker using the following command:
```bash
php artisan queue:work
```

### 3.  Run the Queue Worker
To run the script and automatically fill the form, pass the user ID in the URL as follows:
```
http://localhost:8000/auto-fill-form/{user_id}

```
### 4.  Example
If you want to fill the form using the user with ID 1, you would navigate to:

```
http://localhost:8000/auto-fill-form/1

```

### 5.  Check Results of Form Submissions
Head over to contacts table in db to see the submissions

### 6. Additional Notes
If you face issues with chrome browser install with ```php artisan dusk:install```
