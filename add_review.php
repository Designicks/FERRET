<?Php include_once('include/header.php') ?>
<!----------Add Review section start-->
<section class="addreview-section p-0 mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 border-style rounded">
        <div class="review-comment-box mt-5">
      <div class="row">
        <h3 class="comment-heading pb-3">Write a Review on <a href="javascript:void(0)">Mahindra Bolero SLX BS IV</a> </h3>
      </div>
      <div class="row pl-2">
        <div class="start-rating">
          <label><b>Start rating</b></label>
        </div>
        <div class="rating">
            <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
            <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
            <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
            <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
            <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
        </div>
  </div>
      <div class="row rounded border-style2">
        <input type="text" placeholder="Review Title" class="col-4 rounded bg-color form-control" name="">
        <textarea class="form-control mt-3 bg-color" placeholder="Write your review about the product..."></textarea>
        <div class="review-buttons mt-3">
          <input type="file" class="btn" name="">
          <button class="btn"><i class="fas fa-file-alt"></i> Save Draft</button>
          <button class="btn"><i class="fas fa-eye"></i> View my Draft</button>
        </div>
        <div class="row mt-3 mb-4">
        <div class="col-12">
          <button class="btn btn-outline-primary btn-style mt-2">Submit</button>
        </div>
      </div>
      </div>
    </div>
      </div>
      <div class="col-md-4">
        <div class="product-img border rounded p-2">
            <img src="img/review/Swift.jpg" class="img-fluid">
          </div>
      </div>
    </div>
    </div>
</section>
<!----------Add Review section End-->
<?php include_once('include/footer.php') ?>