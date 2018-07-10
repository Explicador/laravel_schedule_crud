<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Telefone extends Model {
        protected $fillable = [
            'id',
            'ddd',
            'telefone',
            'id_pessoa'
        ];

        protected $table = 'telefone';

        public function pessoa() {
            return $this->belongsTo(Pessoa::class,'id_pessoa');
        }
    }
