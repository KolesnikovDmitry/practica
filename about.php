<?php
define("MYAPP", true);
require_once 'funcs.php';


$title = 'My Blog :: About';

$posts =  "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cum, dolore enim eos laborum, molestiae, porro quae sequi suscipit tenetur veniam vitae. Id ipsam numquam ratione, recusandae suscipit velit vero!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque consectetur ducimus illum modi omnis ratione! Accusamus aspernatur beatae doloremque eius ex iste itaque maxime molestiae, porro quasi, qui repellendus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto autem beatae commodi deleniti doloremque eius eos eveniet expedita explicabo hic illum, incidunt nemo porro provident, quod recusandae rem velit? Odio.</p>";

$resents_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ', '-', 'An item')),
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
    ],
    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
    ],
    5 => [
        'title' => 'A fifth item',
        'slug' => lcfirst(str_replace(' ', '-', 'And a fifth one')),
    ],
];
require_once 'app/views/about.tpl.php';