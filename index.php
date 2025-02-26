<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodTrucksList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-8 shadow p-3 mb-5 bg-body rounded">
                <form method="POST" action="index.php" id="getFoodTrucksForm">
                    <div class="mb-3">
                        <label class="h4 pb-2" for="searchInput">What do you want to taste today?</label>
                        <input type="text" name="searchInput" class="form-control" placeholder="Hot dog, burritos, Coffe..." id="searchInput" value="<?php echo $_REQUEST['searchInput'] ?? ''; ?>">
                        <small class="form-text text-muted">You can search by food items, business name or location</small>
                    </div>
                    <div class="input-group d-flex justify-content-center">
                        <input type="submit" class="btn btn-primary" value="Search">
                    </div>
                </form>
            </div>
        </div>

        <?php include('src/views/components/foodTrucksList.php') ?>

    </div>
</body>

</html>