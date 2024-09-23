<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>

<body>
<div class="wrapper">
<img src="CPC3-removebg-preview.png">
<form>
    <div>
       <input type="text" name="TeacherID" id="TeacherID-input" placeholder="Teacher ID">
    </div>
    <div>
        <input type="text" name="password" id="password-input" placeholder="Password">
    </div>
    <div>
        <button type="submit">Login</button>
        
       
    </div>
</form>
</div>
</body>


<style>
:root{
    --accent-color:#151517;
    --base-color: #fefefe;
    --text-color: #07060f;
    --input-color: #3ebdee46;
}

*{
    margin:0;
    padding:0;
}

html{
    font-family:Arial, Helvetica, sans-serif;
    font-size:12pt;
    color: var(--text-color);
    text-align: center;
}

body{
    min-height: 100vh;
    background-image: url(CPC4.jpg);
    background-size:cover;
    background-position:right;
    overflow:hidden;
}
.wrapper{
    box-sizing: border-box;
    background-color: var(--base-color);
    height:100vh;
    width: max(40%, 600px);
    padding:10px;
    border-radius: 0 20px 20px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
h1{
    font-size:3rem;
    font-weight:900;
    text-transform: uppercase;
}
form{
    width: min(400px,100%);
    margin-top: 20px;
    margin-bottom: 50px;
    display: flex;
    flex-direction:column;
    align-items: center;
    gap: 40px;
}
form > div{
    width: 100%;
    display: flex;
    justify-content: center;
}
form input{
    box-sizing: border-box;
    flex-grow: 1;
    min-width: 0;
    height: 50px;
    padding: 1em;
    font: inherit;
    border-radius: 0 10px 10px 0;
    border: none;
    background-color: var(--input-color);
    transition: 150ms ease;
}
form input:hover{
border: 2px solid var(--accent-color);
}
form input:focus{
    outline:none;
    border-color: var(--text-color);
}
form input::placeholder{
    color: var(--text-color);
    opacity: 1;
}

form button{
    margin-top: 10px;
    border: none;
    border-radius: 1000px;
    padding: .85em 4em;
    background-color: rgba(18, 187, 105, 0.973);
    color: var(--base-color);
    font: inherit;
    font-weight: 600;
    text-transform: uppercase;
    cursor: pointer;
    transition: 150ms ease;
}

form button:hover{
    background-color: var(--text-color);
}
@media(max-width: 1100px){
    .wrapper{
        width: min(600px, 100%);
        border-radius: 0;
    }
    
}
</style>












</html>