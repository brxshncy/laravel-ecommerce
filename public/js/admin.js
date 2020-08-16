$('document').ready(function(){
    let i = 1;
    $('#add_more').on('click',function(){
        i++;
        let sc_rows = $('#sc-rows');
        sc_rows.append(`<div class="input-group  mb-3">`);
        sc_rows.append(`<input type="text" class="form-control" placeholder="(eg. Chair)" name="sub_categories[]">`);
        sc_rows.append(`<div class="input-group-append">`);
        sc_rows.append(`<button class="btn btn-danger nput-group-text" id="add_more">X</button>`);
        sc_rows.append(`</div>`);
        sc_rows.append(`</div>`);
    })
})