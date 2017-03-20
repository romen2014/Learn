## ECMAScript语法基础

### 严格模式
作用：消除ECMAScript老版本中的不合理、不严谨、不安全之处，提升效率。
范围：函数范围的严格模式，整个脚本的严格模式
**Node.js中建议全部使用严格模式**

`"use strict"`

### 标识符
- 通常作为变量名、常量名、函数名等
- 使用下划线、字母、Unicode中的语言字符、美元符号开头
- 可以包含数字但不能以数字开头
- 不能是保留字和关键字
- 大小写敏感

##### 关键字
- ECMA-262中特定用途的词
- 控制语句词
  - if
  - switch
  - case
  - in
  - catch
  - ...
- 执行特定操作词
  - break
  - default
  - delete
  - new
  - return
  - this

##### 保留字
- 现在没有特定用途，但未来可能做关键字的词
- 基础保留字
  - class
  - enum
  - extends
  - super
  - const
  - export
  - import
- 严格模式保留字
  - implements
  - package
  - interface
  - static
  - public
  - protected
  - private
  - yield
  - let

##### 驼峰命名法
第一个单词以小写字母开始；之后每个单词的首字母大写

`userName`
`userAge`

##### 匈牙利命名法：类型+表意
在驼峰命名法基础上，在第一个单词前加上表意修饰前缀

`sUserName`
`nUserAge`

### 语句
- 一行就是一条语句
- 语句使用分号结尾，可以没有，但强烈建议使用分号结尾

### 代码块
- 使用大括号组织的多条语句
- 在可用可不用的情况下，建议使用

### 变量
- 定义
  保存值的占位和符
- 性质
  弱类型。即不强制要求规定变量的数据类型。
- 声明方式
  使用var来定义变量

  ```
  var userName
  ```

### 数据类型分类
- 简单数据类型
  - Undefined
  - NULL
  - Boolean
  - Number
  - String
- 复杂数据类型
  - Object

##### Undefined类型
- 只有一个值：undefined
- 出现原因
  - 变量定义后没有初始化
  - 变量定以后使用undefined初始化。建议定义变量时尽量给出一个初始值


##### Null类型
- 只有一个值：null
- 实际一个指向空对象的指针


##### Undefined类型与Null类型的区别
- null表示没有对象
- undefined表示缺少值

  ```
  console.log(Number(null));  //0
  console.log(Number(undefined));   //NaN
  ```

##### Boolean类型
- 只有两个值
  - false(假)
  - true(真)
- 作用：条件判断
- Boolean()函数可以将其他类型转换为布尔值。

  ```
  console.log(Boolean(''));   //fasle
  console.log(Boolean(0));    //fasle
  console.log(Boolean(NaN));    //fasle
  console.log(Boolean(null));   //fasle
  console.log(Boolean(undefined));    //fasle

  console.log(Boolean({}));    //true ,空对象会被转换为true
  ```

##### Number类型
- 包含整数和浮点数
- 浮点数占用存储空间为整数的2倍
- 浮点数小数部分如果为0，会被转换为整数保存
- 二进制、十进制、十六进制三种表示法，严格模式下不支持八进制表示法
- 支持科学表示法 E 表示10的n次方

  ```
  console.log(1e5);   //100000,1*10^5
  console.log(2e-3);    //0.002,2*10^-3
  ```

##### NaN
- Not a Number
- isNaN()方法。检验参数是否不是数字

  ```
  console.log(isNaN('abc'));    //true  不是数字
  console.log(isNaN('12'));     //false 是数字
  console.log(isNaN(12));       //false 是数字
  ```

##### 数字转换
- Number()方法
  将参数转换为数字

  ```
  console.log(Number('-12'));    //-12
  console.log(Number(false));   //0
  console.log(Number(true));    //1
  console.log(Number(null));    //0
  console.log(Number(undefined));    //NaN
  console.log(Number('013'));    //13 无法识别八进制
  console.log(Number('0x13'));    //19  可识别十六进制
  ```

- parseInt()方法
  将参数转换为整型数字。去掉小数点后边部分与不可读部分

  ```
  console.log(parseInt('12.34abc'));    //12
  ```

- parstFloat()
  将参数转换为浮点型数字。只保留第一个小数点后边的部分

  ```
  console.log(parseFloat('12.34.56'));  //12.34
  ```

