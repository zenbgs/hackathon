<div class="modal fade" id="hapus<?= $penduduk->id ?>" tabindex="-1" role="dialog"
    aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">
                    Confirm Hapus</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="text-gradient text-warning mt-4">Peringatan!</h4>
                    <p>Hapus Berita Ini? Data Tidak Bisa Dikembalikan!</p>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?= base_url('admin/kependudukan/delete/'.$penduduk->id) ?>"
                    class="btn btn-success bg-gradient">Hapus</a>
                <button type="button" class="btn btn-link btn-danger bg-gradient ml-auto"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
