
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    function check_input(id_input, error_msg, place_error) {

        if (id_input.replace(/\s/g, '') == '') {
            error = false;
            $("#" + place_error).html(error_msg);
        }
    }

    function check_select(id_select, error_msg, place_error) {
        if (id_select == 0) {
            error = false;
            $("#" + place_error).html(error_msg);
        }
    }

    function check_number(id_number, error_msg, place_error) {
        if (id_number <= 0 || isNaN(id_number)) {
            error = false;
            $("#" + place_error).html(error_msg);
        }
    }

</script>

<!-- sections control start -->

<script>
    let sectionOne = $('#section-1');
    let sectionTwo = $('#section-2');
    let sectionThree = $('#section-3');
    let sectionFour = $('#section-4');



    $('.section-btn').click(function (e) {
        e.preventDefault();
        let id = $(this).attr('id');
        switch (id){
            case  'next1' :

                error = true;

                $("#nomHelp").html('');
                $("#prenomHelp").html('');
                $("#dateNaissanceHelp").html('');
                $("#lieuNaissanceHelp").html('');
                $("#paysHelp").html('');
                $("#telHelp").html('');
               // $("#numeroWhatHelp").html('');


                check_input($("#nom").val(),"Veuillez saisir votre nom","nomHelp");
                check_input($("#prenom").val(),"Veuillez saisir votre prénom","prenomHelp");
                check_input($("#dateNaissance").val(),"Veuilez saisir votre date de naissance","dateNaissanceHelp");
                check_input($("#lieuNaissance").val(),"Veuilez saisir votre lieu de naissance","lieuNaissanceHelp");
                check_select($("#pays").val().length,"Veuilez selectionner un pays","paysHelp");
                check_number($("#tel").val(),"Votre téléphone est requis","telHelp");
            //    check_input($("#numeroWhat").val().length,"Numéro requis","numeroWhatHelp");

                if (error){
                    sectionOne.fadeOut('slow',function () {
                        sectionTwo.fadeIn('slow');
                    });

                }
                break;
            case 'next2' :

                error = true;
                $("#adress1Help").html('');
                $("#arrondissementHelp").html('');
                $("#quartierHelp").html('');
                $("#professionHelp").html('');
                $("#centre_interetHelp").html('');

                check_input($("#adress1").val(),"Vueillez saisir une adresse","adress1Help");
                check_input($("#arrondissement").val(),"Arrondissement requis.","arrondissementHelp");
                check_input($("#quartier").val(),"Quartier requis","quartierHelp");
                check_input($("#profession").val(),"Profession requis.","professionHelp");
              //  check_input($("#centre_interet").val(),"Le code du cours est requis.","centre_interetHelp");

                if (error){
                    sectionTwo.fadeOut('slow',function () {
                        sectionThree.fadeIn('slow');
                    });

                }

                break;
            case 'submit-btn' :
                error = true;
                $("#usernameHelp").html('');
                $("#passwordHelp").html('');
                $("#confirm_passwordHelp").html('');

                check_input($("#username").val(),"Email requis.","usernameHelp");
               // check_input($("#username").val(),"Le code du cours est requis.","usernameHelp");
                check_input($("#password").val(),"Mot de passe  requis.","passwordHelp");
                check_input($("#confirm_password").val(),"Confirmation mot de passe requis.","confirm_passwordHelp");

                if (error){

                    if ($('#password').val()==$('#confirm_password').val()){
                        //rigister the user
                        let form = $('#register-form');
                        let submitBtn = $('#submit-btn');


                            $('.form-submit-btn').fadeOut();
                            $('.form-loader').fadeIn();
                            submitBtn.attr('disabled',true);

                            let data = new FormData(form[0]);
                            let url =  '{{route('ntc.register')}}';

                            //alert(url)
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
                                        alert('hello')
                                        $('.form-error-viewer').text(data.message)
                                        $('.form-error-viewer').slideDown();
                                        $('.form-submit-btn').fadeIn();
                                        $('.form-loader').fadeOut();
                                        submitBtn.attr('disabled',false)
                                        Swal.fire("Erreur", "Oops, une erreur s'est produite veuillez réessayer", "error");

                                    }else{

                                        $('#modalregisterbecomentc').modal('hide');
                                        Swal.fire("Confirmation", 'Inscription réussie avec succès', "success").then(()=>{
                                            window.location = '{{route('voyager.login')}}';
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
                                submitBtn.attr('disabled',false);
                            })


                    } else{
                        $("#confirm_passwordHelp").html('Les mots de passe ne correspondent pas');

                    }

                }

                break;

            case 'prev2' :

                sectionTwo.fadeOut('slow',function () {
                    sectionOne.fadeIn('slow');
                });

                break;

            case 'prev3' :

                sectionThree.fadeOut('slow',function () {
                    sectionTwo.fadeIn('slow');
                });

                break;



        }
    })


</script>

<!-- sections control end -->

