<?php
require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>
<form method="post" action="<?php echo $path . "controller/login-user.php"; ?>">
    <div class="input-group">
        <div>
            <label for="username"></label>
            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1"/>
        </div>

        <div>
            <label for="password"></label>
            <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1"/>
        </div>
        <button type="submit">Submit</button>
    </div>
</form>