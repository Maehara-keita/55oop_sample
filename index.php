<?php
//ピカチュウの設計図が書かれたファイルの読み込み
require_once('Pikachu.php');
require_once('Lizardon.php');
require_once('choice.php');
//ピカちゅの設計図をもとに、実体を作成
//インスタンス化の構文   new クラス名（）

$pikachu1 = new Pikachu(150,20);

//クラスを元につくったピカチュウの操作
//プロパティとかメソッドの使い方

//〇プロパティ；属性　の設定と表示〇
//●ピカチュウ１（変数）にHP100を設定する
$pikachu1 ->hp = 100;
// ->　；アロー演算子といって中に入っている要素を取り出してくる

//●ピカチュウ１（変数）にPP50を設定する
$pikachu1 ->pp =50;

//画面にピカチュウのHPとPPを表示する
echo 'ピカチュウのHPは'.$pikachu1->hp;
//echo $pikachu1->hp;
echo '<br>';

echo 'ピカチュウのPPは';
echo $pikachu1->pp;
echo '<br>';





//〇メソッド；振る舞い　の設定と表示〇
//サンダーボルト
$pikachu1->thunderVolt();


//アイアンテール
$pikachu1->ironTail();


echo '<br><br><br>';
//ピカチュウ２は？
$pikachu2 =new Pikachu(300,40);
$pikachu2 ->hp = 500;
$pikachu2 ->pp = 80;

echo 'ピカチュウ１のHPは';
echo $pikachu1->hp;

echo '<br>';

echo 'ピカチュウ2のHPは';
echo $pikachu2->hp;


echo '<br><br><br>';

//リザードン
$Lizardon1= new Lizardon();
$Lizardon1 ->hp = 360;
$Lizardon1 ->pp =50;


echo 'リザードンのHPは'.$Lizardon1->hp;

echo '<br>';

echo 'リザードンのPPは';
echo $Lizardon1->pp;
echo '<br><br>';

//大文字
$Lizardon1->FireBlast();
//かえんほうしゃ
$Lizardon1->Flamethrower();
//きりさく
$Lizardon1->Slash();
//地球投げ
$Lizardon1->SismicToss();



echo '<br><br><br>';


//ピカチュウ３の作成
$pikachu3 = new Pikachu(500,100);


echo 'ピカチュウ３のHPは';
echo $pikachu3 ->hp;


echo '<br><br><br>'.'----------------------ここから宿題------------------------'.'<br><br>';

//ヒトカゲ
$charmander = new Charmander(5,'おてんば','ほのお');
echo '<img src="'. $charmander->img .'">'.'<br>'.'<br>';
echo 'ヒトカゲのレベルは'.$charmander ->level.'です'.'<br>';
echo 'ヒトカゲの性格は'.$charmander ->character.'です'.'<br>';
echo 'ヒトカゲのタイプは'.$charmander ->type.'です'.'<br>'.'<br>';

$charmander->choice();

//ゼニガメ
$squirtle = new Squirtle(5,'まじめ','みず');
echo '<img src="'. $squirtle->img .'">'.'<br>'.'<br>';
echo 'ゼニガメのレベルは'.$squirtle ->level.'です'.'<br>';
echo 'ゼニガメの性格は'.$squirtle ->character.'です'.'<br>';
echo 'ゼニガメのタイプは'.$squirtle ->type.'です'.'<br>'.'<br>';

$squirtle->choice();

//フシギダネ
$bulbasaur = new Bulbasaur(5,'のんびり','くさ');
echo '<img src="'. $bulbasaur->img .'">'.'<br>'.'<br>';
echo 'フシギダネのレベルは'.$bulbasaur ->level.'です'.'<br>';
echo 'フシギダネの性格は'.$bulbasaur ->character.'です'.'<br>';
echo 'フシギダネのタイプは'.$bulbasaur ->type.'です'.'<br>'.'<br>';

$bulbasaur->choice();



?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemon</title>
</head>
<body>
    <div style =display:flex; , weigt = 100%;>
        <p><?php echo '<img src="'. $charmander->img .'">' ?></p>
        <p> <?php echo '<img src="'. $squirtle->img .'">' ?></p>
        <p> <?php echo '<img src="'. $bulbasaur->img .'">' ?></p>





    </div>
    
</body>
</html>