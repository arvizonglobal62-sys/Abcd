-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS crm_followup;

-- Use the database
USE crm_followup;

-- Create the followups table
CREATE TABLE IF NOT EXISTS followups (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(100) NOT NULL,
    client_id VARCHAR(50),
    first_contact_date DATE NOT NULL,
    service_interested ENUM('Free', 'Premium', 'Elite') NOT NULL,
    last_followup_date DATE NOT NULL,
    mode_followup ENUM('Call', 'WhatsApp', 'Email', 'In-Person') NOT NULL,
    spoken_to ENUM('Client', 'Parent', 'Relative') NOT NULL,
    client_response ENUM('Interested', 'Needs Time', 'Not Interested', 'Already Married') NOT NULL,
    conversation_notes TEXT,
    next_followup_date DATE NOT NULL,
    next_action ENUM('Send Matches', 'Share Plan', 'Schedule Call', 'Close Lead') NOT NULL,
    assigned_staff VARCHAR(100) NOT NULL,
    current_status ENUM('Ongoing', 'Matches Sent', 'Talk in Progress', 'Finalized', 'Closed') NOT NULL,
    remarks TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;