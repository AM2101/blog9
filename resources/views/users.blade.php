<h1>Users Froms</h1>
<form action="users" method="post">
    @csrf
    <input type="text" name="username" placeholder="enter user id"><br/>
    <input type="password" name="password" placeholder="enter password"><br/>
    <button type="submit">login</button>
    </form>