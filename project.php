<?php
/*
Template Name: Task Template
*/
get_header();
?>

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
            </div>
        </div>
        </div>
        
    </div>
</div>
<?php get_footer(); ?>