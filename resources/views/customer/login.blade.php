<!DOCTYPE html>
<html>
<head>
    <title>Portal de Login</title>
    <style>
        /* Đặt các kiểu CSS của bạn ở đây */
        * {
    padding: 0px;
    margin: 0px;
}
body {
    background-color: lightgreen;
}
header {
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 15vh;
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
}
h1 {
    letter-spacing: 1.5vw;
    font-family: 'system-ui';
    text-transform: uppercase;
    text-align: center;
}
main {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 75vh;
    width: 100%;
    background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Mountains-1412683.svg/1280px-Mountains-1412683.svg.png) no-repeat center center;
    background-size: cover;
}
.form_class {
    width: 500px;
    padding: 40px;
    border-radius: 8px;
    background-color: white;
    font-family: 'system-ui';
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
}
.form_div {
    text-transform: uppercase;
}
.form_div > label {
    letter-spacing: 3px;
    font-size: 1rem;
}
.info_div {
    text-align: center;
    margin-top: 20px;
}
.info_div {
    letter-spacing: 1px;
}
.field_class {
    width: 100%;
    border-radius: 6px;
    border-style: solid;
    border-width: 1px;
    padding: 5px 0px;
    text-indent: 6px;
    margin-top: 10px;
    margin-bottom: 20px;
    font-family: 'system-ui';
    font-size: 0.9rem;
    letter-spacing: 2px;
}
.submit_class {
    border-style: none;
    border-radius: 5px;
    background-color: #FFE6D4;
    padding: 8px 20px;
    font-family: 'system-ui';
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin: auto;
    margin-top: 10px;
    box-shadow: 2px 2px 5px rgb(0,0,0,0.2);
    cursor: pointer;
}
footer {
    height: 10vh;
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: -5px -5px 10px rgb(0,0,0,0.3);
}
footer > p {
    text-align: center;
    font-family: 'system-ui';
    letter-spacing: 3px;
}
footer > p > a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}
    </style>
    <script>
        function validarLogin() {
            // Thêm mã JavaScript để xác thực thông tin đăng nhập (nếu cần)
            const validarLogin = () => {
            alert('Teste');
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>Portal de Login</h1>
    </header>
    <main>
        <form class="login" method="POST" action="{{url('customer/loginProcess')}}">		
            @if (Session::has('fail'))
                <div class="alert alert-danger" role="alert" style="color: red">
                    {{Session::get('fail')}}
                </div>
                @endif
                @csrf
            <div class="form_div">
                <label>Login:</label>
                <input class="field_class" name="email" type="login__input" placeholder="User name / Email" autofocus>
                <label>Password:</label>
                <input class="field_class" name="password" type="password" placeholder="Password">
                <button type="submit" class="button login__submit">
					<span class="field_class">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
            </div>
        </form>
    </main>
    <footer>
        <p>Desenvolvido por <a href="#">JM_Code&trade;</a></p>
    </footer>
</body>
</html>