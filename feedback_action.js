document.getElementById('user-info-form').addEventListener('submit', function(e) {
    e.preventDefault();
    let name = document.getElementById('txtName').value;
    let email = document.getElementById('txtEmail').value;
  
    // Отправка информации на сервер...
    // Например, с помощью AJAX запроса
    // ...
  
    // Обновление информации о пользователе на странице
    // Например, путем обновления DOM-элементов
  
    // Очистка полей формы
    document.getElementById('txtName').value = '';
    document.getElementById('txtEmail').value = '';
    document.getElementById('userPhoto').value = '';
  });