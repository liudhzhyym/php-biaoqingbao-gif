<?php
/**
  * 索引文件
  * 原项目链接：https://github.com/PrintNow/php-sorry-gif
  * 项目重写 By TheZihanGu
  * PHP-BIAOQINGBAO-GIF项目链接：https://github.com/TheZihanGu/php-biaoqingbao-gif
  * 注释可能不规范，欢迎指正
  * 欢迎各位大佬为此项目增加新的表情包
  * @param string   name：中文名，用于网站展示
  * @param boolean  small：是否有小视频文件（文件名命名为：template-small.mp4，需要自行转换视频大小），有则 true，无则 false
  * @param int      input_num：对话数，如 “为所欲为” 有 9 句话，就填 9;如 王境泽 有 4 句话，就填 4
  * @param string   preview_image：预览图，有则填图片链接,无则填 false，注意是 string 形，也就是要用引号引起来 'false' 不是直接写 false !!!
  * @param string   template_name：模板文件名，唯一标识，不能够有重复
  * @param array    input_placeholder：默认字幕，按照例子加吧
*/

return [
  [
    'name' => '第三区交通委',
    'small' => false,
    'input_num' => 3,
    'preview_image' => 'https://php-biaoqingbao-gif.oss-cn-hangzhou.aliyuncs.com/bjds.gif',
    'template_name' => 'bjds',
    'input_placeholder' => ['北京第三区交通委提醒您','道路千万条 安全第一条','行车不规范 亲人两行泪']
  ],
  [
    'name' => '为所欲为',
    'small' => true,
    'input_num' => 9,
    'preview_image' => 'https://i.loli.net/2018/04/04/5ac4b3236516b.jpg',
    'template_name' => 'weisuoyuwei',
    'input_placeholder' => ['好啊','就算你是一流工程师','就算你出报告再完美','我叫你改报告你就要改','毕竟我是客户','客户了不起啊','Sorry，客户真的了不起','以后叫他天天改报告','天天改 天天改']
  ],
  [
    'name' => '血小板',
    'small' => false,
    'input_num' => 2,
    'preview_image' => 'https://php-biaoqingbao-gif.oss-cn-hangzhou.aliyuncs.com/xuexiaoban.png',
    'template_name' => 'xuexiaoban',
    'input_placeholder' => ['抱歉 那个那个','因为出了些状况 施工进度推迟了']
  ],

  [
    'name' => '烤面筋',
    'small' => false,
    'input_num' => 8,
    'preview_image' => 'https://php-biaoqingbao-gif.oss-cn-hangzhou.aliyuncs.com/kaomianjin.png',
    'template_name' => 'kaomianjin',
    'input_placeholder' => ['香辣的口味','你吃过没','麻辣的感觉','你尝过没','网络红人的歌声','你听过没','真正的烤面筋','可带劲了']
  ],

  [
    'name' => '王境泽',
    'small' => true,
    'input_num' => 4,
    'preview_image' => 'https://php-biaoqingbao-gif.oss-cn-hangzhou.aliyuncs.com/wangjingze.jpg',
    'template_name' => 'wangjingze',
    'input_placeholder' => ['我王境泽就算是饿死','死外边 从这跳下去','也不会吃你们一点东西','真香']
  ],

  [
    'name' => '金坷垃',
    'small' => true,
    'input_num' => 6,
    'preview_image' => 'https://php-biaoqingbao-gif.oss-cn-hangzhou.aliyuncs.com/jinkela.png',
    'template_name' => 'jinkela',
    'input_placeholder' => ['金坷垃好处都有啥','谁说对了就给他','肥料掺了金坷垃','不流失 不蒸发 零浪费','肥料掺了金坷垃','能吸收两米下的氮磷钾']
  ],

  [
    'name' => '倒闭了',
    'small' => false,
    'input_num' => 1,
    'preview_image' => 'https://php-biaoqingbao-gif.oss-cn-hangzhou.aliyuncs.com/daobile.gif',
    'template_name' => 'daobile',
    'input_placeholder' => ['索尼倒闭了']
  ],

  [
    'name' => '土拔鼠',
    'small' => true,
    'input_num' => 2,
    'preview_image' => 'https://php-biaoqingbao-gif.oss-cn-hangzhou.aliyuncs.com/tuboshu.png',
    'template_name' => 'marmot',
    'input_placeholder' => ['啊啊啊啊啊啊啊！','啊啊啊啊啊啊啊！']
  ],

  [
    'name' => '窃格瓦拉',
    'small' => true,
    'input_num' => 6,
    'preview_image' => 'https://php-biaoqingbao-gif.oss-cn-hangzhou.aliyuncs.com/dagong.png',
    'template_name' => 'dagong',
    'input_placeholder' => ['没有钱啊 肯定要做的啊','不做的话没有钱用','那你不会去打工啊','有手有脚的','打工是不可能打工的','这辈子是不可能打工的']
  ],

  [
    'name' => '删库跑路',
    'small' => true,
    'input_num' => 6,
    'preview_image' => 'https://php-biaoqingbao-gif.oss-cn-hangzhou.aliyuncs.com/dagong.png',
    'template_name' => 'shankupaolu',
    'input_placeholder' => ['删库了肯定要跑路啊','老板拿着刀砍我','数据库是怎么删的？','那天我问群里人命令行怎么用','他们说输入 sudo rm -rf /','真是日了狗了']
  ],

  [
  'name' => '大师兄',
  'small' => true,
  'input_num' => 8,
  'preview_image' => 'https://php-biaoqingbao-gif.oss-cn-hangzhou.aliyuncs.com/dashixiong.png',
  'template_name' => 'dashixiong',
  'input_placeholder' => ['问得好，如果各位有兴趣的话','可以加入我们空手道部门','不过要经过选拔','因为我只会训练精英','绝对不会接收垃圾','看我干嘛？你把我当垃圾？','不是...不要误会，我不是针对你','我是说在座的各位都是垃圾']
  ],

  [
  'name' => '曾小贤',
  'small' => false,
  'input_num' => 4,
  'preview_image' => 'https://i.loli.net/2018/04/10/5acc4ddf5f133.png',
  'template_name' => 'zengxiaoxiandati',
  'input_placeholder' => ['平时你打电子游戏吗','偶尔','星际还是魔兽','连连看！']
  ],

  [
  'name' => '压力大爷',
  'small' => false,
  'input_num' => 3,
  'preview_image' => 'https://i.loli.net/2018/04/29/5ae58fb3c5857.png',
  'template_name' => 'yalidaye',
  'input_placeholder' => ['现在这法律啊，尽扯淡','孩子他不经常回来看我违什么法','30岁了不结婚那才是违法']
  ],

  [
    'name' => '诸葛孔明',
    'small' => true,
    'input_num' => 2,
    'preview_image' => 'https://i.loli.net/2018/04/04/5ac4b3df1baf4.png',
    'template_name' => 'kongming',
    'input_placeholder' => ['没想到','竟有如此厚颜无耻之人']
  ],

  [
    'name' => 'POP子和PIP美的日常',
    'small' => false,
    'input_num' => 7,
    'preview_image' => 'https://php-biaoqingbao-gif.oss-cn-hangzhou.aliyuncs.com/popteamepic.png',
    'template_name' => 'popteamepic',
    'input_placeholder' => ['嘿嘿！','丢雷楼谋','大力D','嘿嘿！！','丢埋雷楼豆','再大力D','唔好丢我啊']
  ]

];
