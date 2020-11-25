// iniasiasi element
let ubuntu = document.getElementById("ubuntu");
let pop_os = document.getElementById("pop_os");
let kali = document.getElementById("kali");
let mint = document.getElementById("mint");
let fedora = document.getElementById("fedora");
let open_suse = document.getElementById("open_suse")
let imgPick = document.getElementById("img_pick");
let img = document.getElementById("img")

// event ketika di klik
imgPick.onclick = function(){
    if(imgPick.value == ubuntu.value){
        img.setAttribute("src", "ubuntu.png")
        alert("ini gambar ubuntu.png")
    } else if(imgPick.value == pop_os.value){
        img.setAttribute("src", "pop_os.png")
        alert("ini gambar pop_os.png")
        return false;
    }if(imgPick.value == kali.value){
        img.setAttribute("src", "kali_linux.png")
        alert("ini gambar kali_linux.png")
        return false;
    }if(imgPick.value == mint.value){
        img.setAttribute("src", "linux_mint.png")
        alert("ini gambar linux_mint.png")
        return false;
    }if(imgPick.value == fedora.value){
        img.setAttribute("src", "fedora_linux.png")
        alert("ini gambar fedora_linux.png")
        return false;
    }if(imgPick.value == open_suse.value){
        img.setAttribute("src", "open_suse.png")
        alert("ini gambar open_suse.png")
        return false;
    }
}