##### String类型
- 字符串类型
- 单引号与双引号完全相同，都可以进行转译

  ```
  console.log("I\'m Romen");    //I'm Romen
  ```

##### Object类型
- 对象类型
- 成员
  - 值
  - 函数
  - 成员间无序

  ```
  var obj = new Object();
  console.log(obj);   //{}
  obj = {};
  console.log(obj);   //{}
  ```

### 操作符
- 一元操作符
- 位操作符
- 布尔操作符
- 四则运算操作符
- 关系操作符
- 条件操作符
- 赋值操作符
- 逗号操作符


#####一元操作符
- 定义
  只能操作一个值的操作符
- typeof 类型检测操作符
  - 检查对象的数据类型或函数
  - 检查结果
      undefined
      boolean
      string
      number
      object
      function

  ```
  console.log(typeof a);  //undefined ,未定义的变量a

  var b = undefined;
  console.log(b);   //undefined

  var obj2 = null;
  console.log(typeof obj2); //object  ,null实际指向一个空对象
  ```

- \+ 正修正符，不会对当前操作数有任何影响

  ```
  var n = 1;
  console.log(+n);  //1
  ```

- \- 符修正符，对当前操作数进行取反操作

  ```
  var n = 1;
  console.log(-n);  //-1
  ```

- \+\+自增操作，有前置后置的区别

  ```
  var n = 1;
  console.log(++n); //2 ,前置操作符优先对数据进行操作，后执行语句
  ```

  ```
  var n = 1;
  console.log(n++); //1 ,后置操作符优先执行当前语句，执行完毕后进行运算操作
  ```

- \-\-自减操作，有前置后置的区别

  ```
  var n = 1;
  console.log(--n); //0 ,前置操作符优先对数据进行操作，后执行语句
  ```

  ```
  var n = 1;
  console.log(n--); //1 ,后置操作符优先执行当前语句，执行完毕后进行运算操作
  ```

##### 位操作符
 - 进行二进制操作
 - 二进制级别高级操作，不展开


##### 布尔操作符
- !   逻辑非，一元操作符

  ```
  console.log(!true);   //false
  console.log(!false);    //true
  ```

- &&  逻辑与，二元操作符，结果都为真才返回真，否则返回假

  ```
  console.log(true && true);  //true
  console.log(true && false);   //fasle
  console.log(false && true);   //fasle
  console.log(false && false);    //fasle
  ```

- ||  逻辑或，二元操作符，结果都为假才返回假，否则返回真

  ```
  console.log(true || true);    //true
  console.log(true || false);   //true
  console.log(false || true);   //true
  console.log(false || false);    //fasle
  ```

##### 四则运算操作符
- \+ 加或字符串相连
- \- 减
- \* 乘
- / 除
- % 模(求余)

  ```
  console.log('abc' + 'ab');   //abcab
  console.log(12 + 5);   //17
  console.log('12' + 5);   //125
  console.log(12 - 5);   //7
  console.log(12 - '5');   //7
  console.log('abc' - 'ab');   //NaN
  console.log(12 * 5);    //60
  console.log(60 / 5);    //12
  console.log(10 % 3);    //1
  ```

##### 关系操作符
- >  大于
- <  小于
- >= 大于等于
- <= 小于等于
- == 相等
- ===  全等
- != 不想等
- !==  不全等
- 返回结果为布尔值
- 字符串比较时逐位比较每个字符的ACSII码值
- 对象比较时，只有两个操作对象都指向同一个对象时才相等全等


##### 条件操作符
- 唯一一个三元操作符
- (条件)?(条件成立的返回值):(条件不成立的返回值)

  ```
  console.log((1>0)?'zhen':'jia');  //zhen
  ```

##### 赋值操作符
- = 赋值

  ```
  n = 1;
  ```

- +=
- -=
- \*=
- /=
- %=

  ```
  n += 3; //即 n = n + 3。-= \*= /= %=同理
  console.log(n); //4
  ```

- 另有位赋值操作符，不展开

##### 逗号操作符
- 在一行语句中执行多个操作

  ```
  var x = 1, y = 2, z = 3;
  console.log(x, y, z);   //1 2 3
  console.log((x, y, z));   //3 ,一系列值通过逗号操作符连接时会返回最后一个值
  ```
