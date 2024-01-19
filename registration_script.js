document.getElementById('user-info-form').addEventListener('submit', function(e) {
    e.preventDefault();
    let name = document.getElementById('txtName').value;
    let email = document.getElementById('txtEmail').value;
    let photo = document.getElementById('userPhoto').value;
    let aboutMe = document.getElementById('txtAboutMe').value;
  
    // Сохранение данных в localStorage
    localStorage.setItem('name', name);
    localStorage.setItem('email', email);
    localStorage.setItem('photo', photo);
    localStorage.setItem('aboutMe', aboutMe);
  
    // Очистка полей формы
    document.getElementById('txtName').value = '';
    document.getElementById('txtEmail').value = '';
    document.getElementById('userPhoto').value = '';
    document.getElementById('txtAboutMe').value = '';
  });