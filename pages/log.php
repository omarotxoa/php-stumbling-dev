<?php 

$title = 'Log';
require_once '../header.php';

?>

<h1>Log</h1>
<main class="log">
    <article>
        <h2>Defining a Home Path in PHP</h2>
        <date>September 9 2023</date>
        <p>Tags: PHP, WEB DEVELOPMENT</p>
        <ul>
            <li>Had trouble with relative links</li>
            <li>Couldn't use <pre>__DIR__</pre> or <pre>__FILE__</pre> because it returns a file path instead of a URL</li>
        </ul>
        <pre>
            $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';

            if($_SERVER['HTTP_HOST'] === "stumbling.dev") {
                define('HOME_PATH', $protocol . $_SERVER['HTTP_HOST'] . '/');
            } else {
                define('HOME_PATH', $protocol . $_SERVER['HTTP_HOST'] . '/local-project-folder/');
            }
        </pre>
    </article>
</main>