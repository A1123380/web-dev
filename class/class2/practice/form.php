<html> 
    <head></head>
<body>
    <form action="info.php" method="POST" >
        
        please input your name:<input type="text" name="uName" value="uName"><br>
        please input your password:<input type="password" name="uPasswd" required><br>
        please input your email:<input type="email" name="uEmail" value="uEmail"><br>
        please select your color:<input type="color" name="uColor" value="uColor"><br>
        please select your age:<input type="number" name="uAge" min ="25" max="60"><br>
        please select your birthday:<input type="date" name="uBirth"><br>
        please input your webpage:<input type="url" name="uUrl" ><br>
        please select how you like the webage :<input type="range" name="uLike" min ="25" max="60"><br>

        <input type="hidden" name="uSecret" value="hahaha"><br> 

        please select your gender:
        male<input type="radio" name="uGender" value="male">
        female<input type="radio" name="uGender" value="female"><br> 

        please select your interests:
        study<input type="checkbox" name="uInterest[]" value="study">
        play<input type="checkbox" name="uInterest[]" value="game">
        sleep<input type="checkbox" name="uInterest[]" value="sleep">

        //多選要陣列

        <<br>

        <select name="uCity">
        <option value="taipei"> taipei </option> 
        <option value="taichung"> taichung </option>
        <option value="kaohsiung"> kaohsiung </option>
        </select>

        <br>

        Please input your comments:
        <textarea cols="10" row="10" name="uComment">
        

        </textarea>   

        <input type="submit"><input type="reset">
    </form>
</body>
</html>