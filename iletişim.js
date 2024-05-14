function kontrol() {
  var ad = document.getElementById('ad').value;
  var email = document.getElementById('email').value;
  var mesaj = document.getElementById('mesaj').value;

  // Boş alan kontrolü
  if (ad == "" || email == "" || mesaj == "") {
    alert("Lütfen tüm alanları doldurun.");
    return false;
  }
  
  // E-posta format kontrolü
  //Regex dizedeki belirli desenleri tanımlamak için kullanılanılır. 
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Geçerli bir e-posta adresi girin");
    return false;
  }
  
  // @ işareti kontrolü 
  //email içinde @ yoksa indexof -1 değerini döndürür
  if (email.indexOf('@') == -1) {
    alert("Lütfen e-posta'ya '@' ekleyiniz ");
    return false;
  }

  // Nokta kontrolü
  if (email.indexOf('.') == -1) {
    alert("Lütfen e-posta'ya '.' ekleyiniz");
    return false;
  }
  
  return true;
}

function temizle(){
  document.getElementById('ad').value = "";
  document.getElementById('email').value = "";
  document.getElementById('mesaj').value = "";
}
