@extends('layouts.app')

@section('content')
    <div class="info">
        <img src="{{asset("images/logo.png")}}" width="300">
        <h1> Inscription</h1>
    </div>



    <form method="post" id="register-form" class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="">
        <ul id="progressbar">
            <li class="active">Informations Personnelles</li>
            <li>Adresses</li>
            <li>Informations de connexion</li>
        </ul>

        <!-- USER INFORMATION FIELD SET -->
        <fieldset>
            <h2 class="fs-title">Informations Personnelles</h2>
            <!-- Begin What's Your First Name Field -->
            <div class="hs_nom field hs-form-field">
                <label for="nom">Votre nom *</label>
                <input id="nom" name="nom" required="required" type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Votre nom est requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>
            <div class="hs_prenom field hs-form-field">
                <label for="prenom">Votre prenom *</label>
                <input id="prenom" name="prenom" required="required" type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Votre prenom est requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>
            <div class="hs_dateNaissance field hs-form-field">
                <label for="dateNaissance">Date de naissance *</label>
                <input id="dateNaissance" name="date_naissance"  type="date" value="" placeholder="" data-rule-required="false" data-msg-required="Votre prenom est requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>
            <div class="hs_lieuNaissance field hs-form-field">
                <label for="lieuNaissance">Lieu de naissance (Pays)</label>
                <input id="lieuNaissance" name="lieu_naissance"  type="text" value="" placeholder="" data-rule-required="true" data-msg-required="ce champ est requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>
            <div class="hs_pays field hs-form-field">
                <label for="pays">Pays de residence</label>
                <select type="text" id="pays" class="form-control validate" data-rule-required="true" data-msg-required="Votre pays est requis">
                    <option>Algerie</option>
                    <option  selected="selected">Bénin</option>
                    <option>Togo</option>
                    <option>Gabon</option>
                    <option>Guinée</option>
                    <option>Sénégal </option>


                    <option value="France">France </option>

                    <option value="Afghanistan">Afghanistan </option>
                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                    <option value="Afrique_du_sud">Afrique_du_Sud </option>
                    <option value="Albanie">Albanie </option>
                    <option value="Allemagne">Allemagne </option>
                    <option value="Andorre">Andorre </option>
                    <option value="Angola">Angola </option>
                    <option value="Anguilla">Anguilla </option>
                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                    <option value="Argentine">Argentine </option>
                    <option value="Armenie">Armenie </option>
                    <option value="Australie">Australie </option>
                    <option value="Autriche">Autriche </option>
                    <option value="Azerbaidjan">Azerbaidjan </option>

                    <option value="Bahamas">Bahamas </option>
                    <option value="Bangladesh">Bangladesh </option>
                    <option value="Barbade">Barbade </option>
                    <option value="Bahrein">Bahrein </option>
                    <option value="Belgique">Belgique </option>
                    <option value="Belize">Belize </option>
                    <option value="Bermudes">Bermudes </option>
                    <option value="Bielorussie">Bielorussie </option>
                    <option value="Bolivie">Bolivie </option>
                    <option value="Botswana">Botswana </option>
                    <option value="Bhoutan">Bhoutan </option>
                    <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                    <option value="Bresil">Bresil </option>
                    <option value="Brunei">Brunei </option>
                    <option value="Bulgarie">Bulgarie </option>
                    <option value="Burkina_Faso">Burkina_Faso </option>
                    <option value="Burundi">Burundi </option>

                    <option value="Caiman">Caiman </option>
                    <option value="Cambodge">Cambodge </option>
                    <option value="Cameroun">Cameroun </option>
                    <option value="Canada">Canada </option>
                    <option value="Canaries">Canaries </option>
                    <option value="Cap_vert">Cap_Vert </option>
                    <option value="Chili">Chili </option>
                    <option value="Chine">Chine </option>
                    <option value="Chypre">Chypre </option>
                    <option value="Colombie">Colombie </option>
                    <option value="Comores">Colombie </option>
                    <option value="Congo">Congo </option>
                    <option value="Congo_democratique">Congo_democratique </option>
                    <option value="Cook">Cook </option>
                    <option value="Coree_du_Nord">Coree_du_Nord </option>
                    <option value="Coree_du_Sud">Coree_du_Sud </option>
                    <option value="Costa_Rica">Costa_Rica </option>
                    <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                    <option value="Croatie">Croatie </option>
                    <option value="Cuba">Cuba </option>

                    <option value="Danemark">Danemark </option>
                    <option value="Djibouti">Djibouti </option>
                    <option value="Dominique">Dominique </option>

                    <option value="Egypte">Egypte </option>
                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                    <option value="Equateur">Equateur </option>
                    <option value="Erythree">Erythree </option>
                    <option value="Espagne">Espagne </option>
                    <option value="Estonie">Estonie </option>
                    <option value="Etats_Unis">Etats_Unis </option>
                    <option value="Ethiopie">Ethiopie </option>

                    <option value="Falkland">Falkland </option>
                    <option value="Feroe">Feroe </option>
                    <option value="Fidji">Fidji </option>
                    <option value="Finlande">Finlande </option>
                    <option value="France">France </option>

                    <option value="Gambie">Gambie </option>
                    <option value="Georgie">Georgie </option>
                    <option value="Ghana">Ghana </option>
                    <option value="Gibraltar">Gibraltar </option>
                    <option value="Grece">Grece </option>
                    <option value="Grenade">Grenade </option>
                    <option value="Groenland">Groenland </option>
                    <option value="Guadeloupe">Guadeloupe </option>
                    <option value="Guam">Guam </option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernesey">Guernesey </option>
                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                    <option value="Guyana">Guyana </option>
                    <option value="Guyane_Francaise ">Guyane_Francaise </option>

                    <option value="Haiti">Haiti </option>
                    <option value="Hawaii">Hawaii </option>
                    <option value="Honduras">Honduras </option>
                    <option value="Hong_Kong">Hong_Kong </option>
                    <option value="Hongrie">Hongrie </option>

                    <option value="Inde">Inde </option>
                    <option value="Indonesie">Indonesie </option>
                    <option value="Iran">Iran </option>
                    <option value="Iraq">Iraq </option>
                    <option value="Irlande">Irlande </option>
                    <option value="Islande">Islande </option>
                    <option value="Israel">Israel </option>
                    <option value="Italie">italie </option>

                    <option value="Jamaique">Jamaique </option>
                    <option value="Jan Mayen">Jan Mayen </option>
                    <option value="Japon">Japon </option>
                    <option value="Jersey">Jersey </option>
                    <option value="Jordanie">Jordanie </option>

                    <option value="Kazakhstan">Kazakhstan </option>
                    <option value="Kenya">Kenya </option>
                    <option value="Kirghizstan">Kirghizistan </option>
                    <option value="Kiribati">Kiribati </option>
                    <option value="Koweit">Koweit </option>

                    <option value="Laos">Laos </option>
                    <option value="Lesotho">Lesotho </option>
                    <option value="Lettonie">Lettonie </option>
                    <option value="Liban">Liban </option>
                    <option value="Liberia">Liberia </option>
                    <option value="Liechtenstein">Liechtenstein </option>
                    <option value="Lituanie">Lituanie </option>
                    <option value="Luxembourg">Luxembourg </option>
                    <option value="Lybie">Lybie </option>

                    <option value="Macao">Macao </option>
                    <option value="Macedoine">Macedoine </option>
                    <option value="Madagascar">Madagascar </option>
                    <option value="Madère">Madère </option>
                    <option value="Malaisie">Malaisie </option>
                    <option value="Malawi">Malawi </option>
                    <option value="Maldives">Maldives </option>
                    <option value="Mali">Mali </option>
                    <option value="Malte">Malte </option>
                    <option value="Man">Man </option>
                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                    <option value="Maroc">Maroc </option>
                    <option value="Marshall">Marshall </option>
                    <option value="Martinique">Martinique </option>
                    <option value="Maurice">Maurice </option>
                    <option value="Mauritanie">Mauritanie </option>
                    <option value="Mayotte">Mayotte </option>
                    <option value="Mexique">Mexique </option>
                    <option value="Micronesie">Micronesie </option>
                    <option value="Midway">Midway </option>
                    <option value="Moldavie">Moldavie </option>
                    <option value="Monaco">Monaco </option>
                    <option value="Mongolie">Mongolie </option>
                    <option value="Montserrat">Montserrat </option>
                    <option value="Mozambique">Mozambique </option>

                    <option value="Namibie">Namibie </option>
                    <option value="Nauru">Nauru </option>
                    <option value="Nepal">Nepal </option>
                    <option value="Nicaragua">Nicaragua </option>
                    <option value="Niger">Niger </option>
                    <option value="Nigeria">Nigeria </option>
                    <option value="Niue">Niue </option>
                    <option value="Norfolk">Norfolk </option>
                    <option value="Norvege">Norvege </option>
                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                    <option value="Oman">Oman </option>
                    <option value="Ouganda">Ouganda </option>
                    <option value="Ouzbekistan">Ouzbekistan </option>

                    <option value="Pakistan">Pakistan </option>
                    <option value="Palau">Palau </option>
                    <option value="Palestine">Palestine </option>
                    <option value="Panama">Panama </option>
                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                    <option value="Paraguay">Paraguay </option>
                    <option value="Pays_Bas">Pays_Bas </option>
                    <option value="Perou">Perou </option>
                    <option value="Philippines">Philippines </option>
                    <option value="Pologne">Pologne </option>
                    <option value="Polynesie">Polynesie </option>
                    <option value="Porto_Rico">Porto_Rico </option>
                    <option value="Portugal">Portugal </option>

                    <option value="Qatar">Qatar </option>

                    <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                    <option value="Reunion">Reunion </option>
                    <option value="Roumanie">Roumanie </option>
                    <option value="Royaume_Uni">Royaume_Uni </option>
                    <option value="Russie">Russie </option>
                    <option value="Rwanda">Rwanda </option>

                    <option value="Sahara Occidental">Sahara Occidental </option>
                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                    <option value="Saint_Marin">Saint_Marin </option>
                    <option value="Salomon">Salomon </option>
                    <option value="Salvador">Salvador </option>
                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                    <option value="Seychelles">Seychelles </option>
                    <option value="Sierra Leone">Sierra Leone </option>
                    <option value="Singapour">Singapour </option>
                    <option value="Slovaquie">Slovaquie </option>
                    <option value="Slovenie">Slovenie</option>
                    <option value="Somalie">Somalie </option>
                    <option value="Soudan">Soudan </option>
                    <option value="Sri_Lanka">Sri_Lanka </option>
                    <option value="Suede">Suede </option>
                    <option value="Suisse">Suisse </option>
                    <option value="Surinam">Surinam </option>
                    <option value="Swaziland">Swaziland </option>
                    <option value="Syrie">Syrie </option>

                    <option value="Tadjikistan">Tadjikistan </option>
                    <option value="Taiwan">Taiwan </option>
                    <option value="Tonga">Tonga </option>
                    <option value="Tanzanie">Tanzanie </option>
                    <option value="Tchad">Tchad </option>
                    <option value="Thailande">Thailande </option>
                    <option value="Tibet">Tibet </option>
                    <option value="Timor_Oriental">Timor_Oriental </option>
                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                    <option value="Tristan da cunha">Tristan de cuncha </option>
                    <option value="Tunisie">Tunisie </option>
                    <option value="Turkmenistan">Turmenistan </option>
                    <option value="Turquie">Turquie </option>

                    <option value="Ukraine">Ukraine </option>
                    <option value="Uruguay">Uruguay </option>

                    <option value="Vanuatu">Vanuatu </option>
                    <option value="Vatican">Vatican </option>
                    <option value="Venezuela">Venezuela </option>
                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                    <option value="Vietnam">Vietnam </option>

                    <option value="Wake">Wake </option>
                    <option value="Wallis et Futuma">Wallis et Futuma </option>

                    <option value="Yemen">Yemen </option>
                    <option value="Yougoslavie">Yougoslavie </option>

                    <option value="Zambie">Zambie </option>
                    <option value="Zimbabwe">Zimbabwe </option>
                </select>

                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>
            <div class="hs_tel field hs-form-field">
                <label for="tel">Numéro de téléphone</label>
                <input id="tel" name="tel"  type="number" value="" placeholder=""  minlength="8" data-rule-required="true" data-msg-required="Votre numéro de téléphone est requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>
            <div class="hs_numeroWhat field hs-form-field">
                <label for="numeroWhat">Numéro WhatsApp</label>
                <input id="numeroWhat" name="whatsapp_tel"  type="number" value="" minlength="8" placeholder="" data-rule-required="false" data-msg-required="Votre numéro de téléphone est requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>

            <!-- End Total Number of Constituents in Your Database Field -->
            <input type="button" data-page="1" name="next" class="next action-button" value="Suivant" />
        </fieldset>

        <!-- Cultivation2 FIELD SET -->
        <fieldset>
            <h2 class="fs-title">Addresses</h2>
            <h3 class="fs-subtitle"></h3>

            <div class="hs_adress1 field hs-form-field">
                <label for="adress1">Adresse de résidence *</label>
                <input id="adress1" name="address" required="required" type="text" value="" placeholder="Exp : Carré XXX, Maison XXX, Quartier XXX" data-rule-required="true" data-msg-required="Ce champ est requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>
            <div class="hs_quartier field hs-form-field">
                <label for="quartier">Quartier ou Village  *</label>
                <input id="quartier" name="quartier" required="required" type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Votre quartier est requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>

            <div class="hs_arrondissement field hs-form-field">
                <label for="arrondissement">Arrondissement  </label>
                <input id="arrondissement" name="arrondissement" required="required" type="text" value="" placeholder="" data-rule-required="false" data-msg-required="Votre arrondissement est requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>


            <div class="hs_profession field hs-form-field">
                <label for="profession">Profession  *</label>
                <input id="profession" name="profession" required="required" type="text"  value="" placeholder="" data-rule-required="true" data-msg-required="Votre profession est requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>

            <div class="hs_centre_interet field hs-form-field">
                <label for="centre_interet">Vos Centres d’Intérêt  *</label>
                <input id="centre_interet" name="centre_interet" required="required" type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Ce champ est requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
             </span>
            </div>


            <input type="button" data-page="4" name="previous" class="previous action-button" value="Précédent" />
            <input type="button" data-page="4" name="next" class="next action-button" value="Suivant" />
        </fieldset>

        <!-- RETENTION FIELD SET -->
        <fieldset>
            <h2 class="fs-title">Informations de Connexion</h2>
            <h3 class="fs-subtitle"></h3>
            <h6  style="display: none;" class="alert alert-danger form-error-viewer"></h6>

            <!-- Begin Total Number of Donors Who Gave in Year 1 Field -->
            <!-- Begin What's Your Email Field -->
            <div class="hs_email field hs-form-field">

                <label for="email">Votre adresse email *</label>

                <input id="email" name="email" required="required" type="email" value="" placeholder="" data-rule-required="true" data-msg-required="Entrez un email valide" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
            </div>
            <div class="hs_email field hs-form-field">

                <label for="password">Votre mot de passe *</label>

                <input id="password" name="password" class="pass" required="required" type="password" value="" placeholder="" data-rule-required="true" data-msg-required="Mot de passe requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
            </div>
            <div class="hs_password_confirmation field hs-form-field">
                <label for="password_confirmation">Confirmer mot de passe *</label>
                <input id="password_confirmation" class="pass" name="password_confirmation" required="required" type="password" value="" placeholder="" data-rule-required="true" data-msg-required="Confirmation Mot de passe requis" >
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
            </div>
            <h6 id="pass-error" style="display: none;" class="alert alert-danger">Les mot de passes ne sont pas conformes</h6>

            <div class="form-loader" style="text-align: center;display: none">
                <img src="{{asset('images/loader.gif')}}" alt="loader" width="70">
            </div>
            <input type="button" data-page="5" name="previous" class="previous action-button" value="Précédent" />
            <input id="submit" class=" action-button float-right" type="submit" value="S'inscrire">
        </fieldset>

        <fieldset>
            <h2 class="fs-title">It's on the way!</h2>
            <h3 class="fs-subtitle">Thank you for trying out our marketing grader, please go check your email for your fundraising report card and some helpful tips to improve it!</h3>
        </fieldset>
    </form>
    @endsection

@section('js')
    <script src="{{asset('js/sweetalert2.all.min.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $(document).on('submit','#register-form',function (e) {
            e.preventDefault();

            let password = $('#password').val();
            let password_confirmation = $('#password_confirmation').val();
            if (password!=password_confirmation) {
                $('#pass-error').slideDown()
                return;
            }
            $('.form-loader').fadeIn();

            let url = '{{route('ntc.register')}}';
            let loginBtn = ('#login-btn');
            let form = $('#register-form');
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

                    }else{

                        $('#modalregisterbecomentc').modal('hide');

                        Swal.fire("Confirmation", 'Inscription réussie avec succès', "success").then(()=>{
                            window.location = window.origin+'/admin/login';
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
            })
        });
        $('.pass').on('keypress',function (e) {
            $("#pass-error").slideUp();

        });
        $('#email').on('keypress',function (e) {
            $("#email-error").slideUp();

        })

    </script>
    @stop
