<?Php include_once('include/header.php') ?>
<!----------Add Review section start-->
<section class="write-blog-section addreview-section p-0 mt-5 mb-5">
  <div class="container">
    <div class="row">
        <h3 class="comment-heading pb-3">Edit My Profile</h3>
      </div>
    <div class="row">
      <div class="col-md-8 border-style rounded">
        <div class="review-comment-box mt-5">
      <div class="row">
        <h4 class="pb-3">info@toreniatech.com</h4>
      </div>
      <div class="row rounded border-style2">
        <div class="form-group col-12">
          <input type="text" placeholder="First name" class="rounded bg-color form-control" name="">
        </div>
        <div class="form-group col-12">
          <input type="text" placeholder="Last name" class="rounded bg-color form-control" name="">
        </div>
      <div class="form-group col-12">
          <label class="mr-3"b><b>Gander</b></label>
          <input type="radio" placeholder="Last name" class="mt-3 rounded bg-color" name=""> <span>Male</span>&nbsp;
          <input type="radio" placeholder="Last name" class="mt-3 rounded bg-color" name=""> <span>Female</span>
      </div>
      <div class="form-group col-12">
          <label class="mr-3"b><b>Date of Birth</b></label>
          <input type="date" name="dateofbirth" class="DoB-box" id="dateofbirth">
      </div>
      <div class="form-group col-12">
         <textarea class="form-control rounded bg-color" placeholder="Address"></textarea>
      </div>
      <div class="form-group col-md-6 col-sm-12">
         <input type="text" class="form-control" placeholder="city" name="">
      </div>
      <div class="form-group col-md-6 col-sm-12">
         <input type="text" class="form-control" placeholder="State" name="">
       </div>
      <div class="form-group col-md-6 col-sm-12">
         <input type="text" class="form-control" placeholder="Zip Code" name="">
      </div>
       <div class="form-group col-md-6 col-sm-12">
         <input type="text" class="form-control" placeholder="Contact No:" name="">
      </div>
      <div class="form-group col-12">
         <input type="emial" class="form-control" placeholder="Email Address" name="">
      </div>
      <div class="form-group col-12">
         <textarea class="form-control rounded bg-color" placeholder="Education"></textarea>
      </div>
      <div class="row mt-3 mb-4">
        <div class="col-12">
          <button class="btn btn-outline-primary btn-style mt-2">Update</button>
        </div>
      </div>
      </div>
    </div>
      </div>
      <div class="col-md-4">
        <div class="upload-image module right-module tolerence-div text-center">
          <h4>Change or Upload photo</h4>
          <hr/>
          <img src="img/avtar/avtar1.png">
          <input type="file" class="form-control" name="">
        </div>
      </div>
    </div>
    </div>
</section>
<!----------Add Review section End-->
<?php include_once('include/footer.php') ?>