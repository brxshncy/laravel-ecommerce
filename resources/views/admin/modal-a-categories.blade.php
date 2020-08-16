<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Categories</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col">
                  <div class="form-group">
                      <label for="">Category Name:</label>
                      <input type="text" placeholder="(eg. Furniture)" class="form-control">
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <div class="form-group">
                      <label for="">Sub Categories</label>
                      <div class="input-group  mb-3">
                        <input type="text" class="form-control" placeholder="(eg. Chair)" name="sub_categories[]">
                        <div class="input-group-append">
                            <button class="btn btn-primary nput-group-text" id="add_more">Add More</button>
                        </div>
                      </div>
                      <div id="sc-rows">
                          
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>