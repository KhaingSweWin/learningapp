$(document).ready(function()
{
    
    $('#add-course-form').on('submit',function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var url=$('#courseForm').attr('data-action');        
        $.ajax({
            url:"{{route('courses.store)}}",
            type:'POST',
            data:new FormData(this),
            success:function(response)
            {
                jQuery('.alert').html(response.success);
            },
            error: function(response) {
                console.log('response')
            }


        })
        
    })
})