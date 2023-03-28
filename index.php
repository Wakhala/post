<?php
echo $_GET['name'];
echo $_GET['age'];
?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=john&age=30">click</a>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <div>
        <label for="name">name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="age">age</label>
        <input type="text" name="age" id="age">
    </div>
    <input type="submit" value="submit">
</form>