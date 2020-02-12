<?php

/** @var stdClass[] $tasks */

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/about">About Page</a></li>
                <li><a href="/contact">Contact Page</a></li>
            </ul>
        </nav>

        <h1>My Tasks</h1>

        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <span class="strike"><?= $task->description; ?></span>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>

    <body>
</html>