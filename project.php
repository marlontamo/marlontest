<?php
/*
Template Name: Task Template
*/
get_header();
?>
<div class="container mt-5">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="card">
            <div class="card-head text-center">
                <h3>card</h3>
            </div>
            <div class="card-body text-center">
            <h1 id= "resultOneForm1">0</h1>
            <form>
                <div class="form-group">
                    <label for="formControlRange"></label>
                    <input type="range"  
                            min="0" 
                            max="1000" 
                            value="50" 
                            class="form-control-range range-custom" 
                            id="formOneControlRange">
                </div>
            </form>
            <!-- 1box -->
            <div class="row">
                <div class="col-md-2 bg-primary">1</div>
                <div class="col-md-2 bg-secondary">2</div>
                <div class="col-md-2 bg-danger">3</div>
                <div class="col-md-2 bg-primary">4</div>
                <div class="col-md-2 bg-secondary">5</div>
                <div class="col-md-2 bg-danger"><b id= "resultOneP">0</b></div>
            </div>
            <!-- end1box -->
            </div>
        </div>
</div>
<div class="col-md-4"></div>

</div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
        <div class="card">
            <div class="card-head text-center">
                <h3>card 1</h3>
            </div>
            <div class="card-body text-center">
            <h1 id= "resultForm1">0</h1>
            <form>
                <div class="form-group">
                    <label for="formControlRange"></label>
                    <input type="range"  
                            min="0" 
                            max="1000" 
                            value="50" 
                            class="form-control-range range-custom" 
                            id="formControlRange1">
                </div>
            </form>
            <!-- 1box -->
            <div class="row">
                <div class="col-md-2 bg-primary">1</div>
                <div class="col-md-2 bg-secondary">2</div>
                <div class="col-md-2 bg-danger">3</div>
                <div class="col-md-2 bg-primary">4</div>
                <div class="col-md-2 bg-secondary">5</div>
                <div class="col-md-2 bg-danger"><b id= "resultP1">0</b></div>
            </div>
            <!-- end1box -->
              <!-- Button trigger modal1 -->
<button type="button" class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
   modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
             <!-- modal 1 end -->
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card text-center">
            <div class="card-head">
                <h3>card 2</h3>
            </div>
            <div class="card-body">
            <h1 id= "resultForm2">0</h1>
            <form>
                <div class="form-group">
                    <label for="formControlRange"></label>
                    <input type="range"
                    min="0"
                    max="1000"
                    value="25" 
                    class="form-control-range range-custom" 
                     id="formControlRange2">
                </div>
            </form>
            <!-- 2box -->
            <div class="row">
                <div class="col-md-2 bg-primary">1</div>
                <div class="col-md-2 bg-secondary">2</div>
                <div class="col-md-2 bg-danger">3</div>
                <div class="col-md-2 bg-primary">4</div>
                <div class="col-md-2 bg-secondary">5</div>
                <div class="col-md-2 bg-danger"><b id= "resultP2">0</b></div>
            </div>
            <!-- end2box -->
              <!-- Button trigger modal2 -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
   modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
             <!-- modal 2 end -->
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card text-center">
            <div class="card-head">
                <h3>card 3</h3>
            </div>
            <div class="card-body text-center">
            <h1 id= "resultForm3">0</h1>  
            <form>
                <div class="form-group">
                    <label for="formControlRange"></label>
                    <input type="range" 
                        min="0"
                        max="1000"
                        value="45"
                        class="form-control-range range-custom" 
                        id="formControlRange3">
                </div>
            </form>
            <!-- 3box -->
            <div class="row">
                <div class="col-md-2 bg-primary">1</div>
                <div class="col-md-2 bg-secondary">2</div>
                <div class="col-md-2 bg-danger">3</div>
                <div class="col-md-2 bg-primary">4</div>
                <div class="col-md-2 bg-secondary">5</div>
                <div class="col-md-2 bg-danger"><b id= "resultP3">0</b></div>
            </div>
            <!-- end3box -->
             <!-- Button trigger modal3 -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
   modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
             <!-- modal 3 end -->
            </div>
        </div>
        </div>
        
    </div>
</div>
<?php get_footer(); ?>