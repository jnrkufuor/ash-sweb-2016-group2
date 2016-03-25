/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Hudson Taylor Lekunze
 * Created January 19, 2016
 * Program to check children's ages 
 */

import java.util.Scanner;
import java.util.regex.*;
import java.util.ArrayList;

public class Elders {
    
    public static void main (String [] args){
       
        String check = ""; //String to check if end has been entered
        String patternsplit = " "; //String that identifies space between name and age
        Pattern patt = Pattern.compile(patternsplit); //identifies user input as two separate strings separated by whitespace
        Scanner kb = new Scanner(System.in);
       
        String o_name = ""; //oldest child's name
        int o_age = Integer.MIN_VALUE; //oldest child's age
        String y_name = ""; //oldest child's name
        int y_age = Integer.MAX_VALUE; //oldest child's age
        int count = 0; //number of children entered
        double sum = 0.0; //sum of children ages
       
       
        System.out.println("This program is easy to use. \nFollow instructions "
                + " below and type 'END' to exit ");
        System.out.println("Enter a list of names of children and their ages "
                + "with whitespaces separating them");
        
        
       while(!check.equals("END")){
            check = kb.nextLine();
    
            
            if(check.equalsIgnoreCase("END")){
                break;
            }
                    
            else{
                String [] split = patt.split(check); //splits user input by whitespace into age and name
                
                
                //method below is processed if age entered is greater than age of oldest child
                if(Integer.parseInt(split[1])>o_age){
                    o_age = Integer.parseInt(split[1]);
                    o_name = split[0];
                    
                    if(o_age<y_age){
                        y_age = o_age;
                        y_name = o_name;
                    }
                    
                    count++;
                    sum+=o_age;
                }
                
                else if(Integer.parseInt(split[1])<y_age){
                    y_age = Integer.parseInt(split[1]);
                    y_name = split[0];
                    
                    count++;
                    sum+=o_age;
                }
             
            }              
        }
        
       System.out.println(count + " names were entered"); 
       System.out.println("Oldest: " + o_name);
       System.out.println("Youngest: " + y_name);
       System.out.println("Average age is " + (sum/count));
       
    }
}
    
