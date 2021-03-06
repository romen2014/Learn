# 第二章：CSS基础语法

### CSS样式规则
CSS规则由两部分构成：选择器{(声明)属性名1:属性值1;(声明)属性名2:属性值2;...}

### 如何引用CSS样式
- 行内样式(内联样式)
- 内部样式表(嵌入样式)
- 外部样式表
- 导入式

### CSS使用方法区别
|类别|引入方法|位置|加载|
|:---:|:---:|:---:|:---:|
|行内样式|开始标签内style|html文件内|同时|
|内部样式|head标签中的style标签内|html文件内|同时|
|外部样式|head标签中的link标签引用|CSS样式文件与HTML文件分离|页面加载时，同时加载CSS样式|
|导入式|在样式代码最开始处|CSS样式文件与HTML文件分离|在读取完HTML文件之后加载CSS样式文件|

### 使用外部样式的好处
1. HTML与CSS分离
1. 多个文件可以使用同一个样式文件
1. 多个文件应用同一个CSS文件，CSS只需下载一次

### CSS使用方法优先级
行内样式 > 内部样式 > 外部样式
1. 链入外部样式表与内部样式表之间的优先级取决于所处位置的先后
2. 最后定义的优先级最高(就近原则)

### 预览本章内容代码
[点击预览HTML](index.html)
[点击预览CSS](index.css)
