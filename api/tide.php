<?php
$id=isset($_GET['id'])?$_GET['id']:'szws';
$n = [
  //哈尔滨
  'byzh' => ['C353yf7','http://vod.center.hljtv.com/lsdream/'],//巴彦电视台
  //大庆
  'ldzh' => ['hlX5Fq1','http://vod.center.hljtv.com/lsdream/'],//林甸综合
  //佳木斯
  'fjzh' => ['aBbyTuU','http://vod.center.hljtv.com/lsdream/'],//富锦电视台
  'fyzh' => ['e3Y027D','http://vod.center.hljtv.com/lsdream/'],//抚远电视台
  //绥化
  'slzh' => ['FtWlsh9','http://vod.center.hljtv.com/lsdream/'],//绥棱综合
  //牡丹江
  'dnzh' => ['7gf6a72','http://vod.center.hljtv.com/lsdream/'],//东宁综合
  'lkzh' => ['WtA8HmB','http://vod.center.hljtv.com/lsdream/'],//林口综合
  'mlzh' => ['wy7HG9x','http://vod.center.hljtv.com/lsdream/'],//穆棱综合
  'sfhzh' => ['gS7S5pS','http://vod.center.hljtv.com/lsdream/'],//绥芬河综合
  //伊春
  'jyzh' => ['1lqKC4B','http://vod.center.hljtv.com/lsdream/'],//嘉荫综合
  'tlzh' => ['QgOu88F','http://vod.center.hljtv.com/lsdream/'],//铁力综合
  //齐齐哈尔
  'kdzh' => ['IXo0qbO','http://vod.center.hljtv.com/lsdream/'],//克东综合
  'ljzh' => ['nznfTV8','http://vod.center.hljtv.com/lsdream/'],//龙江综合
  'nhzh' => ['Ig4YRW0','http://vod.center.hljtv.com/lsdream/'],//讷河综合
  'tailzh' => ['on7sNau','http://vod.center.hljtv.com/lsdream/'],//泰来综合
  'yazh' => ['1szOvMr','http://vod.center.hljtv.com/lsdream/'],//依安综合
  //七台河
  'blzh' => ['sikQfzJ','http://vod.center.hljtv.com/lsdream/'],//勃利综合

  //山西台
  'sxiws' => ['OVfl2Ju','https://livehhhttps.sxrtv.com/lsdream/'],//山西卫视
  'sxiws2' => ['q8RVWgs','https://livehhhttps.sxrtv.com/lsdream/'],//山西卫视2
  'sxjj' => ['4j01KWX','https://livehhhttps.sxrtv.com/lsdream/'],//山西经济
  'sxys' => ['Md571Kv','https://livehhhttps.sxrtv.com/lsdream/'],//山西影视
  'sxshfz' => ['p4y5do9','https://livehhhttps.sxrtv.com/lsdream/'],//山西社会与法治
  'sxwtsh' => ['Y00Xezi','https://livehhhttps.sxrtv.com/lsdream/'],//山西文体生活
  'sxhh' => ['lce1mC4','https://livehhhttps.sxrtv.com/lsdream/'],//山西黄河

  //大连台
  'dlzh' => ['tcb3IB5','http://live.dltv.cn/'],//大连新闻综合
  'dlsh' => ['JzcFkF4','http://live.dltv.cn/'],//大连生活
  'dlwt' => ['hxT7Fc3','http://live.dltv.cn/'],//大连文体
  'dlzhys' => ['8cuL6wa','http://live.dltv.cn/'],//大连综合影视
  'dlse' => ['q6tZ6Ba','http://live.dltv.cn/'],//大连少儿
  'dlgw' => ['N4S4uAj','http://live.dltv.cn/'],//大连天鹅购物

  //陕西
  'sxws' => ['X6feiLQ','http://live.sxtvs.com.cn/lsdream/'],//陕西卫视
  'sxxwzx' => ['SeT8Mem','http://live.sxtvs.com.cn/lsdream/'],//陕西新闻资讯
  'sxdsqc' => ['zAJprk2','http://live.sxtvs.com.cn/lsdream/'],//陕西都市青春
  'sxtyxx' => ['LLhVrGZ','http://live.sxtvs.com.cn/lsdream/'],//陕西体育休闲
  'sxsh' => ['a73O8Sd','http://live.sxtvs.com.cn/lsdream/'],//陕西生活
  'sxgg' => ['8aCj3gK','http://live.sxtvs.com.cn/lsdream/'],//陕西公共
  'sxyd' => ['Au7pR2j','http://live.sxtvs.com.cn/lsdream/'],//陕西移动

  //太原台
  'tyxwzh' => ['49VAfrw','http://tytv-tsl.cutv.com/'],//太原新闻综合
  'tyjjsh' => ['u8BmT6h','http://tytv-tsl.cutv.com/'],//太原经济生活
  'tysjfz' => ['phsry3e','http://tytv-tsl.cutv.com/'],//太原社教法制
  'tyys' => ['J4EX72D','http://tytv-tsl.cutv.com/'],//太原影视
  'tywt' => ['rk8Z088','http://tytv-tsl.cutv.com/'],//太原文体
  'tyblg' => ['iancgyD','http://tytv-tsl.cutv.com/'],//太原佰乐购

  //汕头台
  'stxwzh' => ['lKGXIQa','https://sttv-tsl.cutv.com/'],//汕头新闻综合

  //珠海台
  'zhxw' => ['zZGtroL','http://zhtv-tsl.cutv.com/'],//珠海新闻
  'zhsh' => ['HtyU8ou','http://zhtv-tsl.cutv.com/'],//珠海生活

  //深圳台
  'szws' => ['AxeFRth','https://sztv-hls.cutv.com/',1],//深圳卫视
  'szyl' => ['1q4iPng','https://sztv-hls.cutv.com/',1],//深圳娱乐
  'szse' => ['1SIQj6s','https://sztv-hls.cutv.com/',1],//深圳少儿
  'szgg' => ['2q76Sw2','https://sztv-hls.cutv.com/',1],//深圳公共
  'szcjsh' => ['3vlcoxP','https://sztv-hls.cutv.com/',1],//深圳财*生活
  'szdsj' => ['4azbkoY','https://sztv-hls.cutv.com/',1],//深圳电视剧
  'szds' => ['ZwxzUXr','https://sztv-hls.cutv.com/',1],//深圳都市
  'szgj' => ['sztvgjpd','https://sztv-hls.cutv.com/',1],//深圳国际
  'szyd' => ['wDF6KJ3','https://sztv-hls.cutv.com/',1],//深圳移动
  'yhgw' => ['BJ5u5k2','https://sztv-hls.cutv.com/',1],//宜和购物
  'sztyjk' => ['sztvtyjk','https://sztv-hls.cutv.com/',1],//深圳体育健康

  //合肥
  'hfxw' => ['pdq062k','https://hylive.hfbtv.com/lsdream/'],//合肥新闻
  'hfcj' => ['FRTSshY','https://hylive.hfbtv.com/lsdream/'],//合肥财*
  'hfgg' => ['pytL5lE','https://hylive.hfbtv.com/lsdream/'],//合肥公共
  'hfxx' => ['q66ojce','https://hylive.hfbtv.com/lsdream/'],//合肥故事休闲
  'hfjy' => ['5EfK6HI','https://hylive.hfbtv.com/lsdream/'],//合肥教育法治

  //江门
  'jmzh' => ['4x3T0dO','http://tideweblive.jmtv.cn/lsdream/'],//江门综合 注：用H5播放器播放，vlc不能播放
  'jmqxsh' => ['qzohscw','http://tideweblive.jmtv.cn/lsdream/'],//江门侨乡生活注：用H5播放器播放，vlc不能播放

  ];

$t = time();
$token=md5($t.$n[$id][0].'cutvLiveStream|Dream2017');
$bstrURL = "http://cls2.cutv.com/getCutvHlsLiveKey?t=".$t."&token=".$token."&id=".$n[$id][0];
$p = file_get_contents($bstrURL);
if($n[$id][2]==1){
   $t = dechex(time());;
   $signkey = 'bf9b2cab35a9c38857b82aabf99874aa96b9ffbb';
   $subKey = '/'.$n[$id][0].'/500/'.$p.'.m3u8';
   $sign = md5($signkey.$subKey.$t);
   $playurl = $n[$id][1].$n[$id][0].'/500/'.$p.'.m3u8?sign='.$sign.'&t='.$t;
   } else {
   $playurl = $n[$id][1].$n[$id][0].'/'.$p.'.m3u8';
   }
header('Location:'.$playurl);
//echo $playurl;
?>
