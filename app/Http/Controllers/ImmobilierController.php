<?php

namespace App\Http\Controllers;

use App\Adresse;
use App\GalleryImmo;
use App\Immobilier;
use App\TypeImmobilier;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\DB as FacadesDB;

use function PHPSTORM_META\type;

class ImmobilierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang, $mycategorie, $type)
    {

        $home_carasoul = DB::table('gallery_home_carasouls')->where('id', 1)->get();

        $query = DB::select('select * from immobiliers where categorie=? and id_type=?', [
            $mycategorie, $type
        ]);

        return view('immobiliers.immobilier_ventes', [
            'immos' => $query,
            'home_carasoul' => $home_carasoul,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        //    ini_set('post_max_size', '100M');
        // dd($request->file('image_src'));
        request()->validate([
            'image_src' => ['required', 'image'],
            'img_1' => ['required', 'image'],
            'img_2' => ['required', 'image'],
            'img_3' => ['required', 'image'],
            'img_4' => ['required', 'image'],
            'designation' => 'required|unique:immobiliers'
        ]);
        $categorie = $request->mycategorie;
        $type = $request->type;
        $designation = $request->designation;
        $prix_min = $request->prix_min;
        $prix_max = $request->prix_max;
        $nbr_chbr = $request->nbr_chbr;
        $nbr_etage = $request->nbr_etage;
        $image_src = $request->image_src;
        $imgsec_1 = $request->img_1;
        $imgsec_2 = $request->img_2;
        $imgsec_3 = $request->img_3;
        $imgsec_4 = $request->img_4;
        $patente = $request->patente;
        $date_sep = $request->date_sep;
        // // dd($image_src);
        // dd($imgsec_1);
        // dd($imgsec_2);


        $superficie = $request->superficie;

        if ($prix_max < 0) {
            return view('admin.immobilier.create', ['user' => Auth::user(), 'msgErr1' => "le prix max ne doit pas étre nul !;"]);
        } elseif ($superficie == 0) {
            return view('admin.immobilier.create', ['user' => Auth::user(), 'msgErr2' => "La superficie ne doit pas étre nulle !;"]);
        } else {
            $exists = DB::table('type_immobiliers')->where('lib', $type)->count();
            // if ($exists == 0) {
            //     $new_type = new TypeImmobilier();
            //     $new_type->lib = $type;
            //     $new_type->save();
            // }


            $type_exists = DB::table('type_immobiliers')->where('lib', $type)->get()->get(0)->id;
            $id_immo = DB::table('immobiliers')->insertGetId(
                [
                    'id_type' => $type_exists,
                    'designation' => $designation,
                    'categorie' => $categorie,
                    'superfecie' => $superficie,
                    'nbr_chambre' => $nbr_chbr,
                    'nbr_etage' => $nbr_etage,
                    'price_min' => $prix_min,
                    'price_max' => $prix_max,
                    'patente' => $patente,
                    'pic_src' => $image_src->store('uploads-mx', 'public'),
                    'date_sep' => $date_sep,
                ],
            );

            $id_gall_immo = DB::table('gallery_immos')->insertGetId(
                [
                    'immobilier_id' => $id_immo,
                    'first_img' => $imgsec_1->store('uploads-mx', 'public'),
                    'sec_img' => $imgsec_2->store('uploads-mx', 'public'),
                    'third_img' => $imgsec_3->store('uploads-mx', 'public'),
                    'fourth_img' => $imgsec_4->store('uploads-mx', 'public'),
                ],
            );

            //redirect me to the products that exists for the current type insert
            $immobiliers = DB::table('immobiliers')->where('id_type', $type_exists)->get();
            return view('admin.immobilier.index', [
                'user' => Auth::user(),
       'lib_type'=>$type,
                'immos' => $immobiliers, 'success' => 1
            ]);
        }
    }

    //from the other one to the perfect one
    // public function store()
    // {
    //      request()->validate([
    //         'pic_src' => ['required','image'],
    //         'img_1' => ['required','image'],
    //         'img_2' => ['required','image'],
    //         'img_3' => ['required','image'],
    //         'img_4' => ['required','image'],
    //      ]);


    //     $id_etat = DB::table('etats')->insertGetId(
    //         ['description' => $data['etat']],
    //     );
    //     $id_categorie = DB::table('categorie_cars')->where('designation',$data['categorie'])->get();

    //     $marque = DB::table('marques')->where('libelle',$data['marque'])->get();
    //     if($marque->isEmpty()){

    //         $id_marque = DB::table('marques')->insertGetId(
    //             ['categorie_id' => $id_categorie[0]->id,'libelle' => $data['marque']],
    //         );
    //     }else{
    //         $id_marque = $marque[0]->id ;

    //     }


    //     $id_car = DB::table('cars')->insertGetId(
    //         [
    //             'etat_id' => $id_etat ,
    //             'marque_id' => $id_marque,
    //             'numm_immatric' => $data['numm_immat'],
    //             'date_mise_service' => date("y-m-d h:i:s"),
    //             'kilometrage' => $data['kilometrage'],
    //             'nbr_place' => $data['nbr_place'],
    //             'prix_min_per_day' => $data['prix_min'],
    //             'prix_max_per_day' => $data['prix_max'],
    //             'days_separator' => $data['days_separator'],
    //             'couleur' => $data['couleur'],
    //             'charge_max' => $data['chare_max'],
    //             'deleted' => 0 ,
    //             'pic_src' => $imgpath_1 ,
    //         ],
    //     );
    //     $id_gall_car = DB::table('gallery_cars')->insertGetId(
    //         [
    //             'car_id' => $id_car ,
    //             'first_img' => $imgpath_2 ,
    //             'sec_img' => $imgpath_3 ,
    //             'third_img' => $imgpath_4 ,
    //             'fourth_img' => $imgpath_5 ,
    //         ],
    //     );
    //     $url = route('adminCar.index',['categorie' => $id_categorie[0]->id]) ;
    //     $lib = "produit" ;
    //     return view('done.creationDone',compact('url','lib'));
    // }


    public function indexCreate()
    {
        ini_set('post_max_size', '100M');
        return view('admin.immobilier.create', ['user' => Auth::user()]);
    }

    public function filter(Request $request)
    {

        if (isset($request->type)) {

            $home_carasoul = DB::table('gallery_home_carasouls')->where('id', 1)->get();
            $types = TypeImmobilier::all();
            // $query=DB::table('immobiliers')->where('categorie',3)->get();
            $query = Immobilier::where([
                ['id_type', '=', $request->type],
                ['categorie', '=', 3],
            ])->get();
            $count = count($types);
            if ($count == 0) {
                return back();
            } else {
                return view('immobiliers.immobilier_ventes', [
                    'immos' => $query,
                    'home_carasoul' => $home_carasoul,
                    'types' => $types
                ]);
            }
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function  indexUpdate($immobilier)

    {

        $types = TypeImmobilier::all();


        $immos = DB::table('immobiliers')->where('immobiliers.id', $immobilier)
            ->get()->get(0);

        $adresse = DB::table('adresses')->where('id', $immos->id_adresse)->get()->get(0);
      
        $gallery_immo = DB::table('gallery_immos')->where('immobilier_id', $immos->id)->get()->get(0);
        if ($gallery_immo == null) {
            // Session::put('errorNotFound',1);
            return view('admin.immobilier.update', ['immobilier' => $immos, 'types' => $types, 'adresse' => $adresse->description]);
        } else {
            return view('admin.immobilier.update', ['immobilier' => $immos, 'types' => $types, 'gallery' => $gallery_immo, 'adresse' => $adresse->description]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Immobilier $immobilier)
    {

        $gallery = DB::table('gallery_immos')->where('immobilier_id', $immobilier->id)->get();
        return view('immobiliers.details', ['immobilier' => $immobilier, 'gallery' => $gallery]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function show_location()
    {
        $query = DB::table('immobiliers')->where('categorie', 1)->get();
        $home_carasoul = DB::table('gallery_home_carasouls')->where('id', 2)->get();
        return view('immobiliers.immobilier_location', [
            'immos' => $query,
            'home_carasoul' => $home_carasoul,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Immobilier $immobilier)
    {
       $data= request()->validate([
            'image_src' => [  'image'],
            'img_1' => [  'image'],
            'img_2' => [  'image'],
            'img_3' => [ 'image'],
            'img_4' => [  'image'],
            'designation' => 'unique:immobiliers'
        ]);
        $categorie = $request->mycategorie;
        $type = $request->type;
        $designation = $request->designation;
        $prix_min = $request->prix_min;
        $prix_max = $request->prix_max;
        $nbr_chbr = $request->nbr_chbr;
        $nbr_etage = $request->nbr_etage;
        $patente = $request->patente;
        $date_sep = $request->date_sep;
       $adresse=$request->adresse;
       $image_src = $request->image_src;
       $imgsec_1 = $request->img_1;
       $imgsec_2 = $request->img_2;
       $imgsec_3 = $request->img_3;
       $imgsec_4 = $request->img_4;
        $superficie = $request->superficie;
        $type_exists = DB::table('type_immobiliers')->where('lib', $type)->get()->get(0)->id;
       
        $immo = DB::table('immobiliers')->where('immobiliers.id',$immobilier->id)
                 ->join('gallery_immos','gallery_immos.immobilier_id','=','immobiliers.id')
                ->get()->get(0);
        if(array_key_exists("image_src",$data)){
            $imgpath_1 = request('image_src')->store('uploads-mx', 'public');
            }else{
                $imgpath_1 = $immo->pic_src;
            }
            if(array_key_exists("img_1",$data)){
            $imgpath_2 = request('img_1')->store('uploads-mx', 'public');
            }else{
                $imgpath_2 = $immo->first_img;
            }
            if(array_key_exists("img_2",$data)){
                $imgpath_3 = request('img_2')->store('uploads-mx', 'public');
                }else{
                    $imgpath_3 = $immo->sec_img;
                }
                if(array_key_exists("img_3",$data)){
                    $imgpath_4 = request('img_3')->store('uploads-mx', 'public');
                    }else{
                        $imgpath_4 = $immo->third_img;
                    }
                    if(array_key_exists("img_4",$data)){
                        $imgpath_5 = request('img_4')->store('uploads-mx', 'public');
                        }else{
                            $imgpath_5 = $immo->fourth_img;
                        }

        
        
        
        $immo_update = DB::table('immobiliers')->where('id',$immobilier->id)->update([
            'id_type' => $type_exists,
            'designation' => $designation,
            'categorie' => $categorie,
            'superfecie' => $superficie,
            'nbr_chambre' => $nbr_chbr,
            'nbr_etage' => $nbr_etage,
            'price_min' => $prix_min,
            'price_max' => $prix_max,
            'patente' => $patente,
            'pic_src' => $imgpath_1,
            'date_sep' => $date_sep,
        ]);
        $adresse_update=DB::table('adresses')->where('id',$immobilier->id_adresse)->update([
            'description'=>$adresse
        ]);
        $gallery_update = GalleryImmo::where('immobilier_id', $immobilier->id)->update([

            'immobilier_id' => $immobilier->id,
            'first_img' => $imgpath_2,
            'sec_img' => $imgpath_3,
            'third_img' => $imgpath_4,
            'fourth_img' => $imgpath_5,
        ]);
        $home_carasoul = DB::table('gallery_home_carasouls')->where('id', 1)->get();
      $myType=DB::table('immobiliers')->where('id',$immobilier->id)->get()->get(0)->id_type;
    $immobiliers=DB::select('select * from immobiliers where id_type=? and categorie=?  and validated=0 and deleted=0',[$myType,$immobilier->categorie]);

    $update_success=1;
    return view('admin.immobilier.index',[
        'immos'=>$immobiliers,
           'user'=>Auth::user(),'lib_type'=>$type,
           'update_success'=>$update_success
           
      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function destroy($immobilier)
    {
        $query = DB::table('immobiliers')->where('id', $immobilier)->update(['deleted' => 1]);
        $categorie = Session::get('categorie');
        $immobiliers = DB::select('select * from immobiliers where id_type=?  and validated=0 and deleted=0 ', [$categorie]);

        Session::put('empty', 0);
        $lib_type = TypeImmobilier::where('id', $categorie)->get()->get(0)->lib;

        $count = count($immobiliers);

        if ($count == 0) {
            $empty = 1;
            Session::put('empty', 1);



            return view('admin.immobilier.index', [
                'user' => Auth::user(), 'lib_type' => $lib_type

            ]);
        } else {
            $types_immo = TypeImmobilier::all();


            return view('admin.immobilier.index', [
                'user' => Auth::user(),

                'immos' => $immobiliers,
                'lib_type' => $lib_type
            ]);
        }
    }
    public function test()
    {
        $types = DB::select("select distinct lib,id_type,categorie from type_immobiliers,immobiliers where
        immobiliers.id_type=type_immobiliers.id and categorie='3'");
        dd($types);
    }
}
