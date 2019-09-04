<?php


//リザードンクラス（リザードンの設計図）
class Lizardon
{

//属性：プロパティともいう（変数） public $変数;
//-HP
//-PP

//振る舞い：メソッドともいう（関数）　function 関数名（）{}
//-大文字
//-かえんほうしゃ
//きりさく
//地球投げ
//
//

//属性の設定
    //-HP
    public $hp;

    //-PP
    public $pp;




//振る舞いの設定
    //-大文字
    function FireBlast()
    {
        echo '大文字を発動した';
        echo '<br>';
    }

    //-かえんほうしゃ
    function Flamethrower()
    {
        echo 'かえんほうしゃを発動した';
        echo '<br>';
    }

    //きりさく
    function Slash()
    {
        echo 'きりさくを発動した';
        echo '<br>';
        
    }

    //地球投げ
    function SismicToss()
    {
        echo '地球投げを発動した';
        echo '<br>';
    }




    




}


?>