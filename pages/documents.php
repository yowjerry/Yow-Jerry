<?php
  include "./scripts/documents.php";
  App_state::$page_title = App_state::$page_title." : Books";
?>
<!-- <div class="container p-5">
    <div class="row">
        <div class="col-2">Find document by category : </div>
    </div>
    <div class="row">
    <div class="col-3">
            <select name="doc_cat" id="doc_cat">
                <option value="">All</option>
                <option value="1">Doc</option>
                <option value="1">Doc</option>
                <option value="1">Doc</option>
            </select>
        </div>
    </div>
</div> -->
<div class="container px-5">
  <div class="row">
    <?php
      foreach($books as $book){
    ?>
    <div class="col-3 mb-4">
      <div>
        <img
          src="./docs/legend/<?=$book['d_image']?>"
          class="card-img-top"
          alt="Book Cover"
          style="aspect-ratio: 3 / 4; object-fit: cover;"
        >
        <div class="card-body d-flex flex-column">
          <h5 class="card-title"><?=$book['d_title']?></h5>
          <p class="card-text" style="font-size: 10px;">
           <?php
            echo substr($book['d_overview'],0);
           ?>
          </p>
          <div class="mt-auto">
            <a href="./docs/<?=$book['d_attachement_name']?>" class="btn btn-primary" download>
              Download
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
      }
    ?>
    <!-- Repeat the above block for each document -->
  </div>
</div>

<script>
    $(document).ready(
        function(){
            $( "#doc_cat" ).niceSelect();
        }
    )
</script>