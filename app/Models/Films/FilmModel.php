<?php

namespace App\Models\Films;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Films\FilmModel
 *
 * @property int $id
 * @property string|null $link
 * @property string|null $title
 * @property string|null $txt
 * @property string|null $fromurl
 * @property int|null $level
 * @property string|null $addtime
 * @property string|null $imdb
 * @property string|null $douban
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel whereDouban($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel whereFromurl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel whereImdb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Films\FilmModel whereTxt($value)
 * @mixin \Eloquent
 */
class FilmModel extends Model
{
    //
    protected $connection='film';
    protected $table='film';
    public $timestamps=false;
    protected $guarded=[];
}
