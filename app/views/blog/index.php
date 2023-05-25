<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MVC Blog</title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/bootstrap.min.css" media="all" type="text/css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/style.css" media="all" type="text/css">
</head>

<body>
  <section id="app">
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">

      <a class="navbar-brand " href="">MVC Blog</a>
      <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
        <span class="navbar-toggler-icon "></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent ">
        <ul class="navbar-nav mr-auto ">
          <li class="nav-item active ">
            <a class="nav-link " href="">Home <span class="sr-only ">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="">Anime</a>
          </li>
        </ul>
      </div> -->

      <!-- <section class="d-inline ">

        <a class="text-decoration-none text-white px-2 " href="">Hallo, Uding</a>
        <a class="text-decoration-none text-white px " href="">logout</a>
      </section>
    </nav> -->
    <!-- end nav -->

    <section class="container my-5">
      <!-- Example row of columns -->
      <section class="row">
        <section class="col-md-4">
          <section class="mb-2 overflow-hidden" style="max-height: 15rem;"><img class="img-fluid" src="<?= BASEURL; ?>/assets/images/posts/2022_10_29_21_43_03.jpg" alt=""></section>
          <h2 class="h5 text-truncate">Modal Berharga Inter Memenangkan Copa Italy</h2>
          <p><?= substr("Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque consequatur nisi non molestias, saepe quam, ipsa perferendis temporibus vero quae id, sapiente reiciendis cum veritatis quisquam quidem assumenda quo illo.", 0, 80) ?></p>
          <p><a class="btn btn-primary" href="" role="button">View details »</a></p>
        </section>
        <section class="col-md-4">
          <section class="mb-2 overflow-hidden" style="max-height: 15rem;"><img class="img-fluid" src="<?= BASEURL; ?>/assets/images/posts/2022_10_29_21_43_03.jpg" alt=""></section>
          <h2 class="h5 text-truncate">Modal Berharga Inter Memenangkan Copa Italy</h2>
          <p><?= substr("Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque consequatur nisi non molestias, saepe quam, ipsa perferendis temporibus vero quae id, sapiente reiciendis cum veritatis quisquam quidem assumenda quo illo.", 0, 80) ?></p>
          <p><a class="btn btn-primary" href="" role="button">View details »</a></p>
        </section>
        <section class="col-md-4">
          <section class="mb-2 overflow-hidden" style="max-height: 15rem;"><img class="img-fluid" src="<?= BASEURL; ?>/assets/images/posts/2022_10_29_21_43_03.jpg" alt=""></section>
          <h2 class="h5 text-truncate">Modal Berharga Inter Memenangkan Copa Italy</h2>
          <p><?= substr("Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque consequatur nisi non molestias, saepe quam, ipsa perferendis temporibus vero quae id, sapiente reiciendis cum veritatis quisquam quidem assumenda quo illo.", 0, 80) ?></p>
          <p><a class="btn btn-primary" href="" role="button">View details »</a></p>
        </section>
        <section class="col-md-4">
          <section class="mb-2 overflow-hidden" style="max-height: 15rem;"><img class="img-fluid" src="<?= BASEURL; ?>/assets/images/posts/2022_10_29_21_43_03.jpg" alt=""></section>
          <h2 class="h5 text-truncate">Modal Berharga Inter Memenangkan Copa Italy</h2>
          <p><?= substr("Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque consequatur nisi non molestias, saepe quam, ipsa perferendis temporibus vero quae id, sapiente reiciendis cum veritatis quisquam quidem assumenda quo illo.", 0, 80) ?></p>
          <p><a class="btn btn-primary" href="" role="button">View details »</a></p>
        </section>
      </section>
      <!-- pagination -->
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
      <!-- end pagination -->
    </section>


  </section>
  <script src="<?= BASEURL; ?>/assets/js/jquery.min.js"></script>
  <script src="<?= BASEURL; ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>