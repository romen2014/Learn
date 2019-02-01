/*
	练习：编写一个统计空格、制表符与换行符个数的程序
*/

#include <stdio.h>
int main(){
	int c, ns, nt, nn;
	ns = nt = nn = 0;
	while((c = getchar()) != EOF){
		if (c == ' ')
			ns++;
		else if ( c == '\t')
			nt++;
		else if ( c == '\n')
			nn++;
		else
			;
	}
	printf("%d space\t%d tab\t %d enter\n", ns, nt, nn);
	return 0;
}