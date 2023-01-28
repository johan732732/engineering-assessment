<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-8 shadow p-3 mb-3 bg-body rounded">
            <div class="row p-3">
                <div class="col-12">
                    <i class="fa fa-tag text-secondary text-muted"></i>
                    <small class="text-muted" for="">Food truck:</small>
                    <span class="h6"><?= $truckItem['applicant'] ?></span>
                    <small class="text-muted" style="font-size: .7rem">(<?= $truckItem['fooditems'] ?>)</small>
                </div>
                <div class="col-12">
                    <a target="_blank" href="https://maps.google.com/?q=<?= $truckItem['latitude'] ?>,<?= $truckItem['longitude'] ?>" class="text-decoration-none">
                        <i class="fa fa-location-dot text-danger"></i>
                        <small class="text-muted" for="">Address:</small>
                    </a>

                    <span><?= $truckItem['locationdescription'] ?></span>
                </div>
                <div class="col-12">
                    <?php include('src/views/components/foodTruckCalification.php') ?>
                </div>
                <div class="col-12 text-end">
                    <a href="#" class="text-muted">See comments</a>
                </div>
            </div>
        </div>
    </div>
</div>