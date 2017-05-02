/*
	练习：编写一个程序打印摄氏温度转换为相应华氏温度的转换表
*/

#include <stdio.h>
int main(){

	printf("celsius\tfahr\n");
	float celsius, fahr;
	int min, max, step;
	min 	= -20;
	max 	= 100;
	step	= 10;

	celsius = min;
	while (celsius <= max){
		fahr = 9.0 / 5.0 * celsius + 32;
		printf("%7.1f\t%3.0f\n", celsius, fahr);
		celsius += step;
	}

	return 0;
}
