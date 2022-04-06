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
    <ul>
        <li>
            <strong>Title: </strong><?= $task['title'] ?>
        </li>
        <li>
            <strong>Due: </strong><?= $task['due'] ?>
        </li>
        <li>
            <strong>Responsable: </strong><?= $task['assigned_to'] ?>
        </li>
        <li>
            <strong>Status: </strong><?= $task['completed'] ? 'Completed':'Incompleted' ?>
        </li>
    </ul>
</body>
</html>