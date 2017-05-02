/*
	float浮点数
*/

#include <stdio.h>

/*	当fahr=0, 20, ..., 300时，分别打印华氏温度与摄氏温度对照表；
	浮点版本	*/

int main(){
	float fahr, celsius;
	int lower, upper, step;

	lower	= 0;
	upper	= 300;
	step	= 20;

	fahr	= lower;
	while (fahr <= upper){
		//常数5.0与9.0都是浮点型，所以5.0/9.0不会像5/9一样结果为0
		celsius	= (5.0 / 9.0) * (fahr - 32.0);

		//％3.0f表明待打印的浮点数(即fahr)至少占3个字符宽，且不带小数点和小数部分；
		//％6.1f表明另一个待打印数(即celsius)至少占6个字符宽，且小数点后面有一位数字。
		printf("%3.0f\t%6.1f\n", fahr, celsius);
		fahr = fahr + step;
	}

	return 0;
}
