/*
	练习：验证表达式getchar()!=EOF的值是0还是1
*/

#include <stdio.h>

int main(){
	printf("%d\n", (getchar() != EOF));
	return 0;
}