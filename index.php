

<!doctype html>
<html>
<head>
    
<style>
    body{
        padding:0;
        margin: 0px auto;
        
    }   
    
    .wrapper{
        height: 100%;
        margin: 0 auto;
        padding: 0px;
    }
    
    header{
        min-height: 50px;
        background-color: chocolate;
    }
    .left_panel{
        float: left;
        height:585px;
        background-color: antiquewhite;
        width: 20%;
    }
        .right_panel{
        float: right;
        height:585px;
        background-color: antiquewhite;
        width: 15%;
    }
    .content{
        height: 585px;
        width: 75%;
        margin-left: 20%;
        background-color: bisque;
    }
    footer{
        min-height: 30px;
        background-color:coral;
        text-align: center;
        line-height: 30px;
    }
    
    .logo {
        float: left;
        padding: 0px;
        margin: 0px;  
    }
    
    nav {
        float: right;
        padding: 0px;
        margin: 0px;
    }
    
    nav ul{
        display: inline;
        list-style-type: none;
        
        
        
    }
    
    nav ul li{
    display: inline;
	list-style-type: none;
    }
    nav ul li a{
        padding:20px 77px;
        text-decoration: none;
       
        margin: 0;
        line-height: 50px;
    }
    nav ul li a:hover{
        background-color: antiquewhite;
    }
    
</style>    
</head>
    <body>
    <div class="wrapper">
    <header>
        <div class="logo">
        
        </div>
            <nav>
            <ul>
                <li><a href="#">LOGIN</a></li>
                <li><a href="#" style="padding:20px 61px;">REGISTER</a></li>
                
            </ul>
        </nav>
        
    </header>
    <aside class="left_panel"></aside>
    <aside class="right_panel"></aside>
    <div class="content">
        <style>
            .box {
                width: 70%;
                height: 300px;
                background-color: aquamarine;
                margin: 0 auto;
            }
        </style>
        <div class="box">
        <form method="get" action="login.php">
            
            <table>
                <tr>
                <td>Email: </td>
                <td><input type="email" name="email" placeholder="Input your Email Address" ></td>
                    <td>Password: </td>
                <td><input type="password" name="password" placeholder="************" ></td>
                    <td>    <input type="submit" name="submit" value="SIGN IN"></td>
                </tr>
            
            </table>
            
        </form>
        
        
        </div>
        
        
        </div>
        <footer> Copyright &copy; 2017 All Right Reaserve</footer>
        </div>
    </body>
</html>