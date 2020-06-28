<?php 
require_once("../header.php");

require_once("../header_navbar.php");

?>
<br>
<div class="container">
    <form action="newCar.php">
        <div class="form-groups">
            <label for="mark">Mark</label>
            <input type="text" id="mark" class="form-control" name="mark" placeholder="BMW">
        </div>
        <br>
        <div class="form-groups">
            <label for="Model">Model</label>
            <input type="text" id="model" class="form-control" name="model" placeholder="X6">
        </div>
        <br>
        <div class="form-groups">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Description of your car"></textarea>
        </div>
        <br>
            <button class="btn btn-primary">Add</button>
    </form>
</div>