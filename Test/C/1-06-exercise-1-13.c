/*
	练习：编写一个程序，打印输入中单词长度的直方图。
	水平方向的直方图比较容易绘制，垂直方向的直方图则要困难一些。
*/

#include <stdio.h>
int main(){
	int c, wordlength;
	int nlength[10];

	for (int i = 0; i < 10; ++i)
		nlength[i] = 0;

	wordlength = 0;
	while((c = getchar()) != EOF){
		/*	
		统计单词长度，通过数组纪录，数组长度10。
		分别纪录0个长度单词(空格符、制表符、换行符等)出现次数、1个长度单词出现次数、...、9个及以上长度单词次数。
		*/
		if(c == ' ' || c == '\t' || c == '\n'){
			if(wordlength > 9){
				++nlength[9];
			}else{
				++nlength[wordlength];
			}
			wordlength = 0;
		}else{
			++wordlength;
		}
	}
	//	打印水平直方图
	//	记录词频最高值，用于绘制垂直直方图
	int	max = 0;
	for (int i = 0; i < 10; ++i){
		printf("%d: ", i);
		for (int j = 0; j < nlength[i]; ++j){
			printf("*");
			if(max < nlength[i])
				max = nlength[i];
		}
		printf("\n");
	}

	//	打印垂直直方图
	while(max-- > 0){
		for (int i = 0; i < 10; ++i){
			if(nlength[i] > max){
				printf("*\t");
			}else{
				printf(" \t");
			}
		}
		printf("\n");
	}
	for (int i = 0; i < 10; ++i)
		printf("%d\t", i);
	printf("\n");
	return 0;
}