<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodTrucksList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-8 shadow p-3 mb-5 bg-body rounded">
                <form method="POST" action="index.php" id="getFoodTrucksForm">
                    <div class="mb-3">
                        <label class="h4" for="searchInput">Search food trucks</label>
                        <input type="text" name="searchInput" class="form-control" placeholder="Search food trucks" id="searchInput" value="<?php echo $_REQUEST['searchInput'] ?? ''; ?>">
                        <small class="form-text text-muted">You can search by city, country, food.....</small>
                    </div>
                    <div class="input-group">
                        <input type="submit" class="btn btn-primary" value="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>