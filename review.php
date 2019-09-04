<?php

//関数名：echoHell
//処理：画面に'Hello'と出力する
function echoHello(){
    echo ('Hello');
};

//echoHelloを表示
echoHello();

echo '<br>';

//関数名：echoUserName
//引数：名前
//処理：『私は〇〇です』を出力する
function echoUserName($echoUserName){

echo '私は'.$echoUserName.'です';
}

echoUserName('Maehara');

//echoUserNameを実行する


?>