<h1>Авторизация</h1>

<br/><br/>

<form action="/login" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Имя">
    <input type="password" name="password" placeholder="Пароль">

    <input type="submit" value="Войти">
</form>
