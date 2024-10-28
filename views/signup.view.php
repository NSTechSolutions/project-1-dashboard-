<?php
if (!empty($_POST)) {
  echo $_POST['name'];
  echo $_POST['email'];
  echo $_POST['password'];
}
?>


<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-1 pt-1">
        <?= $view_bag['heading'] ?>
      </h1>
    </div>
    <div class="row">
      <form action="" method="POST">
        <div class="form-group mb-3">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" class="form-control" />
        </div>
        <div class="form-group mb-3">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" class="form-control" />
        </div>
        <div class="form-group mb-3">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" class="form-control" />
        </div>
        <div class="form-group mb-3">
          <button type="submit" value="Submit">Submit</button>
        </div>
    </div>
    </form>
  </div>
</div>
</body>

</html>