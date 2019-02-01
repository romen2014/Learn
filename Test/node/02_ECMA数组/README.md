## ECMA数组

### 数组的初始化与检查
  - 数组的成员可以是任意数据类型、函数或其他数组
  - 数组成员是有序的

##### 使用构造函数创建数组并进行初始化

```
var arr = new Array();
console.log(arr);
var arr = new Array(3);
console.log(arr);
var arr = new Array('romen', 'lindar', false);
console.log(arr);
```

##### 使用字面量创建数组并进行初始化
  **使用字面量形式初始化数组不能指定数组长度**

```
var arr = []
console.log(arr);
var arr = ['romen', 'lindar', false];
console.log(arr);
```

### 数组的访问
  - 使用下标直接访问，数组下标从0开始
  - 被跳过的位会被初始化为undefined

  ```
  console.log(arr[0]);
  arr[3] = true;
  arr[5] = 'Hello'
  console.log(arr);
  console.log(arr[4]);
  ```

### 数组的检查

```
console.log(arr instanceof Array);
console.log(Array.isArray(arr));
```

### 数组的转化

##### 对象转换为数组

```
var obj = {a:1, b:2, c:3, d:4};
console.log(Object.keys(obj));
```

##### 字符串转换为数组

```
var str = 'I am Romen';
console.log(str.split(' '));
console.log(str.split('am'));
```

##### 数组转换为字符串

```
var arr = ['a', 'b', 'c', 'd'];
console.log(arr.toString());
console.log(arr.join(' '));
console.log(arr.join(' is '));
```

### 数组的排序

##### sort()正序与reverse()倒序排序
  - 排序依据是各成员的字符串大小
  - 会修改数组本身的顺序

  ```
  var arr = [5, 8, 9, 3, 2, 6, 0, 1, 4, 7, 11, 233, 543];
  console.log(arr.sort());
  console.log(arr);
  console.log(arr.reverse());
  console.log(arr);
  ```

##### 适用于数字排序的自定义排序

```
var arr = [5, 8, 9, 3, 2, 6, 0, 1, 4, 7, 11, 233, 543];
function compare(a, b){
  return a - b;
}
console.log(arr.sort(compare));
```

### 栈和队列操作

##### 栈操作(先进后出，后进先出)
  - push()存入，返回值为操作后的数组长度
  - pop()取出，返回值为被操作的成员值

  ```
  var arr = [1, 3, 5];
  arr.push(4);
  console.log(arr);   // 1 3 5 4
  console.log(arr.push(2, 8, 6));
  console.log(arr);   // 1 3 5 4 2 8 6
  arr.pop();
  console.log(arr);   // 1 3 5 4 2 8
  console.log(arr.pop());
  console.log(arr);   // 1 3 5 4 2
  ```

##### 队列操作(先进先出，后进后出)
  - push()存入，返回值为操作后的数组长度
  - shift();把一个成员从队列头部取出，返回值为该成员值
  - unshift();把一个成员插入到队列头部，返回值为操作后的数组长度

  ```
  var arr = [1, 3, 5];
  arr.push(4);
  console.log(arr);   // 1 3 5 4
  console.log(arr.push(2, 8, 6));
  console.log(arr);   // 1 3 5 4 2 8 6
  arr.shift();
  console.log(arr);   // 3 5 4 2 8 6
  console.log(arr.unshift('a'));
  console.log(arr);   // a 3 5 4 2 8 6
  ```

##### 栈和队列操作总结
  - push()尾存。
  - pop()尾取。
  - unshift()首存。
  - shift()首取。

### 其他数组操作方法

##### 数组连接 concat()
  - 将两个数组连接后以一个新数组返回
  - 原数组不会被操作

  ```
  var arr1 = [1, 3, 5];
  var arr2 = [2, 4, 6];
  var arr = arr1.concat(arr2);
  console.log(arr);   // 1 3 5 2 4 6
  console.log(arr1);  // 1 3 5
  console.log(arr2);  // 2 4 6
  ```

