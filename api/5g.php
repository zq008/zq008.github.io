<?php


        //节目单：https://kylinapi.bbtv.cn/bestvapi/tvs?client=jJMvTVOEPVm89OQKGWcbzg%3D%3D
        //节目源：https://kylinapi.bbtv.cn/bestvapi/tv/now/120?client=jJMvTVOEPVm89OQKGWcbzg%3D%3D
        
        
/*
'cctv1’ => '94',   //CCTV1
'cctv2’ => '95',   //CCTV2
'cctv3’ => '96',   //CCTV3 
'cctv4’ => '97',   //CCTV4
'cctv5’ => '98',   //CCTV5
'cctv6’ => '99',   //CCTV6
'cctv7’ => '100',   //CCTV7
'cctv8’ => '101',   //CCTV8
'cctv9’ => '102',   //CCTV9
'cctv10’ => '103',   //CCTV10
'cctv11’ => '104',   //CCTV11
'cctv12’ => '105',   //CCTV12
'cctv13’ => '106',   //CCTV新闻
'cctv14’ => '107',   //CCTV少儿
'cctv15’ => '108',   //CCTV音乐
'cctv16’ => '109',   //CCTV17
'hunws’ => '110',   //湖南卫视
'bjws’ => '111',   //北京卫视
'dfws’ => '111',   //东方卫视
'zjws’ => '112',   //浙江卫视
'sdws’ => '113',   //山东卫视
'jsws’ => '114',   //江苏卫视
'gzws’ => '115',   //贵州卫视
'hubws’ => '116',   //湖北卫视
'szws’ => '117',   //深圳卫视
'tjws’ => '118',   //天津卫视
'cqbws’ => '119',   //重庆卫视
'ahws’ => '120',   //安徽卫视
'scws’ => '121',   //四川卫视
'hnws’ => '122',   //河南卫视
'jlws’ => '123',   //吉林卫视
'ynws’ => '124',   //云南卫视
‘lnwshd’' => '125',   //辽宁卫视
'hljws' => '126',   //黑龙江卫视
'dnws’ => '127',   //东南卫视
'gxws’ => '128',   //广西卫视
'hinws’ => '129',   //海南卫视
'hbws’ => '130',   //河北卫视
'jxws’ => '131',   //江西卫视
'nmgws’ => '132',   //内蒙古卫视
'sxiws' => '133',   //山西卫视
'gdws’ => '134',   //广东卫视
'qhws’ => '135',   //青海卫视
'gsws’ => '136',   //甘肃卫视
'nxws’ => '137',   //宁夏卫视
'btws' => '138',   //兵团卫视
'sxws' => '139',   //陕西卫视
'kkse' => '140',   //卡酷卡通
'xzws' => '144',   //西藏卫视
'cetv1' => '143',   //中国教育-1
'fztd' => '29',   //法治天地
'dfys' => '41',   //东方影视HD
'sssh' => '49',   //生活时尚
'jsrw' => '35',   //纪实人文HD
'wypd' => '38',   //外语频道
'dspd' => '39',   //都市频道HD
'jsxt' => '40',   //金色学堂HD
'dycj' => '17',   //第一财经HD
'dfcj' => '37',   //东方财经
'xwzh' => '36',   //新闻综合HD
'wxty' => '43',   //五星体育
'hhxd' => '26',   //哈哈炫动HD
'jykt' => '141',   //金鹰卡通
*/

        $cid = isset($_GET['cid'])?$_GET['cid']:40;
        $url='https://kylinapi.bbtv.cn/bestvapi/tv/now/'.$cid.'?client=jJMvTVOEPVm89OQKGWcbzg%3D%3D';
        $get_data=file_get_contents($url);
        header('Referer:https://live.kankanews.com/huikan/');
        header('Location:'.json_decode($get_data)->playUrl,true,302);

        
?>
