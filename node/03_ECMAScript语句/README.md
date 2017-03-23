
## ECMAScript语句结构

### 语句
- 顺序结构
- 条件语句
- 循环语句
- 分支语句
- break与continue
- label语句
- with语句

### 条件语句
- 选择性的执行语句
- 语法：if(条件){条件为真时执行的语句}else if(条件){...}...else{所有条件都为假的时候执行的语句}

```
var score = 85;
if(score > 90){
  console.log('Rank A');
}else if(score > 80){
  console.log('Rank B');
}else if(score > 60){
  console.log('Rank C');
}else{
  console.log('Rank D');
}
```

### 循环语句

##### while循环
- 语法：while(条件){循环体语句}

```
var num = 0;
while(num < 3){
  num += Math.random();
  console.log(num);
}
```

##### do...while循环
- 与while循环类似
- 至少执行一遍循环体
- 语法：do{循环体语句}while(条件)

```
var num = 0;
do{
  num += Math.random();
  console.log(num);
}while(num < 3);
```

##### for循环
- 相比while循环，次数更可控
- 语法：for(var i = 0; 条件; 迭代器){循环体语句}

```
for(var i = 1; i < 10; i++){
  console.log('第' + i + '次执行for循环');
}
```

##### for...in循环
- 适合遍历数组或对象
- 语法：for(var key in 数组或对象){循环体语句}

```
var obj = {'name': 'romen', 'age': 33, 'sex': 'man'}
for(var key in obj){
  console.log('key:', key, 'value', obj[key]);
}
```

### 分支语句

##### switch语句

```
var day = 3;
switch(day % 7){
  case 1:
    console.log("Monday");
    break;
  case 2:
    console.log("Tuesday");
    break;
  case 3:
    console.log("Wednesday");
    break;
  case 4:
    console.log("Thursday");
    break;
  case 5:
    console.log("Friday");
    break;
  case 6:
    console.log("Saturday");
    break;
  default:
    console.log("Sunday");
}
```

```
var month = 3;
switch(month){
  case 1, 3, 5, 7, 8, 10, 12:
    console.log('31 days in month');
    break;
  case 4, 6, 9, 11:
    console.log('30 days in month');
    break;
  case 2:
    console.log('28 days in month');
    break;
}
```

### 语句块的终止

##### break语句
- 直接终止当前循环体或分支语句代码块并跳出该代码块

```
for(var i = 1; i < 5; i++){
  if(i == 3)
    break;
  console.log('第' + i + '次执行for循环');
}
```

##### continue语句
- 中断当前循环体，继续执行下一次循环

```
for(var i = 1; i < 5; i++){
  if(i == 3)
    continue;
  console.log('第' + i + '次执行for循环');
}
```

### label语句
- 适用于嵌套循环时，使break或continue更准确的中断相应的循环

```
outter: for(var i = 1; i <= 5; i++){
  inner: for(var j = 1; j <= i; j++){
    console.log("i=", i, "j=", j);
    if(j == 2)
      break outter;
  }
}
```

### with语句
- 可将多重深入访问进行代指
- **严格模式下禁止使用**

```
var req = {
  session: {
    user: {
      name: 'Romen',
      age: 33,
      sex: 'man'
    }
  }
}

with(req.session.user){
  console.log('name:', name, 'age:', age, 'sex', sex);
}
```
