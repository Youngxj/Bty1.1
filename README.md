# Bty1.1

#### 介绍
Bty分销系统开源版

如果你觉得这个项目能够帮到你，欢迎fork和start

<font color=#3e9e9e size=5>

🥇[官网](https://btai.cc) |
🥈[博客](https://blog.youngxj.cn/577.html) |
🥉[社区](https://bbs.btai.cc) |
🛒[购买授权](https://auths.yum6.cn) |
📹[视频教程](https://www.bilibili.com/video/av64643042) |
👬[QQ群](//shang.qq.com/wpa/qunwpa?idkey=80584bb6c4b5aacb387875557bf39611af2de50201cc9a1830bdee27cc211b0d)

</font> 


#### 宝塔活动

宝塔服务器面板，一键全能部署及管理，送你￥3188礼包，点我领取 🔗 [点我领取](https://www.bt.cn/?invite_code=MV93YXNpa2I=)


#### 软件架构
1. Thinkphp5
2. flatlab-bootstrap3

#### 参与人员

🤵Youngxj

👩阿珏

#### 项目说明

该系统基于宝塔开放API底层控制器，进行主机控制，目前可以完成大部分主机操作功能如：新增主机、修改主机配置、删除主机、查找主机、以及宝塔面板能开放使用的主机操作功能，由于宝塔面板的单一用户性，所以开发这款可以由个人操作的IDC分销系统。

#### 项目特色

1. 独立的用户管理、后台配置
2. 使用宝塔API接入服务器可实现正常的网站操作，实现网站开通、域名绑定、ssl证书、防盗链、一键部署、网站防篡改、网站监控报表、防火墙等功能
3. 配合宝塔强大的生态系统，安装更多插件后可使用到许多有趣的功能
4. 内置易支付，简单方便完成会员充值操作


#### 安装教程

1. 上传并解压源码到网站根目录(暂不支持二级目录)
2. 上传并导入数据库文件`bty.sql`
3. 修改`application/database.php`中数据库信息

		// 服务器地址
		'hostname'        => '',
		// 数据库名
		'database'        => '',
		// 用户名
		'username'        => '',
		// 密码
		'password'        => '',

4. 将运行目录设置为`/public`
5. 添加Thinkphp伪静态规则

	Apche:

		<IfModule mod_rewrite.c>
		Options +FollowSymlinks -Multiviews
		RewriteEngine on
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteRule ^(.*)$ index.php?/$1 [QSA,PT,L]
		</IfModule>

	Nginx:

		location / {
		if (!-e $request_filename){
			rewrite  ^(.*)$  /index.php?s=$1  last;   break;
			}
		}

	IIS:

		<rewrite>
		<rules>
		<rule name="OrgPage" stopProcessing="true">
		<match url="^(.*)$" />
		<conditions logicalGrouping="MatchAll">
		<add input="{HTTP_HOST}" pattern="^(.*)$" />
		<add input="{REQUEST_FILENAME}" matchType="IsFile" negate="true" />
		<add input="{REQUEST_FILENAME}" matchType="IsDirectory" negate="true" />
		</conditions>
		<action type="Rewrite" url="index.php/{R:1}" />
		</rule>
		</rules>
		</rewrite>

#### 宝塔服务器对接教程

1. 宝塔安装：请在分销服务器中安装宝塔最新面板 （[宝塔官网](https://www.bt.cn/?invite_code=MV93YXNpa2I=) | [注册](https://www.bt.cn/register.html?referee=3671)）
2. 环境安装：当面板安装完成后请登录网页版宝塔面板管理后台进行环境的安装，小杰推荐如下配置 Centos7.2 | PHP5.3-7.3 | Mysql5.5 | Redis4.0.9 | Nginx1.14.0 | Pure-Ftpd 1.0.47 | phpMyAdmin 4.4 | 宝塔一键部署源码 1.1
3. 宝塔Api密钥：宝塔面板-API接口（API地址请勿带安全入口，参照 `http://127.0.0.1:8888` ）-开启并获取接口密钥- ⚠️`填写IP白名单为当前分销系统搭建的服务器IP`
4. 测试域名： ⚠️`必填！！！！！`需要泛域名解析一个顶级域名到该服务器IP上，填写到分销系统主机管理-添加主机-测试域名中
5. 数据库管理地址：宝塔面板-数据库-phpMyAdmin，然后复制地址 🔗`http://x.x.x.x:888/phpmyadmin_xxxxxxxxxx/index.php` 填写到分销系统主机管理-添加主机-数据库管理地址中
6. 性能标签：在添加服务器时请按照标准信息进行填写，否则容易出现一些意想不到的问题。描述主机性能尽量使用2G4H6M等简明扼要的关键词
7. 环境标签：服务器安装及已安装的插件环境，描述主机环境尽量使用Centos7.2 PHP5.3-7.3等简明扼要的关键词
8. 提醒：免费版（由于宝塔是未限制空间大小制度，所以目前不能限制用户空间及数据库的使用大小。）商业版（支持空间、数据库、总流量控制）
9. 如果遇到主机开通失败报错，请先检查主机信息是否正确，之后确认本系统运行的IP是否在API接口白名单中。

#### 使用说明
0. PHP 版本要求: PHP 5.6
1. 后台地址为/admin(免费版暂不支持修改)，请遵循后台首页管理员须知进行主机的添加
2. 后台账号：admin 密码：admin000
3. 修改系统设置中的站点域名
4. 本系统由 Youngxj 编写，请遵守开源协议使用守则，允许二次开发使用。
5. ⚠️请使用最新版宝塔面板

#### 项目截图

![后台管理](https://images.gitee.com/uploads/images/2019/0318/114722_56d7086c_1511092.jpeg)
![主机控制](https://images.gitee.com/uploads/images/2019/0318/114722_c9594554_1511092.jpeg)

#### 付费版预览

![Bty3.7](https://images.gitee.com/uploads/images/2020/0208/134856_e1f64495_1511092.png)

