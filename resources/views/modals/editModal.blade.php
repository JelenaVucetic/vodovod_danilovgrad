
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Izmijenite obavještenje</h4>
        </div>
        <div class="modal-body">
         <form method="post" id="edit-form" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group" style="display: flex;flex-direction: column;">
                    <label class= "control-label" style="padding: 0 15px;">Naslov</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                </div>
                <div class="form-group">
                  @for($i=0; $i<$count_images;$i++)
                    <div style="margin:10px;">
                        <img width="50px" src="" alt="" id="image{{$i}}" >
                        <input type="hidden" name="img{{$i}}" id="test{{$i}}" value="">
                        <input type="hidden" name="imgid{{$i}}" id="imid{{$i}}" value="">
                        <input id="input-file{{$i}}" class="upload-image"  type="file"  name="photos{{$i}}" accept="image/jpeg, image/png">
                    </div>
                  @endfor
  
                </div>  
        {{--         <div class="form-group" style="display: flex;flex-direction: column;">
                    <label class="control-label" style="padding: 0 15px;">Odaberite kategoriju</label>
                    <div class="col-sm-10">
                        <select id="" name="category_id" id="category">
                            <option value="1">Kategorija1</option>
                            <option value="2">Kategorija2</option>
                            <option value="3">Kategorija3</option>
                        </select>
                    </div>
                  </div>  --}}  
                <div class="form-group col-sm-10" style="margin: 30px 0">
                    <label class="control-label" >Opis</label>
                    <textarea class="form-control" name="body"  rows="5" required id="body"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="form-group col-sm-10">
                </div>
                 <button type="button" class="btn btn-primary confirm-button" style="background: #4ECDC4; border:#4ECDC4;">Sačuvaj izmjene</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  
  {{-- Modal End --}}