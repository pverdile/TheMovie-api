<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discover extends Model
{
    /**
     * <b>SoftDeletes</b> Recurso utilizado para fazer deleção de registro lógico "sem excluir"
     * Usado no campo deleted_at da tabela 
     */
    // use SoftDeletes;

    /**
     * <b>table</b> Informa qual é a tabela que o modelo irá utilizar
    */
    protected $table = 'discovers';

    /**
     * <b>primaryKey</b> Informa qual a é a chave primaria da tabela
     */
    protected $primaryKey = "id";

    /**
     * <b>fillable</b> Informa quais colunas é permitido a inserção de dados (MassAssignment)
     *  
     */
    protected $fillable = [
        'poster_path',
        'adult',
        'overview',
        'release_date',
        'genre_ids',
        'original_title',
        'original_language',
        'title',
        'backdrop_path',
        'popularity',
        'vote_count',
        'video',
        'vote_average',
    ];

    /**
     * <b>rules</b> Atributo responsável em definir regras de validação dos dados submetidos pelo formulário
     * OBS: A validação bail é responsável em parar a validação caso um das que tenha sido especificada falhe
     */
    public $rules = [
        'poster_path'       => 'bail',
        'adult'             => 'bail|required|boolean',
        'overview'          => 'bail|required',
        'release_date'      => 'bail|required',
        'genre_ids'         => 'bail|required|integer',
        'original_title'    => 'bail|required',
        'original_language' => 'bail|required',
        'title'             => 'bail|required',
        'backdrop_path'     => 'bail',
        'popularity'        => 'bail|required|integer',
        'vote_count'        => 'bail|required|integer',
        'video'             => 'bail|required|boolean',
        'vote_average'      => 'bail|required|integer',
    ];

    /**
     * <b>messages</b>  Atributo responsável em definir mensagem de validação de acordo com as regras especificadas no atributo $rules
     */
    public $messages = [
       
    ];

    /**
     * <b>hidden</b> Atributo responsável em esconder colunas que não deverão ser retornadas em uma requisição
     */
    protected $hidden  = [

    ];

    /**
     * <b>collection</b> Atributo responsável em informar o namespace e o arquivo do resource
     * O mesmo é utilizado em forma de facade.
     * OBS: Responsável em retornar uma coleção com os alias(apelido) atribuidos para cada coluna. 
     */
    public $collection = "\App\Http\Resources\Discover::collection";

    /**
     * <b>resource</b>
     */
    public $resource = "\App\Http\Resources\Discover";

    /**
     * <b>map</b> Atributo responsável em atribuir um alias(Apelido), para a colunas do banco de dados
     * OBS: este atributo é utilizado no Metodo store e update da ApiControllerTrait
     */
    public $map = [
        'poster_path'       => 'poster_path',
        'adult'             => 'adult',
        'overview'          => 'overview',
        'release_date'      => 'release_date',
        'genre_ids'         => 'genre_ids',
        'original_title'    => 'original_title',
        'original_language' => 'original_language',
        'title'             => 'title',
        'backdrop_path'     => 'backdrop_path',
        'popularity'        => 'popularity',
        'vote_count'        => 'vote_count',
        'video'             => 'video',
        'vote_average'      => 'vote_average',
    ];

    /**
     * <b>getPrimaryKey</b> Método responsável em retornar o nome da primaryKey.
     * OBS: Não é recomendado que este atributo seja publico, por isso foi realizado o encapsulamento
     */
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }
}
