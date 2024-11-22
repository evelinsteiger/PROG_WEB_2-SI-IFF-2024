<!DOCTYPE html>
<html lang="en">

<?php include('./header.php') ?>

<body>
  <header class="header">
    <div class="container">
      <nav class="navbar justify-content-start">
        <!-- <a class="nav me-3" href="javascript:void(0)"><b>Home</b></a>
        <a class="nav me-3" href="javascript:void(0)"><b>About</b></a>
        <a class="nav me-3" href="javascript:void(0)"><b>Contact</b></a> -->
      </nav>
    </div>

    <b class="app-name">TODO APP</b>
    <button class="dark-mode-btn" id="theme">
      <i class="fas fa-adjust text-white"></i>
    </button>
  </header>

  <?php include('./pages/form.php') ?>

  <footer>
      <span id="status">0 of 0 completed</span>
  </footer>

</body>

<script src="./assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
  var popover = new bootstrap.Popover(document.querySelector('.bs-popover'), {
    container: 'body',
    trigger: 'hover'
  })

  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>

</html>