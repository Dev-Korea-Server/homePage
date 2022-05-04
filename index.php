<!DOCTYPE html>
<html>
<head>
	<meta property="og:type" content="website">
	<meta property="og:title" content="Dev Korea Server">
	<meta name="description" content="모든 개발자가 모이는 공간 DKS에 지금 바로 와보세요!">
	<meta property="og:image" content="https://img.koreadev.co.kr/dks_logo.png">
	<meta property="og:url" content="https://koreadev.co.kr">
	<link rel="shortcut icon" href="https://img.koreadev.co.kr/dks_logo.ico" type="image/x-icon">
	<meta property="og:description" content="DKS 공식 홈페이지 입니다.<Br>
개발자가 되고싶으신데 아무것도 모르시겠나요?<br>
지금 Dev Korea Server 서버에 오셔서 다양한 개발자들과 만나보세요!<br>

여러 Dev 디스코드 서버와 파트너를 통해 더욱 친숙하게 접근하실수 있습니다!">
	<meta property="og:title" content="Dev Korea Server">
	<link rel="canonical" href="https://koreadev.co.kr">
	<meta name="viewport" content="width=device-width">
	<meta charset="utf-8">
	<title>Dev Korea Server</title>
	
	<style>
		* { margin: 0; padding: 0; }
		body { font-family: 'Times New Roman', serif; }
		li { list-style: none; }
		a { text-style: none; }
		img { border: 0; }
	</style>
	<!--헤더-->
	<style>
		#main_header {
			/* 중앙 정렬 */
			width: 960px; margin: 0 auto;
			
			/* 절대 좌표 */
			height: 160px;
			position: relative;
		}
		#main_header > #title {
			position: absolute;
			left: 20px; top: 30px;
		}
		#main_header > #main_gnb {
			position: absolute;
			right: 0; top: 0;
		}
		#main_header > #main_lnb {
			position: absolute;
			right: 0; bottom: 10px;
		}
	</style>
	<!--타이틀--><!--
	<style>
		#title {
			font-family: 'Henny Penny', cursive;
		}
	</style>
	<!--메뉴(1)-->
	<style>
		#main_gnb > ul { overflow: hidden; }
		#main_lnb > ul > li {float: left; }
		#main_lnb > ul > li > a {
			display: block;
			padding: 2px 10px;
			border: 1px solid black;
		}
		#main_gnb > ul > li > a:hover {
			background: black;
			color: white;
		}
		#main_gnb > ul > li:first-child > a { border-radius: 10px 0 0 10px; }
		#main_gnb > ul > li:last-child > a  { border-radius: 0 10px 10px 0; }
	</style>
	<!--메뉴(2)-->
	<style>
		#main_gnb > ul { overflow: hidden; }
		#main_lnb > ul > li {float: left; }
		#main_lnb > ul > li > a {
			display: block;
			padding: 10px 20px;
			border: 1px solid black;
		}
		#main_gnb > ul > li > a:hover {
			background: black;
			color: white;
		}
		#main_gnb > ul > li:first-child > a { border-radius: 10px 0 0 10px; }
		#main_gnb > ul > li:last-child > a  { border-radius: 0 10px 10px 0; }
	</style>
	<!--콘텐츠-->
	<style>
		#content {
			/* 중앙 정렬 */
			width: 960px; margin: 0 auto;
			
			/* 수평 레이아웃 구성 */
			overflow: hidden;
		}
		
		#content > #main_section {
			width: 960px;
			float: left;
		}
		
		#content > #main_aside {
			width: 200px;
			float: right;
		}
	</style>
	<!--본문-->
	<style>
		#main_section > article.main_article {
			margin-bottom: 10px;
			padding: 20px;
			border: 1px solid black;
		}
		
		#daumRoughmapContainer1626672398621 {
			/* 중앙 정렬 */
			width: 960px; margin: 0 auto;
	</style>
	<!--사이드
	<style>
		/* 첫 번째 탭 */
		input:nth-of-type(1) { display: none; }
		input:nth-of-type(1) ~ div:nth-of-type(1) { display: none; }
		input:nth-of-type(1):checked ~ div:nth-of-type(1) { display: block; }
		
		/* 투 번째 탭 */
		input:nth-of-type(2) { display: none; }
		input:nth-of-type(2) ~ div:nth-of-type(2) { display: none; }
		input:nth-of-type(2):checked ~ div:nth-of-type(2) { display: block; }
		
		/* 탭 모양 구성 */
		section.buttons { overflow: hidden; }
		section.buttons > label {
			/* 수평 정렬 */
			display: block; float: left;
			
			/* 크기 및 글자 위치 지정 */
			width: 100px; height: 30px;
			line-height: 30px;
			text-align: center;
			
			/* 테두리 지정 */
			box-sizing: border-box;
			border: 1px solid black;
			
			/* 색상 지정 */
			background: black;
			color: white;
		}
		input:nth-of-type(1):checked ~ section.buttons > label:nth-of-type(1) {
			background: white;
		input:nth-of-type(2):checked ~ section.buttons > label:nth-of-type(2) {
			background: white;
		}
	</style>
-->
	<!--목록-->
	<style>
		.item {
			overflow: hidden;
			padding: 10px;
			border: 1px solid black;
			border-top: none;
		}
		.thumbnail {
			float: left;
		}
		.description {
			float: left;
			margin-left: 10px;
		}
		.description > strong {
			display: block;
			width: 120px;
			width-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}
	</style>
	<!--푸터-->
	<style>
		#main_footer {
			/* 중앙 정렬 */
			width: 960px; margin: 0 auto;
			margin-bottom: 10px;
			
			/* 테두리 */
			box-sizing: border-box;
			padding: 10px;
			border: 1px solid black;
			
			/* 글자 정렬 */
			text-align: center;
		}
	</style>
	<!--영상-->
	<style>
		#youtubevideo {
			/* 중앙 정렬 */
			width: 960px; margin: 0 auto;
		}
	</style>
</head>
<body>
	<header id="main_header">
		<hgroup id="title">
			<h1>Dev Korea Server</h1>
			<h2>개발자들의 서버 DKS</h2>
		</hgroup>
		<nav id="main_lnb">
			<ul>
				<li><a href="https://invite.koreadev.co.kr">디스코드</a></li>
				<li><a href="https://discord-bot.koreadev.co.kr">봇 초대하기</a></li>
				<li><a href="https://koreanbots.dev/servers/954182077371285564/vote">서버 추천<br>한국디스코드리스트</a></li>
				<li><a href="https://archiver.me/servers/954182077371285564/like">서버 추천<br>아카이브</a></li>
				<br /><br /><br />
				<p>문의는 디스코드 봇 DM 으로 부탁드립니다.</p>
			</ul>
		</nav>
	</header>
	<div id="content">
		<section id="main_section">
			<article class="main_article">
				<h1>본 홈페이지는 아직 리모델링 중입니다.</h1>
				<br>
				<h4>
				리모델링 이전까지 홈페이지가 정상적인 모습을 가지고 있지 않습니다 ㅠㅠ <br />
				</h4>
			</article>
		</section>
	</div>
</body>
</html>