/*
	符号常量
	1. 定义格式	#define	名字	替换文本
	2. 符号常量非变量，不需要出现在声明中
	3. 符号常量通常用大写字母拼写，这样可以很容易与用小写字母拼写的变量名相区别
	4. 注意：#define指令行的末尾没有分号
*/

#include <stdio.h>
//	表的下限
#define	LOWER	0
//	表的上限
#define	UPPER	300
//	步长
#define	STEP	20
/*	打印华氏温度——摄氏温度对照表	*/
int main(){
	for(int fahr = LOWER; fahr <= UPPER ; fahr += STEP){
		printf("%3d\t%7.1f\n", fahr, 5.0 / 9.0 * (fahr - 32));
	}
	return 0;
}
