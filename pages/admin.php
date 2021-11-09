  <div class="px-4 my-5 text-center border-bottom">
  <h1 class="display-4 fw-bold">Hi Admin!</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">
      <?php
        //* Variables superglobales ($_POST..)
        if ($_POST["username"] === "thom" && $_POST["password"] === "aa") {
            echo "ADMINNNNNNNN";
        } else {
            echo ('fk off u ain\'t no admin bish');
        }      ?>
    </p>
  </div>
  <div class="overflow-hidden" style="max-height: 35vh;">
    <div class="px-5">
      <img src="https://getbootstrap.com/docs/5.1/assets/img/bootstrap-icons.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
    </div>
  </div>
</div>