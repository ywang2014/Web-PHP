# PHPandMySQL-web(4th) -- Luke Welling&Laura Thomson
## 学习心得
开始时间：2015-09-25
结束时间：2016-01-06

今天总算把这书看完了，预期寒假前看完，提前了一个月，也是很不错的，这本书700多页的正文，还有几十页的附录，好像是附录最少的书了，C专家那本书
附录也是很少的一本书，但是一般编程语言的书籍，好像附录都是超级多的，对于这种厚书，我都是很恐惧的，还好今年状态不错，坚持看了很多书，也能够坚持
看完，说明我现在看书的意志力，变强大了，这是很开心的，这几次看书的期限都比预期的提前了很多，可能就是我以前很害怕看书，也没有自信吧，现在的状态
还不错，很喜欢看书的感觉了，虽然很多专业课的书籍，确实很难看，但是也是很有乐趣的，特别是以前不知道的知识点，技术，看书之后，我就知道了，最喜欢
这种学到了新技术的感觉。这本书感觉看得很轻松，可能有些php的底子吧，所以看得比较快，其实实际估计完成这本书，不需要一月的，现在有这自信。现在
才看完，确实有很多客观原因的，php我不想当做主要学习对象，只是辅助技术吧，扩展自己的知识面，编程知识，然后做做项目的能力，感觉实际接私活，做项目
这些网站开发的比较容易接到项目，然后既可以锻炼能力，还能赚钱。

我一个师兄建议我以C/C++的学习为主，为明年找工作做准备，因为我自己希望以后做服务器相关的开发，能够做偏底层的工作，所以主要是坚持学习C/C++，投入
更多的时间，毕竟需要学会分清主次。然后现在和同学有一个开发项目，一个网站开发，我是主力开发的，需要会服务器端开发，还得构思项目整体框架，前端
CSS、Javascript也是需要学习的，花在项目上的时间也不少，然后顺便看看代码大全等书（还好代码大全是一本看得很轻松的书，看起来速度很快，也很开心)。
所以实际上，花在这本书的时间不多，然后这本书的所有代码，我都坚持敲了一遍，多数也调试了，纠正了一些错误，感觉收获很多的。

这本书内容非常丰富，非常全面，包含有5篇，34章，介绍的PHP技术很多。感觉收获最多的，是第三篇的4章内容，都是讲安全的，网站布局的，这些内容是我看第一本
php书上，都没有的，我都新技术比较感兴趣，虽然很多内容感觉有些深，都是新内容，但是看的时候，感觉还是轻松，收获很多，和我看代码大全的感觉一样，
都是些新知识的，但是基础的我也接触了，只是没有书上讲的这么系统和专业，所以看着很舒服、很开心，收获也感觉很多。(PS: 现在在看Stroustrup的C++
程序设计语言特别版的翻译版本，实在是头痛，很多内容不知道，感觉晦涩难懂，我本来以为已经有些C/C++的基础了，已经看完了Dennis的C语言和C专家，C++Primer
几本书的中文书，感觉收获很多的，但是看这本书，瞬间无语了，一个小时，常常只能看2页、3页的，看不下去，很容易分心，感觉太难了)。

具体的学习心得，过几天总结吧，这几天朋友过来找我玩，都没有好好陪他玩，很不好意思的，今天也不早了，有时间，专门整理一下思路，完成这篇学习心得。

**Date: 2016-01-06**

## 教材下载
[PHP和MySQL Web开发(4th)](http://pan.baidu.com/s/1bnYtiwv)

#### 第一篇
第一篇的7章内容，都是属于基础内容，我看第一本的php书籍中，也有介绍，这本书这些基础内容介绍，感觉比较粗略，内容都涉及到了，但是不够详细具体，
基础类容，看得快，很容易上手，但是忘记得更快，现在就好像已经忘记得差不多了，很多东西用得少，所以非常容易忘记，这也是语言学习的通病吧，语法基础
非常容易学习，学的时候，看着书，感觉都会了，但是一段时间没有使用，复习的，感觉都是些似是而非的东西了，代码好像也会写，但是很多函数已经使用得
不是那么自信了，知道好像有这么个函数，但是参数什么的可能已经非常模糊了。**语言必须多实践、不能贪多**

第一章的内容非常多，太泛了一点，已经完全不能够流利的说些知识了，只记得一些常识吧。

第二章，主要讲的是数据存储，使用的是文件的方式，对于文件操作的函数什么的，讲解非常仔细，但是使用太少，也好像忘记了大半，记得get_file_contents()
/put_file_contents()函数，readfile(), fread(),fwrite()，很多都不记得了，看得时候，感觉这章讲的内容很多，很丰富，也是用。但是后面用的太少了。
项目主要是使用mysql数据库，文件的读写很少。上传文件倒是在使用。unlink()/mkdir()/move_unloaded_file()/filesize()/filemtime/file_exists等函数，
使用比较多，反而更加熟悉一些。fseek/ftell的非常生疏

第三章，讲的是数组，数组好像知道，毕竟一直是，array，可以嵌套，但是具体书中讲的内容，也是忘记了吧。关于数组的函数也是很多，但是使用
太少基本不知道了，count()唯一使用的函数吧。

第四章，字符串和正则表达式，也是很模糊的，简单还知道 * . + 什么的，复杂的也是忘记了，使用少，非常生疏。每次使用都要百度吧

第五章的内容，其实我非常喜欢，我比较喜欢新知识，然后重用技巧实在是强大。

第六章，面向对象，基础介绍，其实都是一样的额，包括java、C++什么的，理念好像非常容易理解，封装、继承、多态，但是不论看了多少遍，每次
都是感觉面向对象很简单，但是实际开发就是不会用，一直习惯于面向过程的开发。现在学习的次数太多了，也理解了类是对象的抽象，其实就是
自定义一种类型，然后封装数据，实现操作，程序开发会简单，容易。但是实际开发，好像就是不会自己抽象，只能看懂别人的抽象，只能说明白了
面向对象，但是没有学会，不会使用。

第七章，错误和异常处理，也是很经典的内容，学习了不知道多少次，C++也有，语法什么的也差不多，就是一直不会用，很奇怪，只有java的异常在
使用，这个是必须使用的，不然编译不通过，使用的eclipse自动添加异常内容，所以用起来，好像很简单的样子。

语言的特性，必须坚持使用，多实践才能学会的。看了，肯定忘记了，只有一直用，一直写代码，才能掌握。

Tell me and I will forget. Show me and I may not remember. Let me try and I will understand

#### 第二篇

	