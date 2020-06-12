<?php
define('DB_NAME', 'indentureland_com');
/** MySQL database username */
define('DB_USER', 'indenturelandcom');

/** MySQL database password */
define('DB_PASSWORD', 'vfr45tgb');

/** MySQL hostname */
define('DB_HOST', 'mysql.jimbaldwin.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**
notify of stupidest page update
**/

function sa_notify_save_post($post,$slug) {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if(DB_NAME == 'indentureland_com'){
        $fp = fopen('/home/jbaldwin/wptest.txt','a');
        $content = print_r($post['post_content'],true);
        fwrite($fp, $post['ID'] . ' ' . $content);
        fclose($fp);
    }
    $subject = 'A new post from Stupid America';
    $content = substr(strip_tags($post['post_content']),0,250) . '...';

    $filename = "/home/jbaldwin/test.stupidamerica.net/public/wp-content/themes/newsly-magazine/stupidest-email-template.html";
    $handle = fopen($filename, "r");
    $template = fread($handle, filesize($filename));
    $message = str_replace('{{ %content% }}',$content,$template);
    $message = str_replace('{{ %slug% }}',$slug,$message);
    $message = remove_smart_quotes($message);
    $headers = 'From: contact@stupidamerica.net' . "\r\n" .
        'Reply-To: contact@stupidamerica.net' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $sql = "
        select * from wp_5n6yir_mailpoet_subscribers
        where status = 'subscribed'
    ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($subscriber = $result->fetch_assoc()) {
            mail($subscriber['email'], $subject, $message, $headers);
            print $subscriber['email'] . "\n";
        }
    } else {
        echo "0 results";
    }
}

function sa_notify_save_post_cron(){
	$ids = [
	    'stupefied' => 90,
        '2020/04/27/your-ongoing-roundup-of-covid-related-stupidity/' => 584,
    ]; // stupefied and roundup

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    foreach($ids as $slug => $id){
        $sql = "
        select * from wp_5n6yir_posts
        where post_parent = $id
        and notified = 0
        order by post_date desc
        limit 1
    ";
        $result = $conn->query($sql);

        if($post = $result->fetch_assoc()){
            sa_notify_save_post($post,$slug);
            $sql = "
            update wp_5n6yir_posts
            set notified = 1
            where post_parent = $id
            ";
            $conn->query($sql);
        }
    }

}

sa_notify_save_post_cron();


