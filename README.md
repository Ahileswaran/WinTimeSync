# WinTimeSync

This repository contains scripts designed to address Windows system time synchronization issues that may occur due to a drained CMOS battery. The solution involves an HTML interface with a button labeled "Update Time," which triggers a PHP script for time synchronization over the internet.

## Files in the Repository:

- **update_time.php:**
  PHP script to synchronize the Windows system time using the `w32tm /resync` command.

- **index.html:**
  HTML file providing a user interface with a button labeled "Update Time."

- **update_time.bat:**
  Batch file to initiate a PHP server and open the HTML interface in the default web browser.

## Usage

### Prerequisites:

- Ensure PHP is installed on your system.
- Confirm the availability of the `w32tm` command.

### Steps:

1. **Clone the Repository:**
    ```bash
    git clone https://github.com/your-username/WinTimeSync.git
    ```

2. **Navigate to Repository:**
    ```bash
    cd WinTimeSync
    ```

3. **Run the Batch File:**
    Execute the `update_time.bat` file to start the PHP server and open the HTML interface.

4. **Click "Update Time" Button:**
    Open the HTML interface in a web browser and click the "Update Time" button.

5. **Time Synchronization:**
    The button click triggers a PHP script that uses the `w32tm /resync` command to synchronize the Windows system time over the internet.

## Important Notes:

### Security Considerations:

- Ensure that the system has the necessary permissions to execute commands for time synchronization.
- Avoid exposing sensitive information in scripts.

### Dependencies:

- The PHP script assumes the availability of the `w32tm` command. Confirm its presence on the system.

### Contributions:

Contributions to enhance security, usability, and compatibility are welcome! If you would like to contribute, please follow these steps:

- Open an issue to discuss proposed changes or improvements.
- Fork the repository and create a new branch for your feature or bug fix.
- Submit a pull request with a detailed description of your changes.
- Ensure that your code follows the repository's coding standards.

Thank you for contributing to WinTimeSync!

