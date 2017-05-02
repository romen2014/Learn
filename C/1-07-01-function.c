/*
	函数
*/

//	测试power函数
#include <stdio.h>
//	power函数声明
int power(int m, int n);
int power2(int m, int n);

int main(){
	int i;

	for (int i = 0; i < 10; ++i)
		printf("%d\t%d\t%d\n", i, power(2, i), power2(-3, i));
	return 0;
}

//	power函数：求底数的n次幂；其中 n >= 0。(版本1)
int power(int base, int n){
	int i, p;
	p = 1;
	for (int i = 1; i <= n; ++i)
		p = p * base;
	return p;
}

//	power函数：求底数的n次幂；其中 n >= 0。(版本2)
int power2(int base, int n){
	int p;
	for(p = 1; n > 0; --n)
		p *= base;
	return p;
}