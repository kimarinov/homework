
function generateSquare(n) {

    var magicSquare = [[]]; 
      
    // Initialize position for 1 
    var i = n/2; 
    var j = n-1; 

    // One by one put all values in magic square 
    for (var num=1; num <= n*n; ) 
    { 
        if (i==-1 && j==n) //3rd condition 
        { 
            j = n-2; 
            i = 0; 
        } 
        else
        { 
            //1st condition helper if next number  
            // goes to out of square's right side 
            if (j == n) 
                j = 0; 
                  
            //1st condition helper if next number is  
            // goes to out of square's upper side 
            if (i < 0) 
                i=n-1; 
        } 
          
        //2nd condition 
        console.log(magicSquare[i])
        if (magicSquare[i] != 0)  
        { 
            j -= 2; 
            i++; 
            continue; 
        } 
        else
            //set number 
            magicSquare[i][j] = num++;  
              
        //1st condition 
        j++;  i--;  
    } 

    // print magic square 
    console.log("The Magic Square for "+n+":"); 
    console.log("Sum of each row or column "+n*(n*n+1)/2+":"); 
    for(i=0; i<n; i++) 
    { 
        for(j=0; j<n; j++) 
            console.log(magicSquare[i][j]+" "); 
        console.log(); 
    } 
}

          
        // driver program 
        
        // Works only when n is odd 
        var n = 7; 
        generateSquare(n); 
  