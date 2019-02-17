# 第三章：表单属性

### form标签属性
|属性|值|描述|
|:---:|:---:|:---|
|action|URL地址|提交表单时向何处发送表单数据|
|method|get、post|设置表单以何种方式发送到指定页面|
|name|任意设置|表单的名称|
|target|_blank、_self、_parent、_top|在何处打开action URL|
|enctype|application/x-www-form-urlencoded、multipart/form-data(上传文件时必须)、text/plain|在表单发送数据之前如何对其进行编码|

### method属性get与post区别
##### get
- 使用URL传递参数，保密性差
- 对所发送信息的数量有限制
- 一般用于信息获取

##### post
- 表单数据作为http请求体的一部分，保密性强
- 对所发送信息的数量没有限制
- 一般用于修改服务器上的资源

### 预览本章内容代码
[点击预览](index.html)
