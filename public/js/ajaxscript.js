    
var url_val = "/test";
var url_val1 = "/my_products";

    //display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#myModal').modal('show');
    });

      $("#btn_my_btn").click(function(e){
      	console.log($('meta[name="_token"]').attr('content'));
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault();
            var type = "POST";
            var formData = {
                 name: "hello",
                 details: "hello its me"
            }
            
          
          $.ajax({
            type:type,
            url:url_val,
            data: {"name":"hello","details":"this is test"},
            dataType: 'json',
            success: function (data) {
                console.log(data);
            },
            error: function (xhr_status,data,options) {
                console.log(xhr_status.status);
                console.log('Error:', data);
            }
        });

    });