<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-1 pt-1">
                <?= $view_bag['heading'] ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="" method="POST">
            <div class="form-group mb-3">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group mb-3">

                <input type="submit" name="login" value="Login">
            </div>
        </form>

    </div>
    <div class="row">
        <?php
        if (isset($view_bag['status'])) {
            echo $view_bag['status'];
        }

        ?>
    </div>
</div>