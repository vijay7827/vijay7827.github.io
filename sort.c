#include<stdio.h>
#include<conio.h>
void main()
{
  int ar[]={3,5,8,2,6,9};
  int temp; 
  int len=ar.length();
  for(int i=0;i<len;i++)
    {
      for(int j=i+i;j<len;j++)
        {
          if(ar[i]<ar[j])
           {
             temp=ar[i];
             ar[i]=ar[j];
             ar[j]=temp;
            }
         }
      }
}
              
