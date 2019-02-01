/*
	练习：重新编写1.2节中的温度转换程序，使用函数实现温度转换计算
*/

#include <stdio.h>
float fahrToCelsius(float fahr);
float celsiusToFahr(float celsius);

int main(){
	for (float i = 0; i <= 300; i += 20)
		printf("%d\t%7.1f\n",i ,fahrToCelsius(i) );

	for (float i = -20; i <= 100; i += 10)
		printf("%7.1f\t%3.0f\n", i, celsiusToFahr(i) );
	return 0;
}

//	celsius	= 5.0 / 9.0 * (fahr - 32);
float fahrToCelsius(float fahr){
	return 5.0 / 9.0 * (fahr - 32.0);
}

//	fahr = 9.0 / 5.0 * celsius + 32;
float celsiusToFahr(float celsius){
	return 9.0 / 5.0 * celsius + 32.0;
}