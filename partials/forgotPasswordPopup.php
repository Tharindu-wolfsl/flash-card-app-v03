<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <span class="ms-auto" aria-hidden="true" onclick="closeModal()">X</span>
      </div>
      <div class="modal-body">
        <p class="text-success text-center mx-auto h3">Forgot password email sent successfully!</p>
      </div>
      <div class="modal-footer">
        <a href="../index.php" class="btn btn-success mx-auto text-light">Done!</a>
      </div>
    </div>
  </div>
</div>
<script>
    function closeModal(){
        $('#exampleModalCenter').modal('hide');
    }
</script>