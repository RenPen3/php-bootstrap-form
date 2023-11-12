

  <?php include 'header.php'; ?>


    <main>

      <section class="bg-dark p-5">
        <h2 class="text-white text-center m-0">Subscribers: <?php echo count($allEmails); ?></h2>
        <form  action="/" method="POST" id="item-form" class="form-control-lg container-fluid  w-50">
          <div class=" w-50 m-auto mt-5">

            <label for="exampleFormControlInput1" class="form-label text-light">First Name</label>
            <input name="name" id="name" type="text" class="form-control mb-2 rounded-0"  placeholder="First Name" value="">

            <label for="exampleFormControlInput1" class="form-label text-light">E-mail</label>
            <input name="email" id="email" type="text" class="form-control mb-2 rounded-0"  placeholder="example@gmail.com" value="">

            <label for="exampleFormControlInput1" class="form-label text-light">Password</label>
            <input name="password" id="password" type="password" class="form-control mb-2 rounded-0"  placeholder="Password" value="">

            <input class="btn btn-warning mt-4 w-50 rounded-0" type="submit" name="submit" value="Sign Up" >

            <!-- <button id="addBtn" type="button" class="btn btn-outline-primary w-100 rounded-1 mb-4">Add Book</button> -->
          </div>
        </form>
      <section>


    
      <!-- <section id="hero" class="container-fluid bg-dark p-5 mx-auto">
        <div class="row text-center m-5">
          <div class="col p-5">
            <h1>Hello</h1>
            <h1 class="text-white text-center m-0" style="font-size:4.5em;font-weight:700;">Your Personal Literary Sanctuary</h1>
            <p class="lead text-white text-center m-0" style="font-size:2em;">Where Imagination Meets Possibility</p>
            <button class="fs-5 btn btn-primary px-4 rounded-0 mt-3">Get Started</button>
          </div>
        </div>
      
        <div class="list-item">David Goggins - Can't Hurt Me - Autobiography</div>


      <div   class="container container-fluid mt-5 text-center">
        <div class="row align-items-start">
          <div class="col bg-primary">
            <h3>Menu</h3>
            <a class="nav-link w-100 text-light">Sort</a>
          </div>
          <div class="col-9 m-auto ">
            <ul class="navbar-nav book__container d-flex">
              <li id="book" class="items list-item "></li>
              <li class="book__container-inner nav-item bg-secondary text-light p-3 mb-3 rounded-1">

                <div class="book__container-content container ">
                  <div class="row w-100 align-items-center">
                    <img class="img-thumbnail rounded" style="width: 100px;height: 100px;background-size: cover;object-fit: cover;" src="/img/book1.jpg" alt="">
                    <div class="col">
                      <h4 class="fs-5">David Goggins</h4>
                    </div>
                    <div class="col">
                      <h4 class="fs-5">Can't Hurt Me</h4>
                    </div>
                    <div class="col">
                      <h4 class="fs-5">Autobiography</h4>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item bg-secondary text-light p-3 rounded-1 mt-3">
                <div class="container">
                  <div class="row w-100 align-items-center">
                    <img class="img-thumbnail rounded" style="width: 100px;height: 100px;background-size: cover;object-fit: cover;" src="/img/bbok2.jpg" alt="">
                    <div class="col">
                      <h4 class="fs-5">Dave Ramsey</h4>
                    </div>
                    <div class="col">
                      <h4 class="fs-5">The Total Money Makeover</h4>
                    </div>
                    <div class="col">
                      <h4 class="fs-5">Self-Help</h4>
                    </div>
                  </div>
                  <span>Star1</span>
                  <span>Star2</span>
                  <span>Star3</span>
                </div>
              </li>
              
            </ul>
          </div>
          <div class="col bg-primary">
            <h2>My Library</h2>
            <h4 class="text-light">Add or Remove Books</h4>
          </div>
        </div>
        </div>
      </section> -->

      <!-- <section id="hero" class="container-fluid d-flex gap-5 bg-light p-5 mx-auto">
        <div class="card text-center my-5">
          <div class="card-body">
            <h3 class="card-title">Card 1</h3>
            <h6 class="card-subtitle text-center m-0">This is the sub-header of the page</h6>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi tempore, delectus consequatur reprehenderit eligendi minima, nihil necessitatibus impedit, pariatur quo dolorum fugit? Reiciendis libero similique nulla molestiae quisquam nostrum ex?</p>
            <a class="card-link" href="#">Link 1</a>
            <a class="card-link" href="#">Link 2</a>
          </div>
         
        </div>
        <div class="card text-center my-5">
          <div class="card-body">
            <h3 class="card-title">Card 2</h3>
            <h6 class="card-subtitle text-center m-0">This is the sub-header of the page</h6>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi tempore, delectus consequatur reprehenderit eligendi minima, nihil necessitatibus impedit, pariatur quo dolorum fugit? Reiciendis libero similique nulla molestiae quisquam nostrum ex?</p>
            <a class="card-link" href="#">Link 1</a>
            <a class="card-link" href="#">Link 2</a>
          </div>
         
        </div>
        <div class="card text-center my-5">
          <div class="card-body">
            <h3 class="card-title">Card 3</h3>
            <h6 class="card-subtitle text-center m-0">This is the sub-header of the page</h6>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi tempore, delectus consequatur reprehenderit eligendi minima, nihil necessitatibus impedit, pariatur quo dolorum fugit? Reiciendis libero similique nulla molestiae quisquam nostrum ex?</p>
            <a class="card-link" href="#">Link 1</a>
            <a class="card-link" href="#">Link 2</a>
          </div>
         
        </div>
      </section> -->
    </main>





    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>