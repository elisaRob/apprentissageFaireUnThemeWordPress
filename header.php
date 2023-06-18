<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
    wp_nav_menu(
        array(
            'menu'=>'primary',
            'container'=>'',
            'theme_location'=>'primary'
        )
    )
?>

    <nav>
        <ul>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.019 36.971">
                    <path id="Tracé_16546" data-name="Tracé 16546" d="M16.009,23.109,0,13.862V27.73L8,32.35V23.109l4,2.31v9.241l4,2.31,4-2.31V25.419l4-2.31V32.35l8-4.621V13.862ZM32.019,0,16.009,9.241,0,0V9.241l16.009,9.247L32.019,9.241Z" fill="#938a56"/>
                </svg>               
            </li>
            <li><a href="">pêche à la carpe</a></li>
            <li><a href="">pêche au silure </a></li>
            <li><a href="">matériel et appâts </a></li>
            <li><a href="">blog</a></li>
            <li><a href="">qui sommes-nous?</a></li>
            <li><a href="">contact</a></li>

                
        </ul>
</nav>


    
