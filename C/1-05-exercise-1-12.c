/*
	练习：编写一个程序，以每行一个单词的形式打印其输出
*/

#include <stdio.h>
int main(){
	int c;
	while((c = getchar()) != EOF){
		if(c == ' ' || c == '\t')
			c = '\n';
		putchar(c);
	}
	return 0;
}