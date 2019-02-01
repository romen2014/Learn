/*
	while循环与int整数
*/

#include <stdio.h>

/*	当fahr=0, 20, ..., 300时，分别打印华氏温度与摄氏温度对照表；
	整数版本	*/

int main(){
	int fahr, celsius;
	int lower, upper, step;

	lower	= 0;		//温度表下限
	upper	= 300;		//温度表上限
	step	= 20;		//步长

	fahr	= lower;
	while (fahr	<= upper){
		//	不写成5/9*(fahr-32)是因为5/9两整数相除会被舍位，从而导致结果为0
		celsius	= 5 * (fahr - 32) / 9;

		printf("%d\t%d\n", fahr, celsius);
		fahr	= fahr + step;
	}
}
