function validateForm(){

    var result=document.getElementById('result');

    var ad=document.getElementById('form-ad').value;
    var soyad=document.getElementById('form-soyad').value;
    var emial=document.getElementById('form-email').value;
    var cinsiyet=document.getElementById('form-cinsiyet').value;
    var mesaj=document.getElementById('form-mesaj').value;
    
    var check1=document.getElementById('inlineCheckbox1');
    var check2=document.getElementById('inlineCheckbox2');
    var check3=document.getElementById('inlineCheckbox3');
  
    if( ad==""){
      result.style.display="block";
      result.innerHTML="İsim boş bırakılamaz !";
      return false;
    }

    if( soyad==""){
      result.style.display="block";
      result.innerHTML="Soyad Boş bırakılamaz !";
      return false;
    }

    if(emial==""){
      result.style.display="block";
      result.innerHTML="Email boş bırakılamaz !";
      return false;
    }

    var forMail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
    if(forMail.test(emial)==false){
      result.style.display="block";
      result.innerHTML="Lütfen bir eposta adresi giriniz";
      return false;
    }

    if(cinsiyet=="Bir Seçim Yapınız"){
      result.style.display="block";
      result.innerHTML="Bir cinsiyet seçiniz !";
      return false;
    }

    if(mesaj==""){
      result.style.display="block";
      result.innerHTML="Boş mesaj gönderilemez !";
      return false;
    }

  }
  
  function deleteForm(){

    document.getElementById('form-ad').value="";
    document.getElementById('form-soyad').value="";
    document.getElementById('form-email').value="";
    document.getElementById('form-cinsiyet').value="Bir Seçim Yapınız";
    document.getElementById('form-mesaj').value="";
    
    document.getElementById('inlineCheckbox1').checked=false;
    document.getElementById('inlineCheckbox2').checked=false;
    document.getElementById('inlineCheckbox3').checked=false;

    result.style.display="none";
  }

  function validateLogin(){
    var email=document.getElementById('email').value;
    var password=document.getElementById('pass').value;
    var dizi = email.split("@");

    if(email==""||password==""){
      result.style.display="block";
      result.innerHTML="E-posta Veya Şifre Boş Bırakılamaz";
      return false;
    }

    if(dizi[1]!="sakarya.edu.tr"){
      result.style.display="block";
      result.innerHTML="@sakarya.edu.tr uzantılı bir mail adresi giriniz !";
      return false;
    }

    if(dizi[0]!=password){
      result.style.display="block";
      result.innerHTML="Şifreniz Yanlış !";
      return false;
    }

  }

/* Api (İlgi Alanlarım) */
const cat_btn = document.getElementById('cat_btn');
const dog_btn = document.getElementById('dog_btn');
const cat_result = document.getElementById('cat_result');
const dog_result = document.getElementById('dog_result');

cat_btn.addEventListener('click', getRandomCat);
dog_btn.addEventListener('click', getRandomDog);

function getRandomCat() {
	fetch('https://aws.random.cat/meow')
		.then(res => res.json())
		.then(data => {
			cat_result.innerHTML = `<img src=${data.file} alt="cat" />`
		});
}

function getRandomDog() {
	fetch('https://random.dog/woof.json')
		.then(res => res.json())
		.then(data => {
			if(data.url.includes('.mp4')) {
				getRandomDog();
			}
			else {
				dog_result.innerHTML = `<img src=${data.url} alt="dog" />`;
			}
		});
}