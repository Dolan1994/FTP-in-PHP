ftp_class.php


Class FTPClient
{
	//*** Class variables

	public function__construct() {}
}

private $connectionId;
private $loginOk = false;
private $messageArray = array();

private function logMessage($message)
{
		$this->messageArray[] = $message;
}

public function fetMessages()
{
	return $this->messageArray;
}

public function connect ($server, $ftpUser, $ftpPassword, $isPassive = false)
{
 
    // *** Set up basic connection
    $this->connectionId = ftp_connect($server);
 
    // *** Login with username and password
    $loginResult = ftp_login($this->connectionId, $ftpUser, $ftpPassword);
 
    // *** Sets passive mode on/off (default off)
    ftp_pasv($this->connectionId, $isPassive);
 
    // *** Check connection
    if ((!$this->connectionId) || (!$loginResult)) {
        $this->logMessage('FTP connection has failed!');
        $this->logMessage('Attempted to connect to ' . $server . ' for user ' . $ftpUser, true);
        return false;
    } else {
        $this->logMessage('Connected to ' . $server . ', for user ' . $ftpUser);
        $this->loginOk = true;
        return true;
    }
}
