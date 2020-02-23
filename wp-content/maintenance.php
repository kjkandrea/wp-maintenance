<?php
/**
* 검색 엔진 크롤러에게 이 사이트를 일시적으로 사용할 수 없다고 알려줍니다.
* 검색 엔진 크롤러에게 10분(60초)) 후 재방문 해야한다고 알려줍니다.
*/
$protocol = $_SERVER["SERVER_PROTOCOL"];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) $protocol = 'HTTP/1.0';
header( "$protocol 503 Service Unavailable", true, 503 );
header( 'Content-Type: text/html; charset=utf-8' );
header( 'Retry-After: 600' );
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wireframe - Update</title>
</head>
<style>
.site-logo img {
    max-width: 4.2rem;
    height: auto;
}

.screen-reader-text {
    border: 0;
    clip: rect(1px, 1px, 1px, 1px);
    -webkit-clip-path: inset(50%);
    clip-path: inset(50%);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute !important;
    width: 1px;
    word-wrap: normal !important;
    word-break: normal;
}

html, body{
    background: #21262d;
    font-size: 16px;
    height: 100%;
    font-family: 'Spoqa Han Sans', 'Apple SD Gothic Neo','Malgun Gothic','Nanum Gothic', Dotum, 'Sans-serif'; word-break:keep-all;
    margin: 0;
    padding: 0;
}

body{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 0 10px;
}

.info-box{
    background: #fff;
    border-radius: 1rem;
    padding: 20px;
    text-align: center;
    margin: 0 auto;
    width: 100%;
    max-width: 580px;
}

.info-box .button{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transition: all .25s;
    -o-transition: all .25s;
    transition: all .25s;
    width: 215px;
    border: 1px solid #016afd;
    border-radius: 1rem;
    margin: 2rem auto 0;
    padding: 20px;
    font-size: 1.125rem;
    color: #016afd;
    text-decoration: none;
}

.info-box .button:hover, .info-box .button:focus{
    background-color: #016afd;
    color: #fff;
}

.info-box .button figure{
    width: 75%;
    margin: 0;
    padding: 0;
}

.info-box .button figure img{
    width: 100%;
}

</style>
<body>
    <div class="info-box">
        <div class="site-logo">
            <a href="/" class="custom-logo-link" rel="home">
                <img width="192" height="192" src="images/android-chrome-192x192-1.png" class="custom-logo" alt="Wireframe" srcset="images/android-chrome-192x192-1.png 192w, images/android-chrome-192x192-1-150x150.png 150w" sizes="(max-width: 192px) 100vw, 192px">
            </a>
            <span class="screen-reader-text">Wireframe</span>
        </div>
        <h1>웹 사이트 업데이트 중입니다.</h1>
        <p>사이트내에게 기능 업데이트가 이루어지고 있습니다. 이 상태는 오래 지속되지 않을 것 입니다. 10분 후에 다시 방문해주세요!</p>
        <a class="button" href="https://github.com/kjkandrea">
            <figure>
                <img src="images/jetpacktocat.png">
            </figure>
            Github 방문하기
        </a>
    </div>
</body>
</html>

<?php
/* This passes control back to the wordpress upgrade routine */
die();
/* Don't change this */
?>
