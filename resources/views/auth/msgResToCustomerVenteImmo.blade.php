
<h1 style="background:#f7810a;"> {{__('Bonjour')}} {{ $data['prenom'] }} {{  $data['nom'] }}</h1>
<h2 style="background:#212126;"> {{__('Merci Pour Votre Visite')}}</h2>
<<<<<<< HEAD
<h3 style="background:#212126;"> {{__('Votre Reservation a bien été faite ')}}</h4>
<br>
<h2 style="background:#f7810a;"> {{__('Informations sur votre reservation')}}</h2>
<h4 style="color:#f7810a;">
    {{__("libellée de l'immobilier(Vente) :")}} <span style="color:#e3e3e3;">{{$pro[0]->designation}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("Type de l'immobilier :")}} <span style="color:#e3e3e3;">{{$pro[0]->lib}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("date reservation :")}} <span style="color:#e3e3e3;">{{$res[0]->res_created_at}}</span>
=======
<h3 style="background:#212126;"> {{__('Votre Reservation a bien été faite')}}</h4>
<br>
<h2 style="background:#f7810a;"> {{__('Informations sur votre reservation')}}</h2>
<h4 style="color:#f7810a;">
    {{__("libellée de l'immobilier(Vente)")}}: <span style="color:#e3e3e3;">{{$pro[0]->designation}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("Type de l'immobilier")}} :<span style="color:#e3e3e3;">{{$pro[0]->lib}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("date reservation")}} : <span style="color:#e3e3e3;">{{$res[0]->res_created_at}}</span>
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
</h4>


<p>
<<<<<<< HEAD
    {{__("vous pouvez nous contacter , si vous voulez plus d'information sur votre reservation et pour la confirmer veuillez utiliser notre email ou notre numéro tele :")}} 
</p>
<h4>
    {{__("email :")}} example@gmail.com
</h4>
<h4>
    {{__("tele :")}} +212554654454654
</h4>
<h4>
    {{__("Whatsapp :")}} +212554654454654
=======
    {{__("vous pouvez nous contacter , si vous voulez plus d'information sur votre reservation et pour la confirmer veuillez utiliser notre email ou notre numéro tele")}} :
</p>
<h4>
    {{__("email")}} :  {{ $infos[0]->email }}
</h4>
<h4>
    {{__("tele")}} : {{ $infos[0]->tele }}
</h4>
<h4>
    {{__("Whatsapp")}} : {{ $infos[0]->wp_tele }}
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
</h4>
<h5>
    {{__("Cordialement")}}
</h5>
<h1>
    {{__("Marrakech Zone Immo à votre service")}}
</h1>