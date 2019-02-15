
<script>
    $('form[id="second_form"]').validate({
        rules:{
            fname: 'required',
            lname: 'required',
            user_email:{
                required: true,
                email: true,
            },
            psword:{
                required: true,
                minlength: 8,
            }
        },
        messages:{
            fname: 'This field is required',
            lname: 'This field is required',
            user_email: 'Enter a valid email',
            psword:{
                minlength: 'Password must be at least with 8 characters',
            }
        },
        submitHandler: function(form){
            form.submit();
        }
    });
</script>

