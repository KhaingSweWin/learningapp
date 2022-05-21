$(document).ready(function(){
    $('#save').on('click',function(event){
        console.log('hello')
        event.preventDefault();
        let name=$('#name').val();
        let description=$('#description').val();
        let fee=$('#fee').val();
        let seat=$('#seat').val();
        let time=$('#time').val();
        let age=$('#age').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       var url=$("#contactForm").attr('data-action');   
        $.ajax({
            url:url,
            type:"POST",
            data:{
                name:name,
                description:description,
                fee:fee,
                seat:seat,
                time:time,
                age:age
                
            },
            success:function(result){
                $('#courseForm').hide();
                
                console.log(result);
                $('#adddata').append(result.name);
                
            },
            error:function(error){

            }
        })

    })
})