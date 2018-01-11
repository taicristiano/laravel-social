<html lang="ja" class="no-js no-svg">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <title>Welcome Spot</title>
        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{asset('images/favicon.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/favicon.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/favicon.png')}}">
        <link rel="stylesheet" id="common-css" href="{{asset('css/frontend/common.css')}}" type="text/css" media="all">
        <link rel="stylesheet" id="wfspot-css" href="{{asset('css/frontend/callback/wfspot.css')}}" type="text/css" media="all">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{asset('/js/frontend/common.js')}}"></script>
        {{-- <script src="{{asset('js/frontend/callback/wfspot.js')}}"></script> --}}
    </head>
    <body cz-shortcut-listen="true">
        <div class="status" data-lang="{{$lang}}">
            <span class="lan">kr</span>
            <span class="sec"></span>
            <span class="ses"></span>
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
                        <li>
                            <a href="https://wow-j.com/en/" class="en @if($lang == 'en') on @endif" target="_blank">
                                <img src="{{asset('images/btn_1.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Japanese manners</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">日式禮服</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">日式礼服</span>
                                <span class="ko @if($lang == 'ko') on @endif">일본의 예절</span>
                                <span class="ja @if($lang == 'ja') on @endif">日本の作法</span>
                            </a>
                            <a href="https://wow-j.com/cn/" class="zh-cn @if($lang == 'zh-cn') on @endif" target="_blank">
                                <img src="{{asset('images/btn_1.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Japanese manners</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">日式禮服</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">日式礼服</span>
                                <span class="ko @if($lang == 'ko') on @endif">일본의 예절</span>
                                <span class="ja @if($lang == 'ja') on @endif">日本の作法</span>
                            </a>
                            <a href="https://wow-j.com/tw/" class="zh-tw @if($lang == 'zh-tw') on @endif" target="_blank">
                                <img src="{{asset('images/btn_1.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Japanese manners</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">日式禮服</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">日式礼服</span>
                                <span class="ko @if($lang == 'ko') on @endif">일본의 예절</span>
                                <span class="ja @if($lang == 'ja') on @endif">日本の作法</span>
                            </a>
                            <a href="https://wow-j.com/kr/" class="ko @if($lang == 'ko') on @endif" target="_blank">
                                <img src="{{asset('images/btn_1.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Japanese manners</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">日式禮服</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">日式礼服</span>
                                <span class="ko @if($lang == 'ko') on @endif">일본의 예절</span>
                                <span class="ja @if($lang == 'ja') on @endif">日本の作法</span>
                            </a>
                            <a href="https://wow-j.com/jp/" class="ja @if($lang == 'ja') on @endif" target="_blank">
                                <img src="{{asset('images/btn_1.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Japanese manners</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">日式禮服</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">日式礼服</span>
                                <span class="ko @if($lang == 'ko') on @endif">일본의 예절</span>
                                <span class="ja @if($lang == 'ja') on @endif">日本の作法</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.city.osaka.lg.jp/main/site_policy/0000000153.html#en" class="en @if($lang == 'en') on @endif" target="_blank">
                                <img src="{{asset('images/btn_2.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Kansai culture</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">關西文化</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">关西文化</span>
                                <span class="ko @if($lang == 'ko') on @endif">간사이 문화</span>
                                <span class="ja @if($lang == 'ja') on @endif">関西の文化</span>
                            </a>
                            <a href="http://www.city.osaka.lg.jp/main/site_policy/0000000153.html#zh" class="zh-cn @if($lang == 'zh-cn') on @endif" target="_blank">
                                <img src="{{asset('images/btn_2.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Kansai culture</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">關西文化</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">关西文化</span>
                                <span class="ko @if($lang == 'ko') on @endif">간사이 문화</span>
                                <span class="ja @if($lang == 'ja') on @endif">関西の文化</span>
                            </a>
                            <a href="http://www.city.osaka.lg.jp/main/site_policy/0000000153.html#other" class="zh-tw @if($lang == 'zh-tw') on @endif" target="_blank">
                                <img src="{{asset('images/btn_2.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Kansai culture</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">關西文化</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">关西文化</span>
                                <span class="ko @if($lang == 'ko') on @endif">간사이 문화</span>
                                <span class="ja @if($lang == 'ja') on @endif">関西の文化</span>
                            </a>
                            <a href="http://www.city.osaka.lg.jp/main/site_policy/0000000153.html#ko" class="ko @if($lang == 'ko') on @endif" target="_blank">
                                <img src="{{asset('images/btn_2.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Kansai culture</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">關西文化</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">关西文化</span>
                                <span class="ko @if($lang == 'ko') on @endif">간사이 문화</span>
                                <span class="ja @if($lang == 'ja') on @endif">関西の文化</span>
                            </a>
                            <a href="http://www.city.osaka.lg.jp/index.html" class="ja @if($lang == 'ja') on @endif" target="_blank">
                                <img src="{{asset('images/btn_2.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Kansai culture</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">關西文化</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">关西文化</span>
                                <span class="ko @if($lang == 'ko') on @endif">간사이 문화</span>
                                <span class="ja @if($lang == 'ja') on @endif">関西の文化</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.japanions.com" class="en @if($lang == 'en') on @endif" target="_blank">
                                <img src="{{asset('images/btn_3.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Event information</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">事件信息</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">事件信息</span>
                                <span class="ko @if($lang == 'ko') on @endif">이벤트 정보</span>
                                <span class="ja @if($lang == 'ja') on @endif">イベント情報</span>
                            </a>
                            <a href="http://www.japanions.com" class="zh-cn @if($lang == 'zh-cn') on @endif" target="_blank">
                                <img src="{{asset('images/btn_3.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Event information</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">事件信息</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">事件信息</span>
                                <span class="ko @if($lang == 'ko') on @endif">이벤트 정보</span>
                                <span class="ja @if($lang == 'ja') on @endif">イベント情報</span>
                            </a>
                            <a href="http://www.japanions.com" class="zh-tw @if($lang == 'zh-tw') on @endif" target="_blank">
                                <img src="{{asset('images/btn_3.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Event information</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">事件信息</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">事件信息</span>
                                <span class="ko @if($lang == 'ko') on @endif">이벤트 정보</span>
                                <span class="ja @if($lang == 'ja') on @endif">イベント情報</span>
                            </a>
                            <a href="http://www.japanions.com" class="ko @if($lang == 'ko') on @endif" target="_blank">
                                <img src="{{asset('images/btn_3.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Event information</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">事件信息</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">事件信息</span>
                                <span class="ko @if($lang == 'ko') on @endif">이벤트 정보</span>
                                <span class="ja @if($lang == 'ja') on @endif">イベント情報</span>
                            </a>
                            <a href="http://www.japanions.com" class="ja @if($lang == 'ja') on @endif" target="_blank">
                                <img src="{{asset('images/btn_3.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Event information</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">事件信息</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">事件信息</span>
                                <span class="ko @if($lang == 'ko') on @endif">이벤트 정보</span>
                                <span class="ja @if($lang == 'ja') on @endif">イベント情報</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.rentalcars.com/en" class="en @if($lang == 'en') on @endif" target="_blank">
                                <img src="{{asset('images/btn_4.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Hire a rent-a-car</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">租車</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">租车</span>
                                <span class="ko @if($lang == 'ko') on @endif">자동차를 렌트</span>
                                <span class="ja @if($lang == 'ja') on @endif">レンタカー</span>
                            </a>
                            <a href="http://www.rentalcars.com/zs" class="zh-cn @if($lang == 'zh-cn') on @endif" target="_blank">
                                <img src="{{asset('images/btn_4.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Hire a rent-a-car</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">租車</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">租车</span>
                                <span class="ko @if($lang == 'ko') on @endif">자동차를 렌트</span>
                                <span class="ja @if($lang == 'ja') on @endif">レンタカー</span>
                            </a>
                            <a href="http://www.rentalcars.com/zh" class="zh-tw @if($lang == 'zh-tw') on @endif" target="_blank">
                                <img src="{{asset('images/btn_4.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Hire a rent-a-car</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">租車</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">租车</span>
                                <span class="ko @if($lang == 'ko') on @endif">자동차를 렌트</span>
                                <span class="ja @if($lang == 'ja') on @endif">レンタカー</span>
                            </a>
                            <a href="http://www.rentalcars.com/ko" class="ko @if($lang == 'ko') on @endif" target="_blank">
                                <img src="{{asset('images/btn_4.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Hire a rent-a-car</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">租車</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">租车</span>
                                <span class="ko @if($lang == 'ko') on @endif">자동차를 렌트</span>
                                <span class="ja @if($lang == 'ja') on @endif">レンタカー</span>
                            </a>
                            <a href="http://www.rentalcars.com/ja" class="ja @if($lang == 'ja') on @endif" target="_blank">
                                <img src="{{asset('images/btn_4.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Hire a rent-a-car</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">租車</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">租车</span>
                                <span class="ko @if($lang == 'ko') on @endif">자동차를 렌트</span>
                                <span class="ja @if($lang == 'ja') on @endif">レンタカー</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.jnto.go.jp/emergency/eng/mi_guide.html" class="en @if($lang == 'en') on @endif" target="_blank">
                                <img src="{{asset('images/btn_5.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Travel / Insurance</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">旅遊·保險</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">旅游·保险</span>
                                <span class="ko @if($lang == 'ko') on @endif">여행 보험</span>
                                <span class="ja @if($lang == 'ja') on @endif">病院 旅行・保険</span>
                            </a>
                            <a href="http://www.jnto.go.jp/emergency/chs/mi_guide.html" class="zh-cn @if($lang == 'zh-cn') on @endif" target="_blank">
                                <img src="{{asset('images/btn_5.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Travel / Insurance</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">旅遊·保險</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">旅游·保险</span>
                                <span class="ko @if($lang == 'ko') on @endif">여행 보험</span>
                                <span class="ja @if($lang == 'ja') on @endif">病院 旅行・保険</span>
                            </a>
                            <a href="http://www.jnto.go.jp/emergency/chc/mi_guide.html" class="zh-tw @if($lang == 'zh-tw') on @endif" target="_blank">
                                <img src="{{asset('images/btn_5.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Travel / Insurance</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">旅遊·保險</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">旅游·保险</span>
                                <span class="ko @if($lang == 'ko') on @endif">여행 보험</span>
                                <span class="ja @if($lang == 'ja') on @endif">病院 旅行・保険</span>
                            </a>
                            <a href="http://www.jnto.go.jp/emergency/kor/mi_guide.html" class="ko @if($lang == 'ko') on @endif" target="_blank">
                                <img src="{{asset('images/btn_5.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Travel / Insurance</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">旅遊·保險</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">旅游·保险</span>
                                <span class="ko @if($lang == 'ko') on @endif">여행 보험</span>
                                <span class="ja @if($lang == 'ja') on @endif">病院 旅行・保険</span>
                            </a>
                            <a href="http://www.jnto.go.jp/emergency/jpn/mi_guide.html" class="ja @if($lang == 'ja') on @endif" target="_blank">
                                <img src="{{asset('images/btn_5.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Travel / Insurance</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">旅遊·保險</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">旅游·保险</span>
                                <span class="ko @if($lang == 'ko') on @endif">여행 보험</span>
                                <span class="ja @if($lang == 'ja') on @endif">病院 旅行・保険</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('api', ['lang' => 'en'])}}" class="en @if($lang == 'en') on @endif" target="_blank">
                                <img src="{{asset('images/btn_6.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Gour Navi</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">咕嘟妈咪</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">咕嘟媽咪</span>
                                <span class="ko @if($lang == 'ko') on @endif">구루 나비</span>
                                <span class="ja @if($lang == 'ja') on @endif">食事</span>
                            </a>
                            <a href="{{ route('api', ['lang' => 'zh-cn'])}}" class="zh-cn @if($lang == 'zh-cn') on @endif" target="_blank">
                                <img src="{{asset('images/btn_6.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Gour Navi</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">咕嘟妈咪</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">咕嘟媽咪</span>
                                <span class="ko @if($lang == 'ko') on @endif">구루 나비</span>
                                <span class="ja @if($lang == 'ja') on @endif">食事</span>
                            </a>
                            <a href="{{ route('api', ['lang' => 'zh-tw'])}}" class="zh-tw @if($lang == 'zh-tw') on @endif" target="_blank">
                                <img src="{{asset('images/btn_6.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Gour Navi</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">咕嘟妈咪</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">咕嘟媽咪</span>
                                <span class="ko @if($lang == 'ko') on @endif">구루 나비</span>
                                <span class="ja @if($lang == 'ja') on @endif">食事</span>
                            </a>
                            <a href="{{ route('api', ['lang' => 'ko'])}}" class="ko @if($lang == 'ko') on @endif" target="_blank">
                                <img src="{{asset('images/btn_6.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Gour Navi</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">咕嘟妈咪</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">咕嘟媽咪</span>
                                <span class="ko @if($lang == 'ko') on @endif">구루 나비</span>
                                <span class="ja @if($lang == 'ja') on @endif">食事</span>
                            </a>
                            <a href="{{ route('api', ['lang' => 'ja'])}}" class="ja @if($lang == 'ja') on @endif" target="_blank">
                                <img src="{{asset('images/btn_6.png')}}">
                                <span class="en @if($lang == 'en') on @endif">Gour Navi</span>
                                <span class="zh-cn @if($lang == 'zh-cn') on @endif">咕嘟妈咪</span>
                                <span class="zh-tw @if($lang == 'zh-tw') on @endif">咕嘟媽咪</span>
                                <span class="ko @if($lang == 'ko') on @endif">구루 나비</span>
                                <span class="ja @if($lang == 'ja') on @endif">食事</span>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="wrap">
            <hr>
            <div class="en @if($lang == 'en') on @endif item-permission" >Permission to use location information is not permitted</div>
            <div class="zh-cn @if($lang == 'zh-cn') on @endif item-permission">不允许使用位置信息</div>
            <div class="zh-tw @if($lang == 'zh-tw') on @endif item-permission">不允許使用位置信息</div>
            <div class="ko @if($lang == 'ko') on @endif item-permission">위치 정보의 이용이 허용되지 않습니다</div>
            <div class="ja @if($lang == 'ja') on @endif item-permission">位置情報の利用が許可されていません</div>
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
            var urlCallback = "{{ route('home', ['lang' => ''])}}";
            $(function() {
                setHeightItem();
            })

            function setHeightItem()
            {
                var heightMax = 0;
                $(".menu ul li a.on").each(function(){
                    var height = $(this).find('span.on').height();
                    if (height > heightMax) {
                        heightMax = height;
                    }
                });
                $(".menu ul li a.on").each(function(){
                    $(this).find('span.on').height(heightMax);
                });
            }
            $(window).resize(function(){
                setHeightItem();
            });
        </script>
    </body>
</html>