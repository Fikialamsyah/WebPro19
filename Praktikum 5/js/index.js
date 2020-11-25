function validasiLogin(){
    // inisiasi username
    let username = document.getElementById("username").value;
    // inisiasi password
    let password = document.getElementById("password").value;
    
    // validasi
    if (username == "user" && password == "123"){
        alert("Anda Berhasil Login !");
        return true;
    } else {
        alert("Username atau password yang anda masukan salah !");
        return false;
    }
}

function validasiForm() {
    let name = document.getElementById("name").value;
    let nim = document.getElementById("nim").value;
    let number = /^[0-9]+$/;
    // validasi 
    if (name != "" && nim.match(number)){
        alert("Submit berhasil");
        return true;
    } else {
        alert("Data harus di isi dengan benar !");
        return false;
    }
}



