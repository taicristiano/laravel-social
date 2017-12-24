<html lang="ja" class="no-js no-svg">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <title>Welcome Spot</title>
        <meta name="robots" content="noindex,follow">
        <link rel="dns-prefetch" href="//s.w.org">
        <link rel="stylesheet" id="common-css" href="{{asset('css/frontend/common.css')}}" type="text/css" media="all">
        <link rel="stylesheet" id="wfspot-css" href="{{asset('css/frontend/callback/wfspot.css')}}" type="text/css" media="all">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{asset('/js/frontend/common.js')}}"></script>
        <script src="{{asset('js/frontend/callback/wfspot.js')}}"></script>
        <style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
            .en-markup-crop-options {
            top: 18px !important;
            left: 50% !important;
            margin-left: -100px !important;
            width: 200px !important;
            border: 2px rgba(255,255,255,.38) solid !important;
            border-radius: 4px !important;
            }
            .en-markup-crop-options div div:first-of-type {
            margin-left: 0px !important;
            }
        </style>
    </head>
    <body cz-shortcut-listen="true">
        <div class="status" data-lang="{{$lang}}">
            <span class="lan">kr</span>
            <span class="sec"></span>
            <span class="ses">Sat Dec 16 2017 15:16:56 GMT+0700 (SE Asia Standard Time)</span>
            <span class="sns"></span>
            <button>ローカルストレージ削除</button>
        </div>
        <header class="header">
            <h1>Welcome Spot<br>Free-Wifi</h1>
            <select class="language">
                <option value="en" @if($lang == 'en') selected @endif >English</option>
                <option value="zh-cn" @if($lang == 'zh-cn') selected @endif>繁體中文</option>
                <option value="zh-tw" @if($lang == 'zh-tw') selected @endif>简体中文</option>
                <option value="ko" @if($lang == 'ko') selected @endif>한국어</option>
                <option value="ja" @if($lang == 'ja') selected @endif>日本語</option>
            </select>
        </header>
        <div class="wrap">
            <div class="logo2"><img src="{{asset('images/logologo.png')}}" alt="ロゴ"><span>Welcome Spot<span></span></span></div>
            <div>
                <section class="menu">
                    <ul>
                        <li><a href="#">
                            <img src="{{asset('images/btn_1.png')}}">
                            <span class="en @if($lang == 'en') on @endif">Japanese manners</span>
                            <span class="zh-cn @if($lang == 'zh-cn') on @endif">日式禮服</span>
                            <span class="zh-tw @if($lang == 'zh-tw') on @endif">日式礼服</span>
                            <span class="ko @if($lang == 'ko') on @endif">일본의 예절</span>
                            <span class="ja @if($lang == 'ja') on @endif">日本の作法</span>
                            </a>
                        </li>
                        <li><a href="http://www.kansaibunka.com/" target="_blank">
                            <img src="{{asset('images/btn_2.png')}}">
                            <span class="en @if($lang == 'en') on @endif">Kansai culture</span>
                            <span class="zh-cn @if($lang == 'zh-cn') on @endif">關西文化</span>
                            <span class="zh-tw @if($lang == 'zh-tw') on @endif">关西文化</span>
                            <span class="ko @if($lang == 'ko') on @endif">간사이 문화</span>
                            <span class="ja @if($lang == 'ja') on @endif">関西の文化</span>
                            </a>
                        </li>
                        <li><a href="https://www.google.co.jp/" target="_blank">
                            <img src="{{asset('images/btn_3.png')}}">
                            <span class="en @if($lang == 'en') on @endif">event information</span>
                            <span class="zh-cn @if($lang == 'zh-cn') on @endif">事件信息</span>
                            <span class="zh-tw @if($lang == 'zh-tw') on @endif">事件信息</span>
                            <span class="ko @if($lang == 'ko') on @endif">이벤트 정보</span>
                            <span class="ja @if($lang == 'ja') on @endif">イベント情報</span>
                            </a>
                        </li>
                        <li><a href="https://travel.rakuten.co.jp/cars/area/kinki/?s_kwcid=paidsearch&amp;k_clickid=03111ba4-94e5-469f-8eae-828c86028881" target="_blank">
                            <img src="{{asset('images/btn_4.png')}}">
                            <span class="en @if($lang == 'ja') on @endif">Hire a rent-a-car</span>
                            <span class="zh-cn @if($lang == 'zh-cn') on @endif">租車</span>
                            <span class="zh-tw @if($lang == 'zh-tw') on @endif">租车</span>
                            <span class="ko @if($lang == 'ko') on @endif">자동차를 렌트</span>
                            <span class="ja @if($lang == 'ja') on @endif">レンタカー</span>
                            </a>
                        </li>
                        <li><a href="#">
                            <img src="{{asset('images/btn_5.png')}}">
                            <span class="en @if($lang == 'en') on @endif">Travel/Insurance</span>
                            <span class="zh-cn @if($lang == 'zh-cn') on @endif">旅遊·保險</span>
                            <span class="zh-tw @if($lang == 'zh-tw') on @endif">旅游·保险</span>
                            <span class="ko @if($lang == 'ko') on @endif">여행 보험</span>
                            <span class="ja @if($lang == 'ja') on @endif">旅行・保険</span>
                            </a>
                        </li>
                        <li><a href="{{ route('api', ['lang' => $lang])}}">
                            <img src="{{asset('images/btn_6.png')}}">
                            <span class="en @if($lang == 'en') on @endif">ぐるなび en</span>
                            <span class="zh-cn @if($lang == 'zh-cn') on @endif">ぐるなび cn</span>
                            <span class="zh-tw @if($lang == 'zh-tw') on @endif">ぐるなび tw</span>
                            <span class="ko @if($lang == 'ko') on @endif">ぐるなび kr</span>
                            <span class="ja @if($lang == 'ja') on @endif">ぐるなび ja</span>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="wrap">
            <hr>
            <div id="shop_result">位置情報の利用が許可されていません</div>
        </div>
        <div class="mat">
            <!--メッセージ等-->
            <div class="please_login msg">
                <span class="en @if($lang == 'en') on @endif">Please select social account</span>
                <span class="zh-cn @if($lang == 'zh-cn') on @endif">請選擇一個帳戶登錄</span>
                <span class="zh-tw @if($lang == 'zh-tw') on @endif">请选择一个帐户登录</span>
                <span class="ko @if($lang == 'ko') on @endif">로그인 할 계정을 선택하십시오</span>
                <span class="ja @if($lang == 'ja') on @endif">ログインするアカウントを選択してください。</span>
                <button class="close btn">
                <span class="en @if($lang == 'en') on @endif">close</span>
                <span class="zh-cn @if($lang == 'zh-cn') on @endif">關閉</span>
                <span class="zh-tw @if($lang == 'zh-tw') on @endif">关闭</span>
                <span class="ko @if($lang == 'ko') on @endif">닫기</span>
                <span class="ja @if($lang == 'ja') on @endif">閉じる</span>
                </button>
            </div>
        </div>
        <script>
            urlCallback = "{{ route('callback', ['lang' => ''])}}";
        </script>
    </body>
</html>