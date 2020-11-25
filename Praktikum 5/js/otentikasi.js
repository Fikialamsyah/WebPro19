// iniasiasi element
let btn_login = document.getElementById("login");

// event ketika di klik
btn_login.onclick = function() {
    // inisiasi username
    let username = document.getElementById("username").value;
    // inisiasi password
    let password = document.getElementById("password").value;
    let btn_login = document.getElementById("login");

    // validasi
    if (username == "fiki" && password == "123"){
        alert("Login Berhasil !");
        window.location = "homepage.html";
        return false;
    } else {
        alert("Username atau password yang anda masukan salah !");
        return false;
    }
}