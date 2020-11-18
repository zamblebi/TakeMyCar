<?php 
require_once("../header.php");

require_once("../header_navbar.php");

?>
<br>
<div class="container">
    <form action="/TakeMyCar/db/connection.php" method="post">
    <br>
    <div class="form-groups">
        <label for="Model">Model</label>
        <input type="text" id="model" class="form-control" name="model" placeholder="X6">
    </div>
    <br>
    <div class="form-groups">
        <label for="brand">Brand</label>
        <input type="text" id="brand" class="form-control" name="brand" placeholder="BMW">
    </div>
        <div class="form-groups">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Description of your car"></textarea>
        </div>
        <br>
            <button class="btn btn-primary">Add</button>
    </form>
</div>