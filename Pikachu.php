<?php
//クラスclassの作り方と使い方

//クラス（設計図）の構文
//class クラス名{
//　大量生産するための
//}

//ピカチュウクラス（ピカチュウの設計図）
class Pikachu 
{

//属性：プロパティともいう（変数） public $変数;
//-HP
//-PP

//振る舞い：メソッドともいう（関数）　function 関数名（）{}
//-サンダーボルト
//-アイアンテール

//属性の設定
    //-HP
    public $hp;

    //-PP
    public $pp;


//●コンストラクタ●
//インスタンス化したときに呼ばれるもの
// new Pikachu() をした時に呼ばれるもの
public function __construct($hp,$pp) {
    echo 'ピカチュウが生まれた';
    echo '<br>';

    //$this:インスタンスのことは指している
    //今回の場合、生まれたピカチュウ
    $this->hp = $hp;
    $this->pp = $pp;
}

//振る舞いの設定
    //-サンダーボルト
    function thunderVolt()
    {
        echo 'サンダーボルトを発動した';
        echo '<br>';
    }

    //-アイアンテール
    function ironTail()
    {
        echo 'アイアンテールを発動した';
        echo '<br>';
    }

}


?>