##### 数组截取 slice(start, to)
  - 将数组中的start下标(包含)开始截取直到to下标(不包含)
  - to下标为正数则取到该下标，为负数则从数组末尾开始取相应位数
  - 原数组不会被操作

  ```
  var arr = [0, 1, 2, 3, 4, 5];
  console.log(arr.slice(2, 4));   // 1 3
  console.log(arr.slice(2, -1));  // 2 3 4
  ```

##### 数组删除、插入、替换操作 splice()
  - 直接操作原数组
  - 第一个参数为操作起始下标
  - 第二个参数为删除元素的个数，缺省则删除到数组末尾，如果不需要删除操作则可传入0
  - 后续参数作为新的成员被添加到该位置
  - 该方法返回值为所有被删除元素组成的新数组

  ```
  var arr = [0, 1, 2, 3, 4, 5];
  arr.splice(2, 1, 'a');
  console.log(arr);
  ```

##### 数组成员查找 indexOf()与lastIndexOf()
  - indexOf()查询成员出现的第一个所在位置
  - lastIndexOf()查询成员出现的最后一个位置
  - 如查询不到该成员则返回-1

  ```
  var arr = [2, 4, 6, 8, 0, 4, 6, 8, 0];
  console.log(arr.indexOf(0));    // 4
  console.log(arr.lastIndexOf(0));// 8
  console.log(arr.indexOf(1));    // -1
  console.log(arr.lastIndexOf(1));// -1
  ```

##### every()方法
  - 利用判断函数作为参数检验数组的每个成员
  - 所有检验都为true的时候，every()方法才返回true

  ```
  var arr = [5, 10, 15, 20 ,25];
  console.log(arr.every(function(m){
    return m > 10;  // 检测是否所有元素都大于10
  }));    // false
  console.log(arr.every(function(m){
    return m % 5 == 0;  // 检测所有元素是否都是5的倍数
  }));    // true
  ```

##### some()方法
  - 利用判断函数作为参数检验数组的每个成员
  - 被检验成员只要有一个为true的时候，some()方法即返回true

  ```
  var arr = [5, 10, 15, 20 ,25];
  console.log(arr.some(function(m){
    return m > 10;  // 检测所有元素是否都大于10的
  }));    // true
  console.log(arr.every(function(m){
    return m < 0;  // 检测所有元素是否有负数
  }));    // false
  ```

##### filter()方法
  - 利用判断函数作为参数检验数组的每个成员
  - 将所有满足条件的成员组成一个新的数组返回

  ```
  var arr = [5, 10, 15, 20 ,25];
  console.log(arr.filter(function(m){
     return m % 10 == 0 //检测成员是否为10的倍数
  })); // 10 20
  ```

##### map()方法
  - 对每一个成员进行相关操作
  - 将操作后的成员组成一个新的数组返回

  ```
  var arr = [5, 10, 15, 20 ,25];
  console.log(arr.map(function(m){
    return m / 5 //将每一个成员除以5
  })); // 1 2 3 4 5
  ```

##### forEach()方法
  - 对每一个成员进行相关操作
  - 没有返回值
  - 不会对原数组成员进行改变

  ```
  var arr = [5, 10, 15, 20 ,25];
  console.log(arr.forEach(function(m){
    return m * 5 //将每一个成员除以5
  })); // undefined
  console.log(arr); // 5 10 15 20 25
  ```

  - 可以通过回调函数的index(被操作函数下标)与input(原数组)两个参数对原数组进行操作

  ```
  console.log(arr.forEach(function(item, index, input){
    input[index] = item * 10  //将每一个成员乘以10
  })); // undefined
  console.log(arr); // 50 100 150 200 250
  ```

##### 归纳方法reduce()从左到右、reduceRight()从右到左
  - 回调方法包含4个参数
    - prev:当前操作值1，并将之前的回调结果保存至此。
    - cur：当前操作值2。
    - index：当前操作值cur所在的索引
    - arr：当前操作数组

  ```    
  var arr = [2, 3, 5, 7, 11, 13, 17, 19];
  var result = arr.reduce(function(prev, cur, index, arr){
    console.log('prev, cur, index, arr:', prev, cur, index, arr);
    return prev + cur;  // 利用归纳求和
  });
  console.log(result);
  ```
