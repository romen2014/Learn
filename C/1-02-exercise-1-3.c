/*
	练习：修改温度转换程序，使之能在转换表的顶部打印一个标题
*/

#include <stdio.h>
int main(){

	printf("fahr\tcelsius\n");

	float fahr, celsius;
	int min, max, step;
	min 	= 0;
	max		= 200;
	step 	= 10;

	fahr	= min;

	while(fahr <= max){
		celsius	= 5.0 / 9.0 * (fahr - 32);
		printf("%4.0f\t%7.1f\n", fahr, celsius);
		fahr += step;
	}

	return 0;
}
