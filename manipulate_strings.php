<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Manipulation</title>
</head>
<body>
    <?php
        //this if statement ensures that the string and substring varaibles do exsists
        if(array_key_exists('string', $_POST) && array_key_exists('substring', $_POST)) {
            //this ensures that there is a string and substring entered and that there is exactly 2 words entered
            //the str_word_count counts the numbers of words, the 0 means to return the number and not an array
            if ($_POST['string'] == null || str_word_count($_POST['string'],0) != 2|| $_POST['substring'] == null)
            {
                print("Please enter two words and one subword! <br>");

            }
            else{
                //calls the manipulate function with the string and substring
                manipulate($_POST['string'],$_POST['substring']);
                return;
            }
        }

        //this function takes in the string and substring to manipulate them and print the outcome
        function manipulate($string,$substring)
        {
            print("The string is: " . $string . "<br>");

            //determines the length of the entire string
            $str_length = strlen($string);
            print("The length of the string in letters is: " . $str_length . "<br>");

            //this if statement checks if the substring is in the string
            if (str_contains($string,$substring))
            {
                //the str_replace will take in the string and substring, as well as what to replace the substring with
                print("The substring replaced is: " . str_replace($substring, "...", $string));
                //the strstr will take in the string and substring and print the part of the string that starts with the substring
                print("<br> The part of the word that starts with the substring is: " . strstr($string, $substring));
            }   
            else
            {
                print("The substring is not in the string!");
            }


        }
    ?>
    <form method='post'>
        <div>
            <input type="text" id="input" placeholder="Enter two words!" name="string"> <br>
            <input type="text" id="input" placeholder="Enter part of your previous string!" name="substring" size="30"> <br>
            <button type='submit' name='submit' >Submit</button>
        </div>
    </form>
</body>
</html>