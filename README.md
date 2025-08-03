# robot-arm-controller
# Robot Arm Controller

A simple PHP + MySQL web interface for saving robot arm motor values into a database.

## Features

- Submit 6 motor values through a form
- Store values in a MySQL database
- Basic error checking

## Tech Stack

- PHP (Procedural)
- MySQL (XAMPP)
- HTML

## Database Schema

Create a database called robot_arm, and run the following SQL:

```sql
CREATE TABLE Poses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    motor1 VARCHAR(10),
    motor2 VARCHAR(10),
    motor3 VARCHAR(10),
    motor4 VARCHAR(10),
    motor5 VARCHAR(10),
    motor6 VARCHAR(10),
    statusx VARCHAR(5),
    created VARCHAR(50)
);
