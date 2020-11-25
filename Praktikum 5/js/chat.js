// inisiasi element
let chatBox = document.getElementById("box");
let pesan = document.getElementById("pesan");
let btn_kirim = document.getElementById("kirim");

// event ketika di klik
btn_kirim.onclick = function(){
    let p = document.createElement("P");
    chatBox.appendChild(p);
    p.innerHTML = pesan.value;
}
