
## ECMAScript函数

### 函数
- 函数是实现一些特定功能的代码组和
- ES中函数本质上是一个对象，对象名本质上是指向该对象的指针
- 函数作为对象，拥有相应的属性和方法

### 函数声明法定义函数

```
// 打印两个数的和
function sum1(numA, numB){
  console.log('sum1:', numA + numB);
}
```

### 函数的表达式定义
- 语法：new Function(参数1, 参数2, ...);
- 其中最后一个参数作为函数的函数体，之前的参数作为该函数的形参

```
// 打印两个数的和
var sum2 = new Function(
  'numA',
  'numB',
  'console.log("sum2:", numA + numB);'
);
```

```
// 返回两个数的和
var sum3 = function(numA, numB){
  return numA + numB;
};
```

### 函数的调用
- 直接使用函数名调用并执行函数
- **使用函数声明方式定义的函数，JS执行引擎会自动将声明隐式提至开头，故可在定义之前调用**
- **使用表达式定义的函数，在定义之前不可调用**
- 下例中只有sum1可以在函数声明之前调用

```
sum1(2, 3);
sum2(2, 3);
sum3(2, 3);
```

### 函数的返回值
- 可在函数体内通过return返回特定的返回值
- 如果没有return语句，则返回undefined

```
console.log(sum1(2, 3));  //undefined
console.log(sum3(2, 3));  //5
```

### 函数的参数
- 参数无需约定类型(基于ES弱类型本质)
- 参数个数可以不确定
- 可通过arguments变量读取实际传入的参数
- 可通过arguments.length获取参数的个数
- 可通过arguments索引读取相应的参数值
- ES中参数是按值传递的，**如果把一个对象当参数进行传递，则传递的是对象本身，而不是其指针**

```
function testArgs(){
  console.log('arguments count:', arguments.length);
  console.log('arguments:', arguments);
  console.log('first argument:', arguments[0]);
}

testArgs(12, 'b', false);
```

### 回调函数
- 将函数作为参数传递给另外一个函数

```
// 先将连个数各自乘以2，再回调求和
var f1 = function(numA, numB, callback){
  numA \*= 2;
  numB \*= 2;
  console.log('numA:', numA, 'numB:', numB);
  return callback(numA, numB);
}
var f2 = function(numA, numB){
  console.log('sum:', numA + numB);
  return numA + numB;
}

var result = f1(12, 5, f2);

console.log('result', result);
```

### 匿名函数
- 函数可以不取名，便于回调
- 建议给匿名函数进行命名
