<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this record?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                When you delete the record, it can no longer be recovered.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                <form id="delete-register" action="" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Destroy</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#modal-delete').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var route = button.data('route');
        $('#delete-register').attr('action', route);
    })
</script>