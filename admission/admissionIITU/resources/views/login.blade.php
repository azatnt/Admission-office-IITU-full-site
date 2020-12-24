<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>
    body{
        margin: 0;
        padding: 0;
        font-family: Beon;
        background: #3d8fd1;
    }
    .box{
        width: 400px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: #191919;
        text-align: center;
    }
    .box h1{
        color: white;
        text-transform: uppercase;
        font-weight: 500;

    }
    .box label{
        color: white;
        text-transform: uppercase;
        font-weight: 500;

    }
    .box input[type = "email"],.box input[type = "password"]{
        font-family: "Montserrat SemiBold";
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;

    }
    .box input[type = "email"]:focus,.box input[type = "password"]:focus{
        width: 280px;
        border-color: #2ecc71;

    }
    .box button[type = "submit"]{
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        width: 200px;
        outline: none;
        color: white;
        height: auto;
        border-radius: 30px;
        transition: 0.25s;
        cursor: pointer;
    }
    .box button[type = "submit"]:hover{
        background-color: #2ecc71;
    }

</style>

<div class="container">


    <form class="box" method="POST" action="/login">
        <h1>Log In</h1>
        {{ csrf_field() }}
        <div class="form-group">
            <input type="email" placeholder="Email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <input type="password" placeholder="Password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit">Login</button>
        </div>
    </form>

</div>

