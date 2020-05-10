
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
</script>

<!-- sections control start -->

<script>

    //let data = new FormData(form[0]);
    //let url =  '{{route('ntc.register')}}';

    let submitQuiz = $('#submit-quiz');

    submitQuiz.on('click',function (e) {
        e.preventDefault();
        $('.form-submit-btn').fadeOut();
        $('.form-loader').fadeIn();
        submitQuiz.attr('disabled',true);
        let answers = $('input[value="1"]:checked');
        let mark = answers.length;
        setTimeout(function () {
            if (mark<5){
                $('.form-error-viewer').text("Désolé vous n'avez pas réussis le texte d'engagement pour la création d'un cercle de Jeune.")
                $('.form-error-viewer').slideDown();
                $('.form-submit-btn').fadeIn();
                $('.form-loader').fadeOut();
                submitQuiz.attr('disabled',false)
            }else{
                submitQuiz.attr('disabled',false)

                $('#section-1-cj').fadeOut('slow',function () {
                    $('#success-section').fadeIn();

                })


            }
            $('.form-submit-btn').fadeIn();

            $('.form-loader').fadeOut();
        },1000)


    })

    $(document).on('submit','#login-form',function (e) {
        e.preventDefault();
        let url = '{{route('cj.login')}}';
        let loginBtn = ('#login-btn');
        let form = $('#login-form');
        let data = new FormData(form[0]);



        $.ajax({
            url :url,
            data: data,
            method:'POST',
            cache: false,
            contentType: false,
            processData: false,
            // dataType : 'json',
            success: function (data) {
                console.log('----------success-------------')
                console.log(data)

                if (data.error){
                    $('.form-error-viewer').text(data.message)
                    $('.form-error-viewer').slideDown();
                    $('.form-submit-btn').fadeIn();
                    $('.form-loader').fadeOut();
                    loginBtn.attr('disabled',false)

                }else{

                    $('#modalregisterbecomentc').modal('hide');

                    Swal.fire("Confirmation", 'Inscription réussie avec succès', "success").then(()=>{
                        window.location = window.location;
                    })

                }

            },
            error : function (error) {
                console.log('--------------error------------')
                console.log(error)

            }
        }).always(function () {
            $('.form-submit-btn').fadeIn();
            $('.form-loader').fadeOut();
            loginBtn.attr('disabled',false);
        })
    })


$('.choice-btn').click(function (e) {
    e.preventDefault();
   // $($(this).data('target')).modal('show')
    $('#create-cj').modal('hide')
})

</script>

<!-- sections control end -->

