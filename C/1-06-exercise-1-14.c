/*
	练习：编写一个程序，打印输入中各个字符出现的频度的直方图
	只处理小写字母
*/

#include <stdio.h>

int main(){
	int c, count[26];

	for (int i = 0; i < 26; ++i)
		count[i] = 0;

	while((c = getchar()) != EOF){
		if(c >= 'a' && c <= 'z')
			++count[c - 'a'];
	}
	printf("\n");

	for (int i = 0; i < 26; ++i){
		putchar(i + 'a');
		printf(":");
		for(int j = 0; j < count[i]; j++){
			printf("*");
		}
		printf("\n");
	}
	return 0;
}