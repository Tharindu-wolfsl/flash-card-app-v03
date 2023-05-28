<!-- Modal -->
<div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <span class="ms-auto" aria-hidden="true" onclick="closeModal()">X</span>
      </div>
      <div class="modal-body">
        <p class="text-success text-center mx-auto h3">This is Learn more link!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success mx-auto text-light" onclick="closeModal()">Done!</button>
      </div>
    </div>
  </div>
</div>
<script>
    function closeModal(){
        $('#testModal').modal('hide');
    }
</script>