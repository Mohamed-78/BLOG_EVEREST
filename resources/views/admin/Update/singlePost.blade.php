<div class="modal fade affiche" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">MODIFICATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/managment/update/post/{{ $singlePost->id }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="form-group col-sm-6">
               <label class="control-label">Le titre</label>
                <input type="text" class="form-control" name="title" placeholder="Titre" required="" value="{{ $singlePost->title }}">
            </div>
            <div class="form-group col-sm-6">
              <label> Image principale (taille: 400*200)</label>
              <input type="file" class="form-control" name="picture" value="{{ $singlePost->picture }}">
            </div>
          </div>
          
          <div class="row">
            <div class="col-12">
              <label class="control-label">La description</label>
              <textarea name="description" class="form-control" id="" cols="30" rows="4" required="">{{ $singlePost->description }}</textarea>
            </div>
          </div>

          <br><br>
          <div class="form-group col-12" align="center">
            <button class="btn btn-primary" type="submit" style="width: 150px;">
            <i class="fa fa-save"></i>
              <font style="vertical-align: inherit;">MODIFIER</font></font>
            </button>
          </div> 
          </div>
        </form>
    </div>
  </div>
</div>
<script type="text/javascript">      
  $('#modifSelect').select2();
  $('.modifSelect').select2();
</script>