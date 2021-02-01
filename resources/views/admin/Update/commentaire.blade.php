<div class="modal fade affiche" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS DU COMMENTAIRE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="form-group col-sm-6">
               <label class="control-label">Nom</label>
                <input type="text" class="form-control"  value="{{ $single->name }}">
            </div>
            <div class="form-group col-sm-6">
              <label>Prénom</label>
              <input type="text" class="form-control" value="{{ $single->first_name }}">
            </div>
          </div>
          
          <div class="row">
            <div class="col-12">
              <label class="control-label">Commentaire</label>
              <textarea class="form-control" id="" cols="30" rows="4">{{ $single->content }}</textarea>
            </div>
          </div>
          <br><br> 
          </div>
        </form>
    </div>
  </div>
</div>
<script type="text/javascript">      
  $('#modifSelect').select2();
  $('.modifSelect').select2();
</script>