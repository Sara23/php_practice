<?php require('partials\head.php'); ?>
<h1>Add a new task: </h1>
<form method="post" action="/users">
    <label>
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>
    </label>
</form>

<?php foreach ($users as $user): ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<?php require('partials\footer.php'); ?>
