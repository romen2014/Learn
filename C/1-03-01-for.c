/*
	for循环
*/

#include <stdio.h>

int main(){
	for(int fahr = 0; fahr <= 300; fahr += 20){
		printf("%3d\t%7.1f\n", fahr, (5.0 / 9.0) * (fahr - 32));
	}
	return 0;
}