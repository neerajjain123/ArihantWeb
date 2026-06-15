<?php
// $relatedParks should be set before including this file.
// Each item: ['name', 'slug', 'price', 'image', 'tag']
if (!empty($relatedParks)): ?>
<!-- Related Parks Section -->
<div class="mt-5 pt-4 border-top">
    <h3 class="mb-4">You May Also Like</h3>
    <div class="row g-3">
        <?php foreach ($relatedParks as $rp): ?>
            <div class="col-md-4">
                <a href="/<?= $rp['slug'] ?>" class="text-decoration-none">
                    <div class="card border-0 shadow-sm h-100 related-park-card">
                        <div class="position-relative overflow-hidden" style="height:140px;">
                            <img src="<?= $rp['image'] ?>" class="w-100 h-100" style="object-fit:cover;" alt="<?= $rp['name'] ?>">
                            <span class="badge bg-primary position-absolute top-0 start-0 m-2" style="font-size:0.7rem;"><?= $rp['tag'] ?></span>
                        </div>
                        <div class="card-body py-2 px-3">
                            <h6 class="mb-1 text-dark fw-bold" style="font-size:0.88rem;"><?= $rp['name'] ?></h6>
                            <p class="mb-0 text-primary fw-semibold small"><?= $rp['price'] ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<style>
.related-park-card { transition: transform 0.2s ease, box-shadow 0.2s ease; }
.related-park-card:hover { transform: translateY(-3px); box-shadow: 0 6px 18px rgba(0,0,0,0.12) !important; }
</style>
<!-- Related Parks End -->
<?php endif; ?>
