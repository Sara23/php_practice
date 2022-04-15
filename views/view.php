<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header{
            background: grey;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/views/about.php">About Page</a> </li>
            <li><a href="/views/contact.php">Contact Page</a> </li>
        </ul>
    </nav>
    <ul>
        <?php foreach ($tasks as $task): ?>
        <li>
            <?php if ($task->is_complete()): ?>
                <strike><?=$task->description?></strike>
            <?php else: ?>
                <?=$task->description?>
            <?php endif;?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>