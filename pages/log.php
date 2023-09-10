<?php 

$title = 'Log';
require_once '../header.php';

?>

<h1>Log</h1>
<main class="log">
    <article>
        <h2>Defining a Home Path in PHP</h2>
        <date>September 9 2023</date>
        <p>Tags: PHP, Web Development</p>
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
    <article class="draft">
        <h2>First C tutorial fail</h2>
        <date>September 9, 2023</date>
        <p>Tags: C, Software Engineering</p>
        <p>I'd heard C was a "strict" language. Something tells me this is a hint of things to come. Turns out there's a difference between using double quotes (") and single quotes (').</p>
        <ul>
            <li>I got this warning during the Head First C book tutorial
                <pre>
                    warning: comparison between pointer and integer
                    if ( card_name[0] == "K") {
                </pre>
            </li>
            <li>Fixed it by changing double quotes to single quotes
                <pre>
                    if ( card_name[0] == 'K') {
                </pre>
            </li>
        </ul>
    </article>
</main>