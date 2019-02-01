/*
	练习：编写一个将输入复制到输出的程序，并将其中连续的多个空格用一个空格代替。
*/

#include <stdio.h>
int main(){
	int c, s;
	while((c = getchar()) != EOF){
		if(c != ' '){
			s = 0;
			putchar(c);
		}else if(s != ' '){
			s = ' ';
			putchar(s);
		}else{
			;
		}
	}
	return 0;
}