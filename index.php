index.php
// *** Define your host, username, and password
define('FTP_HOST', '192.168.1.88');
define('FTP_USER', 'TestAcc');
define('FTP_PASS', 'dude');
 
 
// *** Include the class
include('ftp_class.php');
 
// *** Create the FTP object
$ftpObj = new FTPClient();
 
// *** Connect
$ftpObj -> connect(FTP_HOST, FTP_USER, FTP_PASS);

// *** Connect
if ($ftpObj -> connect(FTP_HOST, FTP_USER, FTP_PASS)) {
 
    // *** Then add FTP code here
 
    echo 'connected';
 
} else {
    echo 'Failed to connect';
}
