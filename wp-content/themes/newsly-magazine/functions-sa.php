<?php 
include('/home/jbaldwin/stupidamerica.net/public/wp-config.php');

/**
notify of stupidest page update
**/
function sa_notify_save_post($post) {
    $fp = fopen('/home/jbaldwin/wptest.txt','a');
    $content = print_r($post['content'],true);
    fwrite($fp, $post['ID'] . ' ' . $content);
    fclose($fp);

    $to      = 'jim@jimbaldwin.net';
    $subject = 'Another update from StupidAmerica.com';
    $content = substr(strip_tags($post['post_content']),0,250) . '...';

    $filename = "/home/jbaldwin/test.stupidamerica.net/public/wp-content/themes/newsly-magazine/stupidest-email-template.html";
    $handle = fopen($filename, "r");
    $template = fread($handle, filesize($filename));
    $message = str_replace('{{ %content% }}',$content,$template);
    $headers = 'From: contact@stupidamerica.net' . "\r\n" .
        'Reply-To: contact@stupidamerica.net' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    mail($to, $subject, $message, $headers);
}

function sa_notify_save_post_cron(){
	$id = 90;
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $sql = "
        select * from wp_5n6yir_posts
        where post_parent = $id
        and notified = 0
        order_by post_date desc
        limit 1
    ";
    $result = $conn->query($sql);
    if($post = $result->fetch_assoc()){
        sa_notify_save_post($post);
        $sql = "
            update wp_5n6yir_posts
            set notified = 1
            where id = " . $post['ID'];
        $conn->query($sql);
    }
}

sa_notify_save_post_cron();
