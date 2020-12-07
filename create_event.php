<!doctype html>
<html lang="en">

<?php include "templates/header.php"; ?>

<body>
<div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/bg8.jpg')">
    <div class="container">
        <form>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                    <input type="text" name="start_date" class="form-control" id="start_date">
            </div>
    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" class="form-control" id="location">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

<?php include "templates/footer.php"; ?>
</body>
</html>
