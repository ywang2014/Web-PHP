# PHP开发WEB网站实例导学
## 学习心得
结束时间：2015-09-24

	比我预期的时间提前了很多，本来以为得花半年的时间才能完成php基础学习的，以前看书的经验不好，总是会拖半年左右才能看完一本书，
	
	可能由于实验室真的很闲，完全没有琐事，可以坚持每天上午看半天书，就这么一个月时间解决了。

	
	这本书的内容比较丰富，包含了很大的知识面，全书就9章，259页正文，加上附录共308页，篇幅很精致，因此知识点自然不能一点一点覆
	
	盖，只能点到为止。

	
	这本书最大的亮点是实例丰富，以实例讲解为主，从而带动学习php语音的语法，用法。这是我看的第一本关于web开发方面的书籍，由于我
	
	有一些薄弱的编程基础，编写过C/C++/Java/R等语音的程序，虽然都不是很了解，但是毕竟接触过一些编程语音，而且PHP语法混合了C、
	
	JAVA、Perl及PHP自身的语法，所以学习起来不是非常困难，能够理解一般程序的逻辑。这本书适合有编程基础朋友的快速入门，和项目学
	
	习，但是我不建议初学者直接拿这本书上手。

	
	这本书内容非常好，基本都有实例源代码，适合学习，但是有些遗憾的是，我看的由中国民航出版社2002年出版的这一本中，源代码有的
	
	有些错误，不能直接通过编译，有些可能属于版本原因吧(我的编译调试环境是PHPnow-1.5.6 + firefox-41.0)，由于只是菜鸟，分析不
	
	出什么原因，只知道需要修改一些东西，才能调试成功。

	
	PHP的学习，收获也不知道是什么，毕竟语言这东西，看了一本书，看的时候，各种东西记得很清楚，过几天，半个月的不用，肯定生疏了，
	
	学的就都忘记了，所以真的不好说学会了什么php的语法规则什么的，许多学的不全吧，毕竟这本书只要面向的不是语法规则什么的。但是
	
	我学了web开发的基本流程，知道了web开发是怎么样的，不再是以前那个以为很神奇的东西，以为很难，不是一般人能够做的，必须得花多
	
	少时间学习什么的...我想这些基本的东西，我是不会忘记的吧。

	
	最让我有成就感的不是完成那些项目，看见那些页面可以打开，跳转什么的。当然完成这些项目实例，确实是让我进步最大最大的东西！！
	
	
	第一件令我开心的是，总算完全明白了怎么调试PHP程序，一开始完全不知道怎么使用PHPnow，按照教程安装好了，确实很简单，但是根本
	
	不会用，也不知道怎么用，不要怪我太菜，真的是没有接触，百度了很多，就是没有百出怎么使用......入门书籍也参考了，讲到安装，就
	
	以为你都知道了......我是真心没有搞懂，以为和其他语言一样什么的，双击php。。。就可以运行，调试了。完全是醉了......然后如果
	
	你想做服务器，需要自己创建主机(通过PnCp.cmd 很简单，我最喜欢的，双击即可。这个有向导)，或者直接使用本身就有的一个
	
	localhost主机，将自己写的php，html文件必须放在这个目录下(比如我的\htdocs目录(127.0.0.1)或者\vhosts\127.0.0.100
	
	目录下(自己创基的虚拟主机))，如此才能实现服务器访问了，可以让别人访问你的网站了(需要设置主机ip)。
	
	
	文件放正确目录之后，就可以调试了。有一个小技巧是 index.php(index.html)文件，这个命令的文件，就相当于主页面文件吧，
	
	属于自动打开的，只要打开目录文件即可，路径名不需要到具体的./index.php
	
	
	如此相当于我明白了PHPnow的基本公用了吧，可以利用了，不再是什么都不懂了！好开心。这个过程，真的是很悲催啊，各种地方没有找到
	
	相关的指导，后来不知道怎么的就想到了，让后就去试验，果然成功了。教训：实践是最好的知识获取途径！！！！
	
	
	第二件应该是学习了SQL语句吧，对mysql数据库有些了了解，不再是对数据库一无所知吧，大学好奇之下，考了全国计算机等级考试三级-
	
	数据库，喜欢挑战有些难度的，那个时候，机械专业出身的，了解一点c语音皮毛，就去考了，没有想多顺利通过，以为自己还可以，学习
	
	计算机之后，才发现什么是井底之蛙，也知道了计算机等级考试的性质了----水！水！水！因为考完试，就不知道什么是数据库了，不知道
	
	怎么用，也不知道可以用来干什么。SQL语音更加没有理解了。真心白考了！！
	
	
	数据库，真的是太强大了，C语音的查找，读取文件太麻烦了，但是使用数据库，插入，删除，查询简直就是小朋友吃糖一样，不需要多么
	
	用功，就知道怎么用了，而且越用越开心啊！！！
	
	
	SELECT
	
	INSERT
	
	DELETE
	
	UPDATE
	
	第三件开心的是，知道了网站开发的基本流程和思路了吧，不再是茫然一无所知吧，至少可以愉快地和web开发者聊天了，不会让他们以为我
	
	是来星星的你！

## 学习记录
	书中源代码，都在本目录下，调试的程序，即大部分修改过的，可以通过调试的源代码不在这里，等我有空会整理上传github的。
	
	开始学习时间：2015-08-19
	
	结束此书时间：2015-09-24 
	
	感谢这本书：《PHP开发WEB网站实例导学》
## 教材下载
[PHP开发WEB网站实例导学](http://pan.baidu.com/s/1eQ4QdBc)

	