const pattern = /^\w(\.?\-?\w+)*@\w+(\.(\-?[a-zA-Z0-9]+)+)+$/;

// console.log(pattern.test("junaidi@example.penyedia-mail-per.com"));

// komponen email: namapengguna@domain.tld
// hanya mengandung satu karakter @
// nama pengguna boleh menggunakan (a-z), (0-9), (-), (_), (.)
// tidak boleh diawali dan diakhiri - dan .
// . dan - tidak boleh berturut-turut
// domain boleh mengandung (a-z), (0-9), (-)
// top level domain harus diawali .
// top level domain harus mengandung minimal 2 karakter
const pattern1 = /^\w((\.?|\-?)\w+)*@([a-zA-Z0-9]\-?)+(\.\w{2,})+$/;

console.log(pattern1.test("juna.idi@example.co.id"));
