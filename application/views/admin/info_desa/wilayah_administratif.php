<div class="row">
    <?php if($this->session->flashdata('sukses')){ ?>
    <div class="alert alert-success text-white alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><strong>Sukses!</strong>
            <?= $this->session->flashdata('sukses') ?></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <?php } ?>
    <div class="col-12 col-xl-12">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Wilayah Administratif</h6>
            </div>
            <div class="card-body p-3">
                <div id="map" style="height: 360px;"></div>
            </div>
        </div>
    </div>
    
    
</div>