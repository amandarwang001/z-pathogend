<!-- Rachel's Page -->
pathogend
<!-- Jumbotron: Welcome & Cats are Cool -->
<div class="jumbotron">
  <h1 class="display-4">Welcome to Rachel's Page</h1>
  <p class="lead">Cats are some of the best pets.</p>
  <hr class="my-4">
  <p>They are cool, soft, and fuzzy.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
<!-- Container -->
<div class="container">
    <!-- Row 1- Create Your Cat Profile Title -->
    <div class="row">
        <div class="col-md">
            <h2><center>Create Your Cat Profile:<center></h2>
        </div>
    </div>
    <!-- Form - Name -->
    <div class="row">
      <div class="col-md-6 offset-md-3">
          Name:
          <form action="">
              <div class="form-group">
                  <textarea class="form-control" id="catName" rows="1"></textarea>
                </div>
        </div>
    </div>
    <!-- Form - gender -->
    <div class="row">
      <div class="col-md-6 offset-md-3">
          Gender:
          <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="radioMale" value="Male" checked>
          <label class="form-check-label" for="exampleRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="radioFemale" value="Female">
          <label class="form-check-label" for="exampleRadios2">
            Female
          </label>
        </div>
        </div>
    </div>
    <!-- Form - Age -->
    <div class="row">
      <div class="col-md-6 offset-md-3">
          Age:
              <div class="form-group">
                  <textarea class="form-control" id="catAge" rows="1"></textarea>
                </div>
                <center><button type="submit" class="btn btn-success">Submit</button></center>
            </form> 
        </div>
    </div>
    <div class="row">
        <div class ="col-md-6 offset-md-3">
            <!-- Female Cat Picture -->
            <div id = "hiddenFemaleCat" style="display:none">
                <div class="card" style="width: 32rem;">
                    <img class="card-img-top" src="<?= IMAGE_URL ?>femaleCat.jpg" alt="Cat photo" height = "300">
                    <div class="card-body">
                        <center><p class="card-text" id="catPropertiesF"> </p><center>
                    </div>
                </div>
            </div>
            <!-- Male Cat Picture -->
            <div id = "hiddenMaleCat" style="display:none">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="<?= IMAGE_URL ?>maleCat.jpg" alt="Cat photo" height = "400">
                    <div class="card-body">
                        <center><p class="card-text" id="catPropertiesM"> </p><center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<script src="<?= JS_URL ?>rachel.js"></script>