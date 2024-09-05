// Function required - mengecek apakah sebuah input kosong atau tidak
function isEmpty(input){
  if (input.value.trim() == "") {
    alert(`Masukan ${input.name} tidak boleh kosong`);
    return true;
  }
  return false;
}


// Function validasi input nama
const nama = document.getElementById('nama');
function validasiNama(){
  // jika input nama tidak kosong maka cek kesesuaiannya
  if (!isEmpty(nama)){
    const namePatt = /^[a-z\s]+$/i;
    // Jika input nama tidak sesuai dengan pattern nama
    if (!namePatt.test(nama.value)){
      alert("Nama tidak valid");
      return false;
    }
    return true;
  }
  return false;
}

// Function validasi input email
const email = document.getElementById('email');
function validasiEmail(){
  // Jika input email tidak kosong maka cek kesesuaiannya
  if (!isEmpty(email)){
    const emailPatt = /^[^-\._\s@]+@[^\s@]+\.[^-\._\s@]+$/i
    // Jika input nama tidak sesuai dengan pattern nama

    if (!emailPatt.test(email.value)){
      alert("Email tidak valid");
      return false;
    }
    return true;
  }
  return false;
}

// Fungsi Validasi input nomor telepon
const telepon = document.getElementById("telepon");
function validasiTelepon(){
  if (!isEmpty(telepon)){
    const teleponPatt = /\d{9,15}/i;
    if (!teleponPatt.test(telepon.value)){
      alert("No. Telepon tidak valid!");
      return false;
    }
  return true
  }
  return false;
}

const form = document.getElementById('form-pesan-tiket');
form.addEventListener("submit", function(e){
  e.preventDefault();
  let isValid = true;

  if (!validasiNama()) {
    isValid = false;
    nama.focus();
  }else if (!validasiEmail()){
    isValid = false;
    email.focus();
  }else if(!validasiTelepon()){
    isValid = false;
    telepon.focus();
  }

  if (isValid) {
    form.submit();
  }
});
