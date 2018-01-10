
<!DOCTYPE html>
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
<link rel='stylesheet' id='common-css'  href="{{asset('css/frontend/common.css')}}" type='text/css' media='all' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('/js/frontend/common.js')}}"></script>
</head>
<body>

	<div class="status">
		<span class="lan"></span>
		<span class="sec"></span>
		<span class="ses"></span>
		<span class="sns"></span>
		<button>ローカルストレージ削除</button>
	</div>

	<header class="header">
		<h1>Welcome Spot<br>Free-Wifi</h1>

		<select class="language">
			<option value="en">English</option>
			<option value="zh-cn">繁體中文</option>
			<option value="zh-tw">简体中文</option>
			<option value="ko">한국어</option>
			<option value="ja">日本語</option>
		</select>
	</header>

	<div class="wrap">
		<div class="logo animetion1"><img src="{{asset('images/logologo.png')}}" alt="ロゴ"><span class="animetion1_1">Welcome Spot<span></div>
		<div class="animation2">
			<section class="contract">
				<span class="en">Please read the terms of use of this site.</span>
				<span class="zh-cn">请阅读本网站的使用条款。</span>
				<span class="zh-tw">請閱讀本網站的使用條款。</span>
				<span class="ko">본 사이트의 이용 약관을 반드시 읽어 보시기 바랍니다.</span>
				<span class="ja">当サイトのご利用規約を必ずお読みください。</span>
				<div id="report"></div>

				<div class="agree">
					<div>
						<input type="checkbox" id="toggleButton" class="toggle-button" value="agree"><label for="toggleButton"></label>
					</div>
					<div>
						<span class="en">I agree to the <a href="{{route('terms')}}">terms</a> of service and login</span>
						<span class="zh-cn"><a href="{{route('terms')}}">使用條款</a>我同意並登錄</span>
						<span class="zh-tw"><a href="{{route('terms')}}">使用条款</a>我同意并登录</span>
						<span class="ko"><a href="{{route('terms')}}">이용 약관</a>에 동의하여 로그인</span>
						<span class="ja"><a href="{{route('terms')}}">利用規約</a>に同意してログインする</span>
					</div>
				</div>
			</section>
			<section class="snslogin">
				<ul>
					<li><img src="{{asset('images/sns1.png')}}" class="auth/facebook"></li>
					<li><img src="{{asset('images/sns2.png')}}" class="auth/twitter"></li>
					<li><img src="{{asset('images/sns3.png')}}" class="auth/google"></li>
					<li><img src="{{asset('images/sns4.png')}}" class="auth/line"></li>
					<li><img src="{{asset('images/sns5.png')}}" class="auth/weibo"></li>
					<li><img src="{{asset('images/sns6.png')}}" class="auth/instagram"></li>
					<li><img src="{{asset('images/sns7.png')}}" class="auth/kakao"></li>
					<li><img src="{{asset('images/sns8.png')}}" class="auth/weixin"></li>
				</ul>
			</section>
		</div>
	</div>

	<div class="mat"><!--メッセージ等-->
		<div class="please_login msg">
			<span class="en">Please select social account</span>
			<span class="zh-cn">請選擇一個帳戶登錄</span>
			<span class="zh-tw">请选择一个帐户登录</span>
			<span class="ko">로그인 할 계정을 선택하십시오</span>
			<span class="ja">ログインするアカウントを選択してください。</span>
			<button class="close btn">
				<span class="en">close</span>
				<span class="zh-cn">關閉</span>
				<span class="zh-tw">关闭</span>
				<span class="ko">닫기</span>
				<span class="ja">閉じる</span>
			</button>
		</div>
	</div>
</body>
</html>
