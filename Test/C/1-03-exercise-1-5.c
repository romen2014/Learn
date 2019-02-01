/*
	练习：修改温度转换程序，要求以逆序（即从300度到0度的顺序）打印温度转换表
*/
#include <stdio.h>

int main(){
	for(int fahr = 300; fahr >= 0; fahr -= 20){
		printf("%3d\t%6.1f\n", fahr, 5.0 / 9.0 * (fahr - 32));
	}
}
