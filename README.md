# CRM Follow-Up Tracking System

A simple and efficient CRM system for tracking client follow-ups, designed specifically for matrimonial services.

## Features

- Client information management
- Follow-up tracking
- Status updates
- Responsive design
- Easy-to-use interface

## Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)

## Setup Instructions

1. **Database Setup**
   - Create a MySQL database named `crm_followup`
   - Import the `database.sql` file to create the required tables
   ```sql
   mysql -u root -p crm_followup < database.sql
   ```

2. **Application Setup**
   - Place all files in your web server's directory
   - Update database connection details in `save_profile.php` if needed:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "crm_followup";
     ```

3. **Access the Application**
   - Open your web browser and navigate to:
     ```
     http://localhost/CRM NEW/
     ```

## File Structure

- `index.html` - Main form interface
- `save_profile.php` - Backend script for saving data
- `database.sql` - Database structure and setup
- `README.md` - Documentation

## Usage

1. Fill in the client information
2. Add follow-up details
3. Update the status
4. Click 'Save Follow-Up Record'

## Security Considerations

- Update the database credentials
- Implement user authentication
- Use HTTPS in production
- Regularly backup the database

## Contributing

Feel free to submit issues and enhancement requests.

## License

MIT License