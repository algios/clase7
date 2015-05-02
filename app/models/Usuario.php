<?php


class Usuario extends Eloquent {

    protected $table = 'usuario';

    public function misPublicaciones(){
    $publicaciones = Publicacion::where('user_id',Auth::user()->id)
                                        ->orderBy('id','desc')
                                        ->get();
      

}
}