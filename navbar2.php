<?php
if ($_SESSION['role']=="admin"): ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">NOTES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Notes</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="list_notes.php">List Notes</a>
          <a class="dropdown-item" href="insert.php">Add New</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">API</a>
      </li>
    </ul>
    Selamat Datang <?php echo $_SESSION['username']; ?>&nbsp;<a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0">LOGOUT</button></a>
  </div>
</nav>  
<?php else: ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">NOTES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Notes</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="list_notes_2.php">List Notes</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">API</a>
      </li>
    </ul>
    Selamat Datang <?php echo $_SESSION['username']; ?>&nbsp;<a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0">LOGOUT</button></a>
  </div>
</nav>
<?php endif; ?>
