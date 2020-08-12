<!-- Modal -->
<div class="modal fade" id="myModalW" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Izmijenite Putni Nalog</h4>
            </div>
            <div class="modal-body">

<style>
    #date{    margin-top: 10px;}
</style>
              <form method="post" id="edit-formW" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group" style="display: flex;flex-direction: column;">
                        <label class="col-sm-2 col-sm-2 control-label">Izmijenite Naslov</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control mb-3" name="title" id="title" required disabled>
                          <input type="date" id="date" placeholder="DD-MM-YYYY" name="title">

                        </div>
                    </div>

                    <div class="form-group input-group control-group col-sm-10" style="padding: 15px;">
                        <label for="pdf_file">Novi dokument</label>
                        {{ Form::file('pdf_file') }}
                    </div>

                    <div class="form-group col-sm-10">
                        <button type="button" class="btn btn-primary confirm-button" style="background: #4ECDC4; border:#4ECDC4;">Izmjenite putni nalog</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
