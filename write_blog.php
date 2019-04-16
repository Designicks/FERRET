<?Php include_once('include/header.php') ?>
<!----------Add Review section start-->
<section class="write-blog-section addreview-section p-0 mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 border-style rounded">
        <div class="review-comment-box mt-5">
      <div class="row">
        <h3 class="comment-heading pb-3">Post a Blog</h3>
      </div>
      <div class="row rounded border-style2">
        <input type="text" placeholder="Blog Title" class="col-4 rounded bg-color form-control" name="">
        <textarea  class="mt-3 form-control rounded bg-color" maxlength="20000" placeholder="Blog (Minimum 160 Characters)"></textarea>
        <div class="review-buttons mt-3">
          <input type="file" class="btn" name="">
          <button class="btn"><i class="fas fa-file-alt"></i> Save Draft</button>
          <button class="btn"><i class="fas fa-eye"></i> View my Draft</button>
        </div>
        <div class="row mt-3 mb-4">
        <div class="col-12">
          <button class="btn btn-outline-primary btn-style mt-2">Submit Post</button>
        </div>
      </div>
      </div>
    </div>
      </div>
      <div class="col-md-4">
        <div class="module right-module tolerence-div">
            <h4>Useful Tips</h4>
            <ul>
              <li>Open your heart.</li>
              <li>Write what's on your mind.</li>
              <li>Use Bold, Italic and Insert hyperlinks where required.</li>
            </ul>
        </div>
      </div>
    </div>
    </div>
</section>
<!----------Add Review section End-->
<?php include_once('include/footer.php') ?>