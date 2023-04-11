<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">WELCOME !!!</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Profile</a>
        <a class="p-2 text-dark" href="#">About</a>
        <a class="p-2 text-dark" href="#">Data Privacy</a>
       
      </nav>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-md btn-block btn-primary">Logout</button>
        </form>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">BOQ INFORMATION SYSTEM</h1>
      <p class="lead">...</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">View BOQ</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">1 <small class="text-muted">/ BOQ</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>Additional Info</li>
              <li>Additional Info</li>
              <li>Additional Info</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target=".boq-modal-lg">Click to view BOQ table</button>
            
            <!-- BOQ table modal -->
            <div class="modal fade boq-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            asdasdasd
            asdasdasdad
            addslashesa
            date_subda
            <datagrid>
                asdad
            </datagrid>
            </div>
            </div>
            </div>

          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Create Dupa</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">1 <small class="text-muted">/ Total Dupa</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>Additional Info</li>
              <li>Additional Info</li>
              <li>Additional Info</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Edit Dupa</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">1 <small class="text-muted">/ Edit Count</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Additional Info</li>
              <li>Additional Info</li>
              <li>Additional Info</li>
    
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Click here to choose</button>
          </div>
        </div>
      </div>


      

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row" style="width: 100%; margin: 0 auto;">
          <div class="col-12 col-md">
            <small class="d-block mb-3 text-muted">&copy;ICTD 2023</small>
          </div>
        
        </div>
      </footer>
    </div>

   